<!DOCTYPE html>
<html lang="en">
<?php
    include 'includes/headertag.php';
    include 'includes/headerjs.php';
   ?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost:8080\census_project\cssfile\adminpanel.css">
  <link rel="stylesheet" href="http://localhost:8080\census_project\cssfile\familydetails.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="http://localhost:8080/census_project\jsfile\initial_family.js"></script> 
</head>
<style>
   .dataTables_wrapper .dataTables_paginate {
    float: left;
    text-align: left;
    margin-top: 10px;
}

.dataTables_wrapper .dataTables_length {
    float: right;
    text-align: right;
    margin-top: 10px;
}
.goog-te-banner-frame.skiptranslate, .goog-te-gadget-icon {
      display: none !important;
    }
</style>

<body>
<div class="main" id="main">
        <div class="sidebar text-center">
            <div class="aside-tools py-3">
                <!-- <img src="http://localhost:8080\census_project\assets\images\Census_Logo.png" alt="" class=" image"> -->
                <div class="logo">
                    <h6 class=" text-white small-text">"छीपा समाज शिक्षा और कैरियर" ग्रुप</h6>
                    <h6 class=" text-white small-text">छीपा (क्षत्रिय) समाज की जनगणना, वर्ष - 2024</h6>
                    <h6 class=" text-white small-text">(परिवार परिचय - पत्र)</h6>
                </div>
            </div>
            <!-- <div class="aside-tools py-2">
                <div id="google_translate_element" class="mt-1"></div>
            </div> -->
            <div class="menu py-2">
                <ul class="side-nav">
                    <li class="side-nav__item side-nav__item-active ">
                       <a href="adminpanel.php">
                       <i class="fas fa-user text-white"></i>  <span class="agt text-white text-decoration-none">जनगणना अधिकारी</span>
                       </a>
                    </li>
                    <li class="side-nav__item side-nav__item-active  text-center">
                       <a href="initial_family.php" class="agent text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 13A5 5 0 1 0 8 3a5 5 0 0 0 0 10"/>
                        </svg>
                         <span class="agt text-white">जनगणना डेटा</span>
                       </a>
                    </li>
                    <li class="side-nav__item side-nav__item-active  text-center">
                       <a href="update_familydetails.php" class="agent text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 13A5 5 0 1 0 8 3a5 5 0 0 0 0 10"/>
                        </svg>
                         <span class="agt text-white">पारिवारिक विवरण</span>
                       </a>
                    </li>
                    <li class="side-nav__item side-nav__item-active  text-center notranslate">
                       <a href="feadback.php" class="agent text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 13A5 5 0 1 0 8 3a5 5 0 0 0 0 10"/>
                        </svg>
                       <span class="agt text-white">प्रतिक्रिया</span>
                    </a>
                      
                    </li>
                </ul>
            </div>
        </div>
    <div class="content">
            <header>
                <i class="fas fa-bars" id="menu"></i>
                <div class="admin-header">
                    <img src="http://localhost:8080/census_project/assets/images/admin-logo.jpg" alt="Admin Logo" class="adminlogo">
                    <span class="text-white is-user-name">व्यवस्थापक का नाम</span>
                    <div class="dropdown">
                        <i class="fas fa-caret-down" id="dropdown-btn"></i>
                        <div class="dropdown-content" id="dropdown-content">
                            <a href="#logout"><i class="fas fa-sign-out-alt"></i> लॉग आउट</a>
                            <!-- <div id="google_translate_element" class="mt-1 text-center"></div> -->
                        </div>
                    </div>
                </div>
            </header>

        <div class="container ">
            <div class="filter-card shadow mt-5">
                <div class="card bg-light">
                    <div class="card-body">
                        <h5 class="text-center">सभी जनगणना विवरण</h5>
                        <div class="seachfield">
                            <div class="row">
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="husband-id">परिवार आईडी</label>
                                        <input type="text" class="form-control" id="id_search">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="husband-name">नाम</label>
                                        <input type="text" class="form-control" id="name_search">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="Number">नंबर</label>
                                        <input type="text" class="form-control" id="Number_search">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-12 text-center">
                                    <div class="button-group mt-2">
                                        <button class="bg-info mt-1" data-key="search_button" onclick="searchdata()">सर्च</button>
                                        <button class="bg-info mt-1" data-key="reset_button">रीसेट</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive mt-4">
                        <table id="example" class="table table-striped bg-info table-hover table-bordered dataTable no-footer" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-white" data-key="name">नाम</th>
                                    <th class="text-white" data-key="father_name">पिता का नाम</th>
                                    <th class="text-white" data-key="mobile">मोबाइल नंबर</th>
                                    <th class="text-white" data-key="age">आयु</th>
                                    <th class="text-white" data-key="age">मूल निवासी</th>
                                    <th class="text-white" data-key="qualification">शिक्षा</th>
                                    <th class="text-white" data-key="marital_status">वैवाहिक स्थिति	</th>
                                    <th class="text-white" data-key="occupation">कार्य</th>
                                    <th class="text-white" data-key="">गतिविधि</th>
                                </tr>
                            </thead>
                            <tbody id="data-table" class="bg-white"></tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>


<script>
    const Bar = document.getElementById("menu");
const main = document.getElementById("main");
Bar.addEventListener("click", () => {
  return main.classList.toggle("close");
});

</script>
<script>
function searchdata() {
    var Family_id = $('#id_search').val();
    var Name = $('#name_search').val();
    var number = $('#Number_search').val();

    // Check if all fields are empty
    var allFieldsEmpty = !Family_id && !Name && !number;

    if (allFieldsEmpty) {
        alert('Please enter at least one search criteria.');
        var paraArr = {
            'flag': 'nosearchparam'
        };
    } else {
        var paraArr = {
            'family_id': Family_id,
            'name': Name,
            'mobile': number,
        };
    }

    var url = 'http://192.168.1.10:8000/api/search_family_details/';
    $.ajax({
        url: url,
        type: 'POST',
        data: paraArr,
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(response) {
            console.log(response, "Search results");
            updateTable(response.data); // Call the function to update the table with the search results
        },
        error: function(xhr, status, error) {
            if (xhr.status === 404) {
                // Handle 404 error here
                const tableBody = $('#data-table');
                tableBody.html('<tr><td colspan="11">No matching data available</td></tr>');
                // Clear the DataTable
                $('#example').DataTable().clear().draw();
            } else {
                console.error('Error searching for data:', error);
            }
        }
    });
}

function updateTable(data) {
    console.log(updateTable,'updateTable');
    console.log(data,'data');
    var tableBody = $('#data-table');
    tableBody.empty(); // Clear any existing data

    data.forEach(function(item) {
        console.log(item,'item',item.name);

        var otherCity = item.initfamilydetails[0].other_city || '';
        var otherState = item.initfamilydetails[0].other_state || '';
        var otherDistrict = item.initfamilydetails[0].other_district || '';

        var stateName = (item.initfamilydetails[0].state_details && item.initfamilydetails[0].state_details.state_name) || '';
        var districtName = (item.initfamilydetails[0].district_details && item.initfamilydetails[0].district_details.district_name) || '';
        var cityName = (item.initfamilydetails[0].city_details && item.initfamilydetails[0].city_details.city_name) || '';
        var maritalStatus = item.marital_status || '';

        var row = '<tr>' +
            '<td><a href="view-detail-page.php?family_id=' + item.family_id + '&family_member_id=' + item.family_member_id + '">' + (item.name || '') + '</a></td>' +
            '<td>' + (item.father_name || '') + '</td>' +
            '<td>' + (item.mobile_number || '') + '</td>' +
            '<td>' + (item.age || '') + '</td>' +
            '<td>' + stateName + ' ' + otherState + ', ' + districtName + ' ' + otherDistrict + ', ' + cityName + ' ' + otherCity + '</td>' +
            '<td>' + (item.qualification || '') + '</td>' +
            '<td>' + maritalStatus + '</td>' +
            '<td>' + (item.occupation || '') + '</td>' +
            '<td><button class="delete-btn" data-id="' + item.id + '">Delete</button></td>' +
        '</tr>';
        tableBody.append(row);
    });

    // Re-initialize the DataTable if needed
    if ($.fn.DataTable.isDataTable('#example')) {
        $('#example').DataTable().clear().destroy();
    }
    $('#example').DataTable();
}
// Event listener for reset button
$('#resetButton').on('click', function() {
    $('#Name').val('');
    $('#number').val('');
    $('#minAge').val('');
    $('#maxAge').val('');
    $('#State').val('');
    $('#District').val('');
    $('#Qualification').val('');
    $('#Status').val('');
    $('#Occupation').val('');

    // Clear the table
    $('#data-table').empty();
    // Optionally, you can fetch the initial data again or just leave the table empty
});

// Function to handle delete action
function deleteMember(memberId) {
    if (confirm('Are you sure you want to delete this member?')) {
        var url = 'http://192.168.1.10:8000/api/delte_initial_family_details/' + memberId;

        $.ajax({
            url: url,
            type: "DELETE",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function(response) {
                alert('Member deleted successfully.');
                location.reload(); // Reload the page to reflect changes
            },
            error: function(error) {
                console.error('Error deleting member:', error);
                alert('An error occurred while deleting the member. Please try again.');
            }
        });
    }
}
</script>
<script>
        // Function to toggle dropdown content
        document.getElementById('dropdown-btn').addEventListener('click', function(event) {
            event.stopPropagation();
            var dropdownContent = document.getElementById('dropdown-content');
            dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
        });

        // Hide dropdown content when clicking outside
        window.addEventListener('click', function(event) {
            var dropdownContent = document.getElementById('dropdown-content');
            if (!event.target.matches('#dropdown-btn') && !dropdownContent.contains(event.target)) {
                dropdownContent.style.display = 'none';
            }
        });
    </script>