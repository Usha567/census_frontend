
$(document).ready(function() {
    $('#submit_details').on('click', function (event) {
        store(event);
        
    });
});
function store(event) {
    event.preventDefault();
    console.log('checking...');
    var Id_number = $('#Id_number').val();
    var state = $('#stateDropdown').val();
    var district = $('#districtDropdown').val();
    var city = $('#city').val();
    var otherState = $('#otherState').val();
    var otherDistrict = $('#otherDistrict').val();
    var otherCity = $('#otherCity').val();
    var address = $('#address').val();

    var paraArr = {
        'family_Id': Id_number,
        'state': state,
        'district': district,
        'city': city,
        'native_address': address,
        'other_state': otherState,
        'other_district': otherDistrict,
        'other_city': otherCity,
    };

    var url = 'http://192.168.1.10:8000/api/add_initial_family_detail/';
    console.log(url);

    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(result) {
            console.log(result, "result");
            console.log("Add successfully");
            // Display an alert message
            alert("Initial family details added successfully.");
            // Redirect to add_familyDetails.php after clicking OK
            window.location.href = "add_familyDetails.php?id=" + result.data.id + "&family_id=" + paraArr.family_Id;
        },
        error: function(error) {
            console.error('Error fetching data:', error);
            if (error.status === 404) {
                alert("Error: The family ID has already been taken. Please use a different family ID.");
            } 
        }
    });
}
function getState() {
    var url = "http://192.168.1.10:8000/api/states/";
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            // console.log(data);
            const selects = document.querySelectorAll('#stateDropdown');

            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">कृपया एक विकल्प चुनें</option>';

                if (data.data && data.data.length > 0) {
                    data.data.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.state_name;
                        option.value = row.id;
                        // console.log(option);
                        select.appendChild(option);
                    });

                    // Add event listener to state dropdown
                    select.addEventListener('change', function() {
                        const selectedStateName = this.options[this.selectedIndex].text; // Get the selected state name
                        if(selectedStateName === 'Other') {
                            document.getElementById('otherStateInput').style.display = 'block';
                        } else {
                            document.getElementById('otherStateInput').style.display = 'none';
                        }
                        getDistrict(this.value); // Always fetch districts, regardless of selection
                    });
                } else {
                    select.innerHTML = '<option>कोई वैध डेटा उपलब्ध नहीं है</option>';
                }
            });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function getDistrict(state_id) {
    var url = 'http://192.168.1.10:8000/api/district/' + state_id;
    console.log('Requesting districts for state ID:', state_id); // Debugging statement
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            // console.log('Received district data:', data); 
            const selects = document.querySelectorAll('#districtDropdown');

            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">कृपया एक विकल्प चुनें</option>';

                if (data.data && data.data.length > 0) {
                    data.data.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.district_name;
                        option.value = row.id;
                        select.appendChild(option);
                    });
                } else {
                    select.innerHTML = '<option>कोई वैध डेटा उपलब्ध नहीं है</option>';
                }
                // Add event listener to district dropdown
                select.addEventListener('change', function() {
                    const selectedDistrictName = this.options[this.selectedIndex].text; // Get the selected district name
                    if(selectedDistrictName === 'Other District') {
                        document.getElementById('otherDistrictInput').style.display = 'block';
                    } else {
                        document.getElementById('otherDistrictInput').style.display = 'none';
                    }
                    getCity(this.value); // Always fetch cities, regardless of selection
                });
            });
        },
        error: function (error) {
            console.error('Error fetching district data:', error);
        }
    });
}

function getCity(district_id) {
    var url = 'http://192.168.1.10:8000/api/city/' + district_id;
    console.log('Requesting cities for district ID:', district_id); // Debugging statement
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log('Received city data:', data); // Debugging statement
            const selects = document.querySelectorAll('#city');

            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">कृपया एक विकल्प चुनें</option>';

                if (data.data) {
                    const cities = Array.isArray(data.data) ? data.data : [data.data];
                    
                    if (cities.length > 0) {
                        cities.forEach(row => {
                            const option = document.createElement('option');
                            option.textContent = row.city_name;
                            option.value = row.id;
                            select.appendChild(option);
                        });
                    } else {
                        select.innerHTML = '<option>कोई वैध डेटा उपलब्ध नहीं है</option>';
                    }
                } else {
                    select.innerHTML = '<option>कोई वैध डेटा उपलब्ध नहीं है</option>';
                }
                // Add event listener to city dropdown
                select.addEventListener('change', function() {
                    const selectedCityName = this.options[this.selectedIndex].text; // Get the selected city name
                    if(selectedCityName === 'Other City') {
                        document.getElementById('otherCityInput').style.display = 'block';
                    } else {
                        document.getElementById('otherCityInput').style.display = 'none';
                    }
                });
            });
        },
        error: function (error) {
            console.error('Error fetching city data:', error);
        }
    });
}

getState();

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

