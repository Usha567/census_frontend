$(document).ready(function(){
  $('#loginForm').on('submit', function(event) {
      event.preventDefault();
      login();
  });
});

function login() {
  var username = $('#username').val();
  var phone = $('#mobile').val();
  var role = $('input[name="role"]:checked').val();  // Get the selected role value
  var url = "http://192.168.1.10:8000/api/login/";

  var paraArr = {
      'name': username,
      'mobile': phone,
      'role_id': role
  };

  $.ajax({
      url: url,
      type: "POST",
      contentType: "application/json",  // Send JSON data
      data: JSON.stringify(paraArr),
      success: function (result) {
          console.log(result, "result");
          
          // Ensure the token is set correctly
          if (result.token) {
              localStorage.setItem('token', result.token);
              console.log(localStorage.getItem('token'), 'Token after setting');
          } else {
              console.error('Token not received in response');
              return;
          }

          localStorage.setItem('name', username);
          localStorage.setItem('mobile', phone);
          
          const d = new Date();
          d.setTime(d.getTime() + 60 * 60 * 1000);
          var expires_in = d;
          console.log(expires_in,"expires_in");
          localStorage.setItem('expireIn', expires_in);
          console.log(expires_in,'expiry time');

          if (result.usertype == "admin") {
              window.location.href = "http://localhost:8080/census_project/adminpanel.php";
          } else if (result.usertype == "agent") {
              window.location.href = "http://localhost:8080/census_project/census_data.php";
          } else {
              console.log('Unknown user type:', result.usertype);
          }
          alert('Login successful!');
      },
      error: function (error) {
          console.error('Error fetching data:', error);
          alert('Login failed!');
      }
  });
}
