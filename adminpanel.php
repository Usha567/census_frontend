
<?php
    include 'includes/headertag.php'; 
    include 'includes/headerjs.php';
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>
  <link rel="stylesheet" href="http://localhost:8080\census_project\cssfile\adminpanel.css">

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
  <script src="http://localhost:8080/census_project\jsfile\admin.js"></script> 
</head>
<style>
  
                 
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
                       <a href="adminpanel.php">
                       <i class="fas fa-user text-white"></i>  <span class="agt text-white text-decoration-none">Agent Management</span>
                       </a>
                    </li>
                    <li class="side-nav__item side-nav__item-active  text-center">
                       <a href="initial_family.php" class="agent text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 13A5 5 0 1 0 8 3a5 5 0 0 0 0 10"/>
                        </svg>
                         <span class="agt text-white">Census Data</span>
                       </a>
                    </li>
                    <li class="side-nav__item side-nav__item-active  text-center">
                       <a href="familydetail_admin.php" class="agent text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 13A5 5 0 1 0 8 3a5 5 0 0 0 0 10"/>
                        </svg>
                         <span class="agt text-white">Family Details</span>
                       </a>
                    </li>
                    <li class="side-nav__item side-nav__item-active  text-center">
                       <a href="feadback.php" class="agent text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-fill" viewBox="0 0 16 16">
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
                      <a href="#" onclick="user_logout();">Logout</a>
                    </div>
                </div>
            </div>
        </header>
            <div class="filter-card shadow mt-5">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center fw-bold main-heading">User Management</h3>
                        <div class="row mt-4">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="search-box text-center">
                                    <label for="search-input" class="fw-bold text-black fs-5">Search User:</label>
                                    <input type="text" id="search-input" class="control-form search-input-field" placeholder="Enter Name, Mobile Number">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-12 text-center">
                                <div class="button-group mt-2">
                                    <button class="bg-info mt-1">Search</button>
                                    <button class="bg-info mt-1">Reset</button>
                                    <button class="bg-info mt-1" id="add-user-btn"data-bs-toggle="modal"  data-bs-target="#staticBackdrop"onclick="resetFormFields();">
                                    Add User</button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive mt-4">
                        <table id="example" class="table table-striped  table-hover table-bordered dataTable no-footer" width="100%; margin-bottom: 15px;">
                        <thead class="bg-info">
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>State</th>
                                        <th>District</th>
                                        <th>City</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-light" id="data-table"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!--Model For Add-->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content modal_box">
                    <div class="modal-header modal_head bg-info">
                    <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Add New User</h5>
                    <button type="button" class="btn-close btn-info" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <!-- <h5 class="fw-bold text-center">Fill your Details</h5> -->
                                <form action="" method="POST" class="" id="form_add">
                                    <div class="filter-card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col- col-sm-4 col-lg-4 col-md-4 mt-3" hidden>
                                                    <div class="form-outline">
                                                        <label class="form-label">Role id<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" for="role_id" id="role_id" name="role_id" value="2">
                                                        <small></small>
                                                    </div>
                                                </div>
                                                <div class="col- col-sm-4 col-lg-4 col-md-4 mt-3" hidden>
                                                    <div class="form-outline">
                                                        <label class="form-label">User id<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" for="user_id" id="user_id" name="user_id" value="">
                                                        <small></small>
                                                    </div>
                                                </div>
                                                <div class="col- col-sm-4 col-lg-4 col-md-4 mt-3">
                                                    <div class="form-outline">
                                                        <label class="form-label">Name<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" for="first_name" id="first_name" name="first_name">
                                                        <small></small>
                                                    </div>
                                                </div>
                                                <div class="col- col-sm-4 col-lg-4 col-md-4 mt-3">
                                                    <div class="form-outline">
                                                        <label class="form-label">Contact Number<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="mobile" for="mobile" id="mobile">
                                                        <small></small>
                                                    </div>
                                                </div>
                                                <div class="col- col-sm-4 col-lg-4 col-md-4 mt-3">
                                                    <div class="form-outline">
                                                        <label class="form-label">Email ID<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="email" name="email" for="email">
                                                        <small></small>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4 col-md-4 col-lg-4 mt-2">
                                                    <div class="form-outline">
                                                        <label for="yr_state" class="form-label">State<span class="text-danger">*</span></label>
                                                        <select class="form-select py-2" id="stateDropdown" name="_state" aria-label=".form-select-lg example" required>
                                                            <!-- <option value="other">Other</option> -->
                                                        </select>
                                                        <div id="otherStateInput" style="display: none;" class="mt-3">
                                                            <input type="text" class="form-control" id="otherState" placeholder="Enter other state">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4 col-md-4 col-lg-4 mt-2">
                                                    <div class="form-outline">
                                                        <label for="yr_district" class="form-label ">District<span class="text-danger">*</span></label>
                                                        <select class="form-select py-2" id="districtDropdown" name="dist" aria-label=".form-select-lg example" required>
                                                            <!-- <option value="other">Other</option> -->
                                                        </select>
                                                        <div id="otherDistrictInput" style="display: none;" class="mt-3">
                                                            <input type="text" class="form-control" id="otherDistrict" placeholder="Enter other district">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4 col-md-4 col-lg-4 mt-2">
                                                    <div class="form-outline">
                                                        <label for="city" class="form-label ">City<span class="text-danger">*</span></label>
                                                        <select class="form-select py-2" id="city" name="city" aria-label=".form-select-lg example" required>
                                                            <!-- <option value="other">Other</option> -->
                                                        </select>
                                                        <div id="otherCityInput" style="display: none;" class="mt-3">
                                                            <input type="text" class="form-control" id="otherCity" placeholder="Enter other city">
                                                        </div>
                                                    </div>  
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <div class="text-end">
                                                        <button class="bg-info text-white text-end btn mb-0 btn_all" id="save">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn_search" id="save">Submit</button>
                    </div> -->
                </div>
            </div>
          </div>
        </div>
            <!--Model For Edit-->
</body>
</html>

<script>
    const Bar = document.getElementById("menu");
    const main = document.getElementById("main");
    Bar.addEventListener("click", () => {
    return main.classList.toggle("close");
    });
</script>

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
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';

                if (data.data && data.data.length > 0) {
                    data.data.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.state_name;
                        option.value = row.id;
                        select.appendChild(option);
                    });
                } else {
                    select.innerHTML = '<option>No valid data available</option>';
                }

                // Add event listener to state dropdown
                select.addEventListener('change', function() {
                    const selectedStateId = this.value;
                    const selectedStateName = this.options[this.selectedIndex].text;

                    if (selectedStateName === 'Other') {
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
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';

                if (data.data && data.data.length > 0) {
                    data.data.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.district_name;
                        option.value = row.id;
                        select.appendChild(option);
                    });
                } else {
                    select.innerHTML = '<option>No valid data available</option>';
                }

                // Add event listener for district dropdown
                select.addEventListener('change', function() {
                    const selectedDistrictId = this.value;
                    const selectedDistrictName = this.options[this.selectedIndex].text;

                    if (selectedDistrictName === 'Other District') {
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
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';

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
                        select.innerHTML = '<option>No valid data available</option>';
                    }
                } else {
                    select.innerHTML = '<option>No valid data available</option>';
                }

                // Add event listener for city dropdown
                select.addEventListener('change', function() {
                    const selectedCityName = this.options[this.selectedIndex].text;

                    if (selectedCityName === 'Other City') {
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

getState();


</script>
<script>
    
</script>
<script>
        $(document).ready(function(){
            censusdata();
            $('#save').on('click', function (event) {
            store(event);
        
    });
        });

        function censusdata() {
            console.log('dfghjkiuytgf');
            $.ajax({
                url: "http://192.168.1.10:8000/api/agent/",
                type: "GET",
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                success: function (data) {
                    const tableBody = $('#data-table'); // Use jQuery selector for the table body
                    let serialNumber = 1;
                    
                    if (data.data && data.data.length > 0) {
                        var table = $('#example').DataTable({
                            paging: false, // Enable pagination
                            searching: false,
                            columns: [
                                { title: 'S.No.' },
                                { title: 'Name' }, // corrected capitalization
                                { title: 'Mobile' }, // corrected capitalization
                                { title: 'Email' }, // corrected capitalization
                                { title: 'State' }, // corrected capitalization
                                { title: 'District' }, // corrected capitalization
                                { title: 'City' }, // corrected capitalization
                                { title: 'Action', orderable: false }
                            ]
                        });

                        // Clear table before appending new data
                        table.clear();

                        // Loop through the data in reverse order to prepend rows
                        for (let i = data.data.length - 1; i >= 0; i--) {
                            const row = data.data[i];

                            // Add row to DataTable
                            table.row.add([
                                serialNumber,
                                row.name,
                                row.mobile,
                                row.email,
                                row.state,
                                row.district,
                                row.city,
                                `<div class="d-flex">
                                    <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere">
                                        <i class="fas fa-edit" style="font-size: 11px;"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                                        <i class="fa fa-trash" style="font-size: 11px;"></i>
                                    </button>
                                </div>`
                            ]);

                            serialNumber++;
                        }

                        // Draw the table to update the view
                        table.draw();
                    } else {
                        // If no data available, show a message
                        tableBody.html('<tr><td colspan="9">No valid data available</td></tr>');
                    }
                },
                error: function (error) {
                    console.error('Error fetching data:', error);
                }
            });
        }

function destroy(id) {
    // var apiBaseURL = APIBaseURL;
    var url = 'http://192.168.1.10:8000/api/agent/' + id;
    var token = localStorage.getItem('token');
  
    if (!token) {
      console.error("Token is missing");
      return;
    }
    var isConfirmed = confirm("Are you sure you want to delete this data?");
    if (!isConfirmed) {
      return;
    }
  
    $.ajax({
      url: url,
      type: "DELETE",
      headers: {
        'Authorization': 'Bearer ' + token
      },
      success: function(result) {
        // get_tyre_list();
        window.location.reload();
        console.log("Delete request successful");
        alert("Delete operation successful");
      },
      error: function(error) {
        console.error('Error fetching data:', error);
        alert("Error during delete operation");
      }
    });
}

function resetFormFields(){
    document.getElementById("form_add").reset();

   
}
var user_id = "";
var editId_state = false;

function store(event) {
    event.preventDefault();

    var role_id = 2;
    var user_id = $('#user_id').val();
    var first_name = $('#first_name').val();
    var mobile = $('#mobile').val();
    var email = $('#email').val();
    var stateDropdown = $('#stateDropdown').val();
    var otherState = $('#otherState').val();
    var districtDropdown = $('#districtDropdown').val();
    var otherDistrict = $('#otherDistrict').val();
    var city = $('#city').val();
    var otherCity = $('#otherCity').val();

    var token = localStorage.getItem('token');
    var headers = {
        'Authorization': 'Bearer ' + token
    };
    var formData = new FormData();
    var _method = 'POST';
    var url = "http://192.168.1.10:8000/api/agent/";
    
    if (user_id !== "" && user_id !== " ") {
        // Update mode
        _method = 'POST';
        url += user_id;
        formData.append('_method', "put");
    }

  
    formData.append('id', user_id);
    formData.append('role_id', role_id);
    formData.append('name', first_name);
    formData.append('mobile', mobile);
    formData.append('email', email);
    formData.append('state', stateDropdown);
    formData.append('other_state', otherState);
    formData.append('district', districtDropdown);
    formData.append('other_district', otherDistrict);
    formData.append('city', city);
    formData.append('other_city', otherCity);
    
    // Make an AJAX request to the server
    $.ajax({
        url: url,
        type: _method,
        // "_method":"put",
        data: formData,
        headers: headers,
        processData: false,
        contentType: false,
        success: function(result) {
            console.log(result);
            alert('successfully inserted..!');
            $("#staticBackdrop").modal('hide');
        },
        error: function(error) {
            console.error('Error fetching data:', error);
            alert('An error occurred. Please try again.');
            $("#staticBackdrop").modal('hide');
        }
    });
}


function fetch_edit_data(id) {
    var url = 'http://192.168.1.10:8000/api/agent/' + id;
    console.log(url, 'url');
    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };

    $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function(response) {
            console.log(response, 'response');
            var Data = response.data;
            $('#user_id').val(Data.id);
            $('#first_name').val(Data.name);
            $('#mobile').val(Data.mobile);
            $('#email').val(Data.email);

            // Set state dropdown
            $("#stateDropdown").val(Data.state);
            if (Data.other_state != '') {
                document.getElementById('otherStateInput').style.display = 'block';
                $('#otherState').val(Data.other_state);
            } else {
                document.getElementById('otherStateInput').style.display = 'none';
            }

            // Manually call getDistrict and getCity functions to populate dependent dropdowns
            getDistrict(Data.state, function() {
                // Set district dropdown
                $("#districtDropdown").val(Data.district);
                if (Data.other_district != '') {
                    document.getElementById('otherDistrictInput').style.display = 'block';
                    $('#otherDistrict').val(Data.other_district);
                } else {
                    document.getElementById('otherDistrictInput').style.display = 'none';
                }

                getCity(Data.district, function() {
                    // Set city dropdown
                    $("#city").val(Data.city);
                    if (Data.other_city != '') {
                        document.getElementById('otherCityInput').style.display = 'block';
                        $('#otherCity').val(Data.other_city);
                    } else {
                        document.getElementById('otherCityInput').style.display = 'none';
                    }
                });
            });
        },
        error: function(error) {
            console.error('Error fetching user data:', error);
        }
    });
}

getState(); // Fetch initial state data when the page loads

    </script>

