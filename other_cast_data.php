<?php
    include 'includes/headertag.php';
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search and View Detailed Family Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="http://localhost:8080\census_project\cssfile\detailpage.css">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
  
</head>
<style>


.container__menu {
    font-size: 1.2rem;
    animation: fold 1s linear 0s 1;
}

.container__menu a {
    text-decoration: none;
    color: #000;
    padding: 1rem;
    border: 1px solid #000;
    border-radius: 8px;
    text-shadow: 0 0 1px #000;
    animation: fold 1s linear 0s 1;
}

.menubtn {
    display: none;
    color: #000;
    padding: 0.5rem;
    border: 1px solid #000;
    border-radius: 8px;
    font-size: 1.6rem;
}

.closebtn {
    display: none;
    color: #000;
    padding: 0.5rem;
    border: 1px solid #000;
    border-radius: 8px;
    font-size: 1.6rem;
}

.container__menu a::selection {
    color: red;
}

@keyframes fold {
    from {
        transform: skew(10deg);
        color: green;
        background-color: #000;
    }

    to {
        transform: skew(160deg);
    }
}

@media (max-width: 618px) {
    .container__menu {
        display: none;
    }

    .menubtn {
        display: block;
    }
}
@media (min-width: 620px) {

    .menubtn {
        display: none;
    }
}
 /* Dropdown container */
 .language-dropdown{
    margin: 1px;
    padding: 1px;
    border:none;
 }
  .button-group button {
    margin: 0 5px;
    padding: 6px 20px;
    border: none;
    color: #fff;
    border-radius: 4px;
}

.search-box {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }
        .search-box label {
            margin-bottom: 5px;
        }
        .search-input-field {
            width: 100%;
            padding: 2px;
            box-sizing: border-box;
        }
        .search-box input {
            margin-bottom: -10px;
        }
        .seachbox{
            margin:52px;
            padding: 5px;
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
        </ul>
    </nav>
</header>


    <div class="container mt-4"></div>
    <!-- Language toggle -->
    <!-- <div class="container-fluid text-right">
      <div class="dropdown mt-3">
        <button class="bg-info">Select Language <i class="fas fa-caret-down"></i></button>
        <div class="dropdown-content text-center">
          <a href="#" onclick="setLanguage('en')">English</a>
          <a href="#" onclick="setLanguage('hi')">Hindi</a>
        </div>
      </div>
    </div> -->

    <!-- Search Form -->
    <div class="container-fluid pb-5">
        <div class="filter-card shadow mt-5">
            <div class="card bg-light">
                <div class="card-body">
                    <h3 class="text-center  fw-blod main-heading" data-key="detailed_family_information">Detailed Family Information</h3>
                    <div class="seachbox">
                        <div class="row">
                            <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                <div class="search-box">
                                    <label for="Name" class="text-black fs-6" data-key="search_label">Name:</label>
                                    <input type="text" id="Name" class="control-form search-input-field" placeholder="Search Name">
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                <div class="search-box">
                                    <label for="number" class="text-black fs-6" data-key="search_label">Mobile No.:</label>
                                    <input type="text" id="number" class="control-form search-input-field" placeholder="Search number">
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                <div class="search-box">
                                    <label for="Age" class="text-black fs-6" data-key="search_label">Age Range:</label>
                                    <div class="d-flex align-items-center">
                                        <input type="text" id="minAge" class="control-form search-input-field me-1" placeholder="Min Age">
                                        <span class="mx-1">-</span>
                                        <input type="text" id="maxAge" class="control-form search-input-field" placeholder="Max Age">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                <div class="search-box">
                                    <label for="State" class="text-black fs-6" data-key="search_label">State:</label>
                                    <input type="text" id="State" class="control-form search-input-field" placeholder="Search State">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                <div class="search-box">
                                    <label for="District" class="text-black fs-6" data-key="search_label">District:</label>
                                    <input type="text" id="District" class="control-form search-input-field" placeholder="Search District">
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                <div class="search-box">
                                    <label for="Qualification" class="text-black fs-6" data-key="search_label">Qualification:</label>
                                    <input type="text" id="Qualification" class="control-form search-input-field" placeholder="Search Qualification">
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                <div class="search-box">
                                    <label for="Status" class="text-black fs-6" data-key="search_label">Status:</label>
                                    <input type="text" id="Status" class="control-form search-input-field" placeholder="Search Marital Status">
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                <div class="search-box">
                                    <label for="Occupation" class="text-black fs-6" data-key="search_label">Occupation:</label>
                                    <input type="text" id="Occupation" class="control-form search-input-field" placeholder="Search Occupation">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12  text-center">
                                <div class="button-group mt-2">
                                    <button class="bg-info mt-1" data-key="search_button">Search</button>
                                    <button class="bg-info mt-1" data-key="reset_button">Reset</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="table-responsive mt-4">
                        <table id="example" class="table table-striped bg-info table-hover table-bordered dataTable no-footer" width="100%">
                            <thead class="">
                                <tr>
                                    <!-- <th class="text-white" data-key="s_no">S.No.</th> -->
                                    <th class="text-white" data-key="name">Name</th>
                                    <th class="text-white" data-key="mobile">Mobile</th>
                                    <th class="text-white" data-key="age">Age</th>
                                    <th class="text-white" data-key="state">State</th>
                                    <th class="text-white" data-key="other_state" style="display:none;">Other State</th>
                                    <th class="text-white" data-key="district">District</th>
                                    <th class="text-white" data-key="other_district" style="display:none;">Other District</th>
                                    <th class="text-white" data-key="city">City</th>
                                    <th class="text-white" data-key="other_city" style="display:none;">Other City</th>
                                    <th class="text-white" data-key="qualification">Qualification</th>
                                    <th class="text-white" data-key="marital_status">Marital Status</th>
                                    <th class="text-white" data-key="occupation">Occupation</th>
                                </tr>
                            </thead>
                            <tbody id="data-table" class="bg-white">
                                <!-- Data will be appended here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<script>
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
    </script>

<script>
$(document).ready(function() {
    var url = 'http://192.168.1.10:8000/api/getall_initial_family_details/';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(response) {
            var data = response.data;
            var tableBody = $('#data-table');
            tableBody.empty(); // Clear any existing data

            var showOtherCity = false;
            var showOtherState = false;
            var showOtherDistrict = false;

            data.forEach(function(item, index) {
                if (item.familymemberdetails.length > 0) { // Check if familymemberdetails is not empty
                    item.familymemberdetails.forEach(function(member, memberIndex) {
                        var row = '<tr>' +
                      
                            '<td><a href="view-detail-page.php?family_id=' + item.fk_family_id + '&family_member_id=' + member.id + '">' + member.name + '</a></td>' +
                            '<td>' + member.mobile_number + '</td>' +
                            '<td>' + member.age + '</td>' +
                            '<td>' + (item.state_details ? item.state_details.state_name : '') + '</td>' +
                            '<td class="other_state">' + (item.other_state || '') + '</td>' +
                            '<td>' + (item.district_details ? item.district_details.district_name : '') + '</td>' +
                            '<td class="other_district">' + (item.other_district || '') + '</td>' +
                            '<td>' + (item.city_details ? item.city_details.city_name : '') + '</td>' +
                            '<td class="other_city">' + (item.other_city || '') + '</td>' +
                            '<td>' + member.qualification + '</td>' +
                            '<td>' + member.marital_status + '</td>' +
                            '<td>' + member.occupation + '</td>' +
                        '</tr>';
                        tableBody.append(row);

                        // Check if we need to show the columns
                        if (item.other_city != '') {
                            showOtherCity = true;
                        }
                        if (item.other_district != '') {
                            showOtherDistrict = true;
                        }
                        if (item.other_state != '') {
                            showOtherState = true;
                        }
                    });
                }
            });

            // Show or hide the columns based on the data
            if (showOtherCity) {
                $('#example th[data-key="other_city"]').show();
                $('#example th[data-key="other_state"]').hide();
                $('#example th[data-key="other_district"]').hide();
            }
            if (showOtherDistrict) {
                $('#example th[data-key="other_district"]').show();
                $('#example th[data-key="other_state"]').hide();
                if (!showOtherCity) {
                    $('#example th[data-key="other_city"]').hide();
                }
            }
            if (showOtherState) {
                $('#example th[data-key="other_state"]').show();
                if (!showOtherCity) {
                    $('#example th[data-key="other_city"]').hide();
                }
                if (!showOtherDistrict) {
                    $('#example th[data-key="other_district"]').hide();
                }
            }

            if (showOtherCity && showOtherDistrict && showOtherState) {
                $('#example th[data-key="other_state"]').show();
                $('#example th[data-key="other_district"]').show();
                $('#example th[data-key="other_city"]').show();
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
            alert('An error occurred while fetching data. Please try again.');
        }
    });
});
</script>

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