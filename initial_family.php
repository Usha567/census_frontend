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
  <link rel="stylesheet" href="http://localhost:8080\census_project\cssfile\familydetail_Admin.css">
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
        <div class="menu py-2">
            <ul class="side-nav">
                <li class="side-nav__item side-nav__item-active ">
                   <a href="admin.php">
                   <i class="fas fa-user text-white"></i>  <span class="agt text-white text-decoration-none">Agent Management</span>
                   </a>
                </li>
                <li class="side-nav__item side-nav__item-active  text-center">
                   <a href="initial_family.php" class="agent text-decoration-none">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 13A5 5 0 1 0 8 3a5 5 0 0 0 0 10"/>
                    </svg>
                     <span class="agt text-white">Census Data</span>
                   </a>
                </li>
                <li class="side-nav__item side-nav__item-active  text-center">
                   <a href="familydetail_admin.php" class="agent text-decoration-none">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 13A5 5 0 1 0 8 3a5 5 0 0 0 0 10"/>
                    </svg>
                     <span class="agt text-white">Family Details</span>
                   </a>
                </li>
                <li class="side-nav__item side-nav__item-active  text-center">
                   <a href="feadback.php" class="agent text-decoration-none">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 13A5 5 0 1 0 8 3a5 5 0 0 0 0 10"/>
                    </svg>
                   <span class="agt text-white">Feadback</span>
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
                <span class="text-white is-user-name">Admin Name</span>
                <div class="dropdown">
                    <i class="fas fa-caret-down"></i>
                    <div class="dropdown-content">
                        <a href="#logout" onclick="">Logout</a>
                    </div>
                </div>
            </div>
        </header>

        <div class="container ">
            <div class="filter-card shadow mt-5">
                <div class="card bg-light">
                    <div class="card-body">
                        <h5 class="text-center">All Census Details</h5>
                        <div class="seachfield">
                            <div class="row">
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="husband-id">ID</label>
                                        <input type="text" class="form-control" id="husband-id">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="husband-name">Name</label>
                                        <input type="text" class="form-control" id="husband-name">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="husband-mother-name">Number</label>
                                        <input type="text" class="form-control" id="husband-mother-name">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-12 text-center">
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
                                        <th class="text-white" data-key="s_no">S.No.</th>
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
                                        <th class="text-white" data-key="action">Action</th>
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

            var rowNumber = 0; // Initialize row number counter

            data.forEach(function(item) {
                if (item.familymemberdetails.length > 0) {
                    item.familymemberdetails.forEach(function(member) {
                        rowNumber++; // Increment row number for each member

                        var row = '<tr>' +
                            '<td>' + rowNumber + '</td>' + // Use rowNumber instead of (index + 1)
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
                            '<td><button class="btn btn-danger btn-sm" onclick="deleteMember(' + member.family_member_id + ');"><i class="fa fa-trash"></i></button></td>' +
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
            }
            if (showOtherDistrict) {
                $('#example th[data-key="other_district"]').show();
            }
            if (showOtherState) {
                $('#example th[data-key="other_state"]').show();
            }
            if (!showOtherCity) {
                $('#example th[data-key="other_city"]').hide();
            }
            if (!showOtherDistrict) {
                $('#example th[data-key="other_district"]').hide();
            }
            if (!showOtherState) {
                $('#example th[data-key="other_state"]').hide();
            }

            // Destroy previous DataTable instance if exists
            if ($.fn.DataTable.isDataTable('#example')) {
                $('#example').DataTable().destroy();
            }

            // Initialize DataTable
            $('#example').DataTable({
                "paging": true, // Enable pagination
                "pageLength": 10, // Number of rows per page
                "lengthChange": false, // Disable the option to change page length
                "searching": false, // Disable searching/filtering
                "info": false, // Disable showing "Showing x to y of z entries"
                "autoWidth": false // Disable auto width calculation
            });

            // Show the table after initializing DataTable
            $('#example').show();
        },
        error: function(error) {
            console.error('Error fetching data:', error);
            alert('An error occurred while fetching data. Please try again.');
        }
    });
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
