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
    <link rel="stylesheet" href="http://localhost:8080\census_project\cssfile\detailpage.css">
    <script src="http://localhost:8080/census_project\jsfile\census_data.js"></script> 
</head>
<style>
.logoutbutton {
    border-radius: 20px; /* Adjust the value as needed to control the roundness */
    background-color: #fff; /* Set background color to white */
    padding: 5px 10px; /* Add padding to the button */
    border: none; /* Remove default button border */
    cursor: pointer;
    transition: background-color 0.3s ease; /* Add transition effect for hover */
}

.logoutbutton:hover {
    background-color: #eee; /* Change background color on hover */
}
</style>
<body>
<header class="header">
    <nav>
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon">&#9776;</label>
        <div class="logo">
            <h6 class="fw-bold text-white">"छीपा समाज शिक्षा और कैरियर" ग्रुप</h6>
            <h6 class="fw-bold text-white">छीपा (क्षत्रिय) समाज की जनगणना, वर्ष - 2024</h6>
            <h6 class="fw-bold text-white">(परिवार परिचय - पत्र)</h6>
        </div>
        <ul class="menu">
            <li>
                <a href="#" id="translate-icon" onclick="toggleDropdown()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                        <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286zm1.634-.736L5.5 3.956h-.049l-.679 2.022z"/>
                        <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zm7.138 9.995q.289.451.63.846c-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6 6 0 0 1-.415-.492 2 2 0 0 1-.94.31"/>
                    </svg>
                </a>
                <div class="dropdown" id="translate-dropdown" style="display: none;">
                    <a href="#" class="text-dark">हिंदी</a>
                    <a href="#" class="text-dark">English</a>
                </div>
            </li>
            <!-- Add the logout icon here -->
            <li>
                <a href="#" class="logout-icon">
                   <button class="logoutbutton" onclick="user_logout();">logout</button>
                </a>
            </li>
        </ul>
    </nav>
</header>

<!-- <div class="marquee_tag my-1">
      <marquee behavior="scroll" class="py-2 marquee-scroll "direction="" scrollamount="10"><b><img src="http://localhost:8080\census_project\assets\images\IMG-20240527-WA0005.jpg" alt="" class=" text-center image-census"> "छिपा समाज शिक्षा और कैरियर" ग्रुप आपका हार्दिक स्वागत करता है ||</b></marquee>
    </div> -->

    <div class="container-fluid">
    <div class="bg-light py-3">
            <h4 class="text-center">Family Information</h4>

            </div>
    </div>
    <!-- Search Form -->
    <section class="contact-wrap ">
        <div class="container py-3">
        <!-- -->
            <!-- <h5 class="text-center">Family Information</h5> -->
    <form id="dealership_enq_from" class="form-view-inner form-view-overlay bg-light box-shadow p-3 mt-4" action="" method="" >
        <div class="row justify-content-center">
           
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                <div class="form-outline">
                    <label for="yr_state" class="form-label text-dark fw-bold">State</label>
                    <select class="form-select py-2" id="stateDropdown" name="_state" aria-label=".form-select-lg example" required>
                        <!-- <option value="other">Other</option> -->
                    </select>
                    <div id="otherStateInput" style="display: none;" class="mt-3">
                        <input type="text" class="form-control" id="otherState" placeholder="Enter other state">
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                <div class="form-outline">
                    <label for="yr_district" class="form-label text-dark fw-bold">District</label>
                    <select class="form-select py-2" id="districtDropdown" name="dist" aria-label=".form-select-lg example" required>
                        <!-- <option value="other">Other</option> -->
                    </select>
                    <div id="otherDistrictInput" style="display: none;" class="mt-3">
                        <input type="text" class="form-control" id="otherDistrict" placeholder="Enter other district">
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                <div class="form-outline">
                    <label for="city" class="form-label text-dark fw-bold">City</label>
                    <select class="form-select py-2" id="city" name="city" aria-label=".form-select-lg example" required>
                        <!-- <option value="other">Other</option> -->
                    </select>
                    <div id="otherCityInput" style="display: none;" class="mt-3">
                        <input type="text" class="form-control" id="otherCity" placeholder="Enter other city">
                    </div>
                </div>  
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                <div class="form-outline">
                    <label for="f_name" class="form-label mb-0 py-1 text-dark fw-bold">ID Number</label>
                    <input type="text" class="form-control mb-0" placeholder="Enter Your Name"  id="Id_number" name="f_name" required>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                <label for="a_hrvst" class="form-label text-dark  fw-bold">Native address</label>
                    <textarea class="form-control" rows="3" placeholder="Enter Location" name="about" id="address" onkeydown="return /[a-zA-Z\s]/i.test(event.key)" required></textarea>
            </div>
            <div class="text-center  my-3">
                <button type="submit" id="submit_details" class="btn submit-button bg-info mt-1 px-5 w-100" data-bs-toggle="modal" data-bs-target="get_OTP_btn">Submit</button>         
            </div>        
        </div>
    </form>
    </div>
</section>



</body>
</html>

<!-- <script>
    const menubtn = document.querySelector(".menubtn");
const closebtn = document.querySelector(".closebtn");

menubtn.onclick = () => {
    menubtn.style.display = "none"
    closebtn.style.display = "block"
}

closebtn.onclick = () => {
    closebtn.style.display = "none"
    menubtn.style.display = "block"
}
    </script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function toggleDropdown() {
        var dropdown = document.getElementById("translate-dropdown");
        if (dropdown.style.display === "none") {
            dropdown.style.display = "block";
        } else {
            dropdown.style.display = "none";
        }
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


