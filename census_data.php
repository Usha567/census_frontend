<?php
    include 'includes/headertag.php';
    include 'includes/headerjs.php';
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search and View Detailed Family Information</title>
    <!-- <link rel="stylesheet" href="http://localhost:8080\census_project\cssfile\header.css"> -->
    <script src="http://localhost:8080/census_project\jsfile\census_data.js"></script> 
</head>
<style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
    text-decoration: none;
    list-style: none;
}

.header {
    background: linear-gradient(-170deg, rgb(27, 70, 136) 19%, rgb(73, 184, 197) 100%);
    padding: 10px;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo h6,
.nav .text-center h6,
.user-menu h6 {
    margin: 0;
}

.user-menu {
    position: relative;
    display: inline-block;
}

.user-icon {
    background: none;
    border: none;
    color: white;
    font-size: 1.5em;
    cursor: pointer;
}

.dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.dropdown-content ul li {
    padding: 12px 16px;
    text-align: left;
}

.user-menu:hover .dropdown-content {
    display: block;
}

.logoutbutton {
    background: none;
    border: none;
    color: black;
    cursor: pointer;
    width: 100%;
    text-align: left;
}

.image-logo {
    width: 70px; /* Adjust the size as needed for responsiveness */
    height: auto;
}

@media (max-width: 768px) {
    .header nav {
        flex-direction: column;
        align-items: center;
    }

    .logo-container {
        margin-bottom: 10px;
    }

    .user-section {
        margin-top: 10px;
    }

    .heading-container {
        text-align: center;
        margin-bottom: 10px;
    }

    .header .text-center h6 {
        font-size: 14px; /* Adjust the font size for smaller screens */
    }

    .image-logo {
        width: 50px; /* Adjust the size for smaller screens */
    }

    .user-icon {
        font-size: 1.2em;
    }

    .dropdown-content {
        right: 50%;
        transform: translateX(50%);
    }

    .main-heading {
        width: 100%;
        height: auto;
        padding: 0 10px;
        margin-top:5px;
    }
}

</style>
<body>
<header class="header">
    <nav class="d-flex justify-content-between">
        <div class="col-3">
            <div class="logo">
                <img src="http://localhost:8080/census_project/assets/images/Census_Logo.png" alt="reload img" class="image-logo">
            </div>
        </div>
        <div class="col-6 text-center main-heading">
            <h6 class="fw-bold text-white">"छीपा समाज शिक्षा और कैरियर" ग्रुप</h6>
            <h6 class="fw-bold text-white">छीपा (क्षत्रिय) समाज की जनगणना, वर्ष - 2024</h6>
            <h6 class="fw-bold text-white">(परिवार परिचय - पत्र)</h6>
        </div>
        <div class="col-3 text-end user-section">
            <div class="user-menu">
                <button class="user-icon">
                    <i class="fas fa-user"></i>
                </button>
                <div class="dropdown-content">
                    <ul>
                        <li>
                            <button class="logoutbutton text-dark" onclick="user_logout();">लॉग आउट</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- <div class="marquee_tag my-1">
      <marquee behavior="scroll" class="py-2 marquee-scroll "direction="" scrollamount="10"><b><img src="http://localhost:8080\census_project\assets\images\IMG-20240527-WA0005.jpg" alt="" class=" text-center image-census"> "छिपा समाज शिक्षा और कैरियर" ग्रुप आपका हार्दिक स्वागत करता है ||</b></marquee>
    </div> -->

    <div class="container-fluid">
    <div class="bg-light py-3">
            <h4 class="text-center">परिवार की जानकारी</h4>

            </div>
    </div>
    <!-- Search Form -->
<section class="contact-wrap ">
    <div class="container py-3">

        <form id="dealership_enq_from" class="form-view-inner form-view-overlay bg-light box-shadow p-3 mt-4" action="" method="" >
            <div class="row justify-content-center">
            
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                    <div class="form-outline">
                        <label for="yr_state" class="form-label text-dark fw-bold">राज्य</label>
                        <select class="form-select py-2" id="stateDropdown" name="_state" aria-label=".form-select-lg example" required>
                            <!-- <option value="other">Other</option> -->
                        </select>
                        <div id="otherStateInput" style="display: none;" class="mt-3">
                            <input type="text" class="form-control" id="otherState" placeholder="अन्य राज्य दर्ज करें">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                    <div class="form-outline">
                        <label for="yr_district" class="form-label text-dark fw-bold">जिला</label>
                        <select class="form-select py-2" id="districtDropdown" name="dist" aria-label=".form-select-lg example" required>
                            <!-- <option value="other">Other</option> -->
                        </select>
                        <div id="otherDistrictInput" style="display: none;" class="mt-3">
                            <input type="text" class="form-control" id="otherDistrict" placeholder="अन्य जिला दर्ज करें">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                    <div class="form-outline">
                        <label for="city" class="form-label text-dark fw-bold">शहर</label>
                        <select class="form-select py-2" id="city" name="city" aria-label=".form-select-lg example" required>
                            <!-- <option value="other">Other</option> -->
                        </select>
                        <div id="otherCityInput" style="display: none;" class="mt-3">
                            <input type="text" class="form-control" id="otherCity" placeholder="अन्य शहर दर्ज करें">
                        </div>
                    </div>  
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                    <div class="form-outline">
                        <label for="f_name" class="form-label mb-0 py-1 text-dark fw-bold">आईडी नंबर</label>
                        <input type="text" class="form-control mb-0" placeholder="आईडी नंबर दर्ज करें"  id="Id_number" name="f_name" required>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                    <label for="a_hrvst" class="form-label text-dark fw-bold">मूल निवासी</label>
                    <textarea class="form-control" rows="3" placeholder="स्थान दर्ज करें" name="about" id="address" onkeydown="return /[a-zA-Z\s,]/i.test(event.key)" required></textarea>
                </div>
                <div class="text-center  my-3">
                    <button type="submit" id="submit_details" class="btn submit-button bg-info mt-1 px-5 w-100" data-bs-toggle="modal" data-bs-target="get_OTP_btn">जमा करें</button>         
                </div>        
            </div>
        </form>
    </div>
</section>

</body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
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
</script>
<script>
    

</script>
<!-- <script>
        async function setLanguage(language) {
            const response = await fetch(`${language}.json`);
            const translations = await response.json();
            
            document.querySelectorAll('[data-key]').forEach(element => {
                const key = element.getAttribute('data-key');
                element.textContent = translations[key];
            });
        }

        // Set default language to English
        setLanguage('en');
    </script> -->

<script>
    function getState() {
    var url = "http://192.168.1.10:8000/api/states/";
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#stateDropdown');

            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">कृपया एक विकल्प चुनें</option>';

                if (data.data && data.data.length > 0) {
                    data.data.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.state_name;
                        option.value = row.id;
                        select.appendChild(option);
                    });
                } else {
                    select.innerHTML = '<option>कोई वैध डेटा उपलब्ध नहीं है</option>';
                }

                // Add event listener to state dropdown
                select.addEventListener('change', function() {
                    const selectedStateId = this.value;
                    const selectedStateName = this.options[this.selectedIndex].text;

                    if (selectedStateName === 'अन्य') {
                        document.getElementById('otherStateInput').style.display = 'block';
                    } else {
                        document.getElementById('otherStateInput').style.display = 'none';
                    }

                    getDistrict(selectedStateId); // Fetch districts based on the selected state
                });
            });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function getDistrict(state_id, callback) {
    var url = 'http://192.168.1.10:8000/api/district/' + state_id;
    console.log('Requesting districts for state ID:', state_id);
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log('Received district data:', data);
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

                // Add event listener for district dropdown
                select.addEventListener('change', function() {
                    const selectedDistrictId = this.value;
                    const selectedDistrictName = this.options[this.selectedIndex].text;

                    if (selectedDistrictName === 'अन्य जिला') {
                        document.getElementById('otherDistrictInput').style.display = 'block';
                    } else {
                        document.getElementById('otherDistrictInput').style.display = 'none';
                    }

                    getCity(selectedDistrictId); // Fetch cities based on the selected district
                });
            });

            if (callback) callback(); // Execute callback if provided
        },
        error: function (error) {
            console.error('Error fetching district data:', error);
        }
    });
}

function getCity(district_id, callback) {
    var url = 'http://192.168.1.10:8000/api/city/' + district_id;
    console.log('Requesting cities for district ID:', district_id);
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log('Received city data:', data);
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

                // Add event listener for city dropdown
                select.addEventListener('change', function() {
                    const selectedCityName = this.options[this.selectedIndex].text;

                    if (selectedCityName === 'अन्य शहर') {
                        document.getElementById('otherCityInput').style.display = 'block';
                    } else {
                        document.getElementById('otherCityInput').style.display = 'none';
                    }
                });
            });

            if (callback) callback(); // Execute callback if provided
        },
        error: function (error) {
            console.error('Error fetching city data:', error);
        }
    });
}

// Initialize the state dropdown
getState();
</script>