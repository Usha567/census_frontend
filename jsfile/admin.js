function user_logout() {
    var url = "http://192.168.1.10:8000/api/logout/";
    var token = localStorage.getItem('token');
    
    if (!token) {
        console.error('Token not found. Cannot log out.');
        return;
    }

    $.ajax({
        url: url,
        type: "POST",
        headers: {
            'Authorization': 'Bearer ' + token
        },
        success: function (result) {
            console.log("Logout admin");
            localStorage.removeItem("token");
            localStorage.removeItem("mobile");
            localStorage.removeItem("name");
            localStorage.removeItem("expireIn");
            window.location.href = "login.php";
        },
        error: function (error) {
            console.error('Error logging out:', error);
        }
    });
}


