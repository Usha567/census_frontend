
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
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
  <script src="http://localhost:8080/census_project\jsfile\admin.js"></script> 
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        .main {
        width: 100%;
        display: flex;
        }
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background: #fff;
        }
        .main {
            height: 100%;
            display: flex;
        }
        .sidebar {
            height: 100vh;
            width: 280px;
            background: linear-gradient(-170deg, rgb(27, 70, 136) 19%, rgb(73, 184, 197) 100%);
            transition: all 0.5s ease-in-out;
            overflow-y: auto; /* Allows scrolling within the sidebar */
        }
        .content {
            width: calc(100% - 200px);
            transition: all 0.5s ease-in-out;
            overflow-y: auto; /* Allows scrolling within the content area */
        }
        

        header {
            background: linear-gradient(-170deg, rgb(27, 70, 136) 19%, rgb(73, 184, 197) 100%);
        padding: 10px 10px;
        display: flex;
        align-items: center;
        }
        header i.fa-bars {
        color: #fff;
        font-size: 30px;
        cursor: pointer;
        }

        .header-logo {
        font-size: 30px;
        font-weight: bold;
        color: #fff;
        margin-left: 30px;
        }

        .main.close .sidebar {
        width: 0px;
        }
        .main.close .content {
        width: 100%;
        }
        .container-fluid{
            margin: left 50px;
        }
        .filter-card{
            margin: right 50px;
        }
        .card-body {
            padding: 20px;
        }
        .search-box input {
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 5px 10px;
            width: 50%;
        }

        .search-box label {
            display: inline-block;
            margin-right: 10px;
            font-weight: bold;
            font-size: 1.25rem;
        }
        .button-group button {
            margin: 0 5px;
            padding: 6px 20px;
            border: none;
            color: #fff;
            border-radius: 4px;
        }
        .bg-info {
            background-color: #17a2b8 !important;
        }
        .aside-tools{
                    padding: 9px 20px;
                    border-bottom: 1px solid #f0f3f6;
                }
                .image{
            width: 150px;
            height: 50px;
        }
        .side-nav {
            display: flex;
            flex-direction: column;
        }

        .side-nav__item {
            list-style: none;
            color: #596780;
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 14px 0 14px 16px;    
            border-radius: 10px;
            transition: all .4s;
            cursor: pointer;
            white-space: nowrap;
        }

        .side-nav__item > svg {
        flex-shrink: 0;
        }

        .side-nav__item.last-item {
            margin-bottom: 32px;
        }

        .side-nav__item:not(:last-child) {
            margin-bottom: 4px;
        }

        .side-nav__item:hover,  .side-nav__item-active {
            /* background-color: #7C5CFC; */
            color: white;
        }
        .adminlogo{
            width: 50px;
            height: 50px;
        }
        .admin-header{
            margin: left 200px;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 10px 10px;
            color: white;
        }

        #menu {
            cursor: pointer;
        }

        .admin-header {
            display: flex;
            align-items: center;
            position: relative;
        }

        .adminlogo {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .is-user-name {
            margin-right: 10px;
        }

        .dropdown {
                    position: relative;
                    display: inline-block;
                }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 140px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            right: 0;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            margin: right -9px;

        }
        .dropdown-content a:hover {
            background-color: #f1f1f1;
            margin: right -9px;
            margin: top 5px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .fas.fa-caret-down {
            color: #ddd;
        }
        .agent{
            margin-left: 10px;;
        }
        .logo {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    text-align: center;
                    flex: 1;
                }
                .small-text {
                    font-size: 0.75rem; /* Adjust the size as needed */
                }
                /* .logo h6 {
                    font-weight: bold;
                    color: #fff;
                    margin: 0;
                    font-size:3px:
                } */
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
                                    <button class="bg-info mt-1" id="add-user-btn">Add User</button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive mt-4">
                            <table id="data-table" class="table table-striped  table-hover table-bordered  no-footer">
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
                                <tbody class="bg-light" id="data-table1"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
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
     let uniqueIdCounter = 0;

function populateDropdown(selectElement, options) {
    selectElement.innerHTML = "";
    const defaultOption = document.createElement("option");
    defaultOption.textContent = "Please select";
    defaultOption.value = "";
    defaultOption.disabled = true;
    defaultOption.selected = true;
    selectElement.appendChild(defaultOption);

    options.forEach(option => {
        const optionElement = document.createElement("option");
        optionElement.textContent = option.name;
        optionElement.value = option.id;
        selectElement.appendChild(optionElement);
    });
}

function onStateChange(selectElement) {
    const selectedStateId = selectElement.value;
    const row = selectElement.closest("tr");
    const districtDropdown = row.querySelector(".districtDropdown");
    fetchDistrictsByStateAndPopulateDropdown(selectedStateId, districtDropdown);
}

function onDistrictChange(selectElement) {
    const selectedDistrictId = selectElement.value;
    const row = selectElement.closest("tr");
    const cityDropdown = row.querySelector(".cityDropdown");
    fetchCitiesByDistrictAndPopulateDropdown(selectedDistrictId, cityDropdown);
}

function fetchStatesAndPopulateDropdown(selectElement) {
    $.ajax({
        url: "http://192.168.1.10:8000/api/states/",
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            const states = data.data.map(state => ({ id: state.id, name: state.state_name }));
            populateDropdown(selectElement, states);
        },
        error: function(error) {
            console.error('Error fetching states:', error);
        }
    });
}

function fetchDistrictsByStateAndPopulateDropdown(stateId, selectElement) {
    $.ajax({
        url: `http://192.168.1.10:8000/api/district/${stateId}`,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            const districts = data.data.map(district => ({ id: district.id, name: district.district_name }));
            populateDropdown(selectElement, districts);
        },
        error: function(error) {
            console.error('Error fetching districts:', error);
        }
    });
}

function fetchCitiesByDistrictAndPopulateDropdown(districtId, selectElement) {
    $.ajax({
        url: `http://192.168.1.10:8000/api/city/${districtId}`,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            const cities = Array.isArray(data.data) ? data.data : [data.data];
            const cityOptions = cities.map(city => ({ id: city.id, name: city.city_name }));
            populateDropdown(selectElement, cityOptions);
        },
        error: function(error) {
            console.error('Error fetching cities:', error);
        }
    });
}

function saveRow(row) {
    // Convert row to a jQuery object if it's not already
    row = $(row);

    // Get the data from the row
    const name = row.find('td:eq(1)').text().trim();
    const mobile = row.find('td:eq(2)').text().trim();
    const email = row.find('td:eq(3)').text().trim();
    const stateId = row.find('.stateDropdown').val();
    const districtId = row.find('.districtDropdown').val();
    const cityId = row.find('.cityDropdown').val();
    const roleId = row.find('[name="role_id"]').val();

    // Make sure all required fields are filled
    if (!name || !mobile || !email || !stateId || !districtId || !cityId) {
        alert('Please fill in all fields.');
        return;
    }

    // Get token from local storage
    const token = localStorage.getItem('token');

    // Fetch existing agents to check for duplicates
    $.ajax({
        url: "http://192.168.1.10:8000/api/agent/",
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + token
        },
        success: function(response) {
            console.log('Fetched agents data:', response);
            const agentsData = response.data;
            const duplicateMobile = agentsData.some(agent => agent.mobile === mobile);
            const duplicateEmail = agentsData.some(agent => agent.email === email);

            if (duplicateMobile) {
                alert('Mobile number already exists. Please use a different mobile number.');
                return;
            }

            if (duplicateEmail) {
                alert('Email address already exists. Please use a different email address.');
                return;
            }

            // If no duplicates, proceed to submit the data
            const data = {
                name: name,
                mobile: mobile,
                email: email,
                state: stateId,
                district: districtId,
                city: cityId,
                role_id: roleId,
            };

            $.ajax({
                url: "http://192.168.1.10:8000/api/agent",
                type: "POST",
                headers: {
                    'Authorization': 'Bearer ' + token
                },
                data: data,
                success: function(response) {
                    console.log('Data submitted successfully:', response);
                    row.find('.save-btn').hide();
                    // alert('Data submitted successfully.');
                },
                error: function(error) {
                    console.error('Error submitting data:', error);
                    alert('Data submitted successfully..');
                }
            });
        },
        error: function(error) {
            console.error('Error fetching agents:', error);
            // alert('Error fetching agents. Please try again later.');
        }
    });
}

$(document).ready(function() {
    function fetchAgentsAndPopulateTable() {
        $.ajax({
            url: "http://192.168.1.10:8000/api/agent/",
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function(response) {
                let agentsData = response.data;
                const tableBody = $('#data-table tbody');
                tableBody.empty(); // Clear existing rows

                // Reverse the agentsData array to show the latest entries at the top
                agentsData.reverse();

                agentsData.forEach((agent, index) => {
                    const newRow = `<tr>
                        <td>${index + 1}</td>
                        <td contenteditable="true">${agent.name}</td>
                        <td contenteditable="true">${agent.mobile}</td>
                        <td contenteditable="true">${agent.email}</td>
                        <td contenteditable="true">${agent.state}</td>
                        <td contenteditable="true">${agent.district}</td>
                        <td contenteditable="true">${agent.city}</td>
                        <td>
                            <button class="btn btn-success btn-sm save-btn p-1"><i class="fas fa-save"></i></button>
                            <button class="btn btn-danger btn-sm delete-btn p-1" onclick="destroy(${agent.id});"><i class="fas fa-trash-alt"></i></button>
                            <button class="btn btn-primary btn-sm edit-btn p-1 m-1" data-id="${agent.id}"><i class="fas fa-edit"></i></button>
                        </td>
                    </tr>`;
                    tableBody.append(newRow);
                });

                // Initialize DataTable
                $('#data-table').DataTable({
                    destroy: true, // Destroy any existing table to avoid reinitialization error
                    paging: true,
                    searching: true,
                    ordering: true
                });

                // Hide save buttons for existing data
                $('.save-btn').hide();

                // Attach event listeners to dynamically added buttons
                $('.delete-btn').on('click', function() {
                    const row = $(this).closest('tr');
                    deleteRow(row);
                });

                $('.edit-btn').on('click', function() {
                    const row = $(this).closest('tr');
                    editRow(row);
                });
            },
            error: function(error) {
                console.error('Error fetching agents:', error);
            }
        });
    }

    function deleteRow(row) {
        const table = $('#data-table').DataTable();
        table.row(row).remove().draw();
    }

    function editRow(row, agentId) {
        // Convert row to a jQuery object if it's not already
        row = $(row);

        const name = row.find('td:eq(1)').text().trim();
        const mobile = row.find('td:eq(2)').text().trim();
        const email = row.find('td:eq(3)').text().trim();
        const stateId = row.find('.stateDropdown').val();
        const districtId = row.find('.districtDropdown').val();
        const cityId = row.find('.cityDropdown').val();
        const roleId = row.find('[name="role_id"]').val();
        
        // Get token from local storage
        const token = localStorage.getItem('token');
        
        // Create the data object to send
        const data = {
            name: name,
            mobile: mobile,
            email: email,
            state: stateId,
            district: districtId,
            city: cityId,
        };

        $.ajax({
            url: `http://192.168.1.10:8000/api/agent/${agentId}`,
            type: "PUT",
            headers: {
                'Authorization': 'Bearer ' + token
            },
            data: data,
            success: function(response) {
                console.log('Data updated successfully:', response);
                alert('Data updated successfully');
            },
            error: function(error) {
                console.error('Error updating data:', error);
                alert('Error updating data. Please try again later.');
            }
        });
    }

    // Use event delegation for dynamically added rows
    $('#data-table').on('click', '.save-btn', function() {
        const row = $(this).closest('tr');
        saveRow(row);
    });

    $('#data-table').on('click', '.delete-btn', function() {
        const row = $(this).closest('tr');
        deleteRow(row);
    });

    $('#data-table').on('click', '.edit-btn', function() {
        const row = $(this).closest('tr');
        const agentId = $(this).data('id');
        editRow(row, agentId);
    });

    fetchAgentsAndPopulateTable();

    $('#add-user-btn').on('click', function() {
        const table = $('#data-table').DataTable();
        table.row.add([
            'New', 'User', '0000000000', 'user@example.com', 'State', 'District', 'City',
            `<button class="btn btn-success btn-sm save-btn p-1"><i class="fas fa-save"></i></button>
             <button class="btn btn-danger btn-sm delete-btn p-1"><i class="fas fa-trash-alt"></i></button>
             <button class="btn btn-primary btn-sm edit-btn p-1 m-1"><i class="fas fa-edit"></i></button>`
        ]).draw(false);
    });
});


  //****delete data***
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
document.getElementById('add-user-btn').addEventListener('click', function() {
    const table = document.getElementById('data-table').getElementsByTagName('tbody')[0];

    // Insert the new row at the top
    const newRow = table.insertRow(0);
    uniqueIdCounter++;

    // Insert cells in the new row
    newRow.insertCell(0).innerHTML = table.rows.length; // S.No.
    newRow.insertCell(1).contentEditable = true; // Name
    newRow.insertCell(2).contentEditable = true; // Mobile
    newRow.insertCell(3).contentEditable = true; // Email

    const cell4 = newRow.insertCell(4); // State
    const stateDropdown = document.createElement("select");
    stateDropdown.classList.add("form-control", "stateDropdown");
    stateDropdown.id = `stateDropdown_${uniqueIdCounter}`;
    stateDropdown.addEventListener("change", function() {
        onStateChange(this);
    });
    cell4.appendChild(stateDropdown);
    fetchStatesAndPopulateDropdown(stateDropdown);

    const cell5 = newRow.insertCell(5); // District
    const districtDropdown = document.createElement("select");
    districtDropdown.classList.add("form-control", "districtDropdown");
    districtDropdown.id = `districtDropdown_${uniqueIdCounter}`;
    districtDropdown.addEventListener("change", function() {
        onDistrictChange(this);
    });
    cell5.appendChild(districtDropdown);

    const cell6 = newRow.insertCell(6); // City
    const cityDropdown = document.createElement("select");
    cityDropdown.classList.add("form-control", "cityDropdown");
    cityDropdown.id = `cityDropdown_${uniqueIdCounter}`;
    cell6.appendChild(cityDropdown);

    const cell7 = newRow.insertCell(7); // Action
    cell7.innerHTML = `
        <button class="btn btn-success btn-sm save-btn p-1"><i class="fas fa-save"></i></button>
        <button class="btn btn-danger btn-sm delete-btn p-1"><i class="fas fa-trash-alt"></i></button>
        <button class="btn btn-primary btn-sm edit-btn p-1 m-1"><i class="fas fa-edit"></i></button>
    `;
    cell7.querySelector('.save-btn').addEventListener('click', function() {
        saveRow(newRow);
    });

    cell7.querySelector('.delete-btn').addEventListener('click', function() {
        table.deleteRow(newRow.rowIndex);
        updateSerialNumbers();
    });

    cell7.querySelector('.edit-btn').addEventListener('click', function() {
        editRow(newRow);
    });

    // Create a hidden td element for the role ID
    const cellRole = newRow.insertCell(8);
    cellRole.style.display = 'none';
    const roleInput = document.createElement("input");
    roleInput.type = "hidden";
    roleInput.name = "role_id";
    roleInput.value = "2";
    cellRole.appendChild(roleInput);

    updateSerialNumbers();
});

function updateSerialNumbers() {
    const table = document.getElementById('data-table').getElementsByTagName('tbody')[0];
    for (let i = 0; i < table.rows.length; i++) {
        table.rows[i].cells[0].innerHTML = i + 1;
    }
}
// Fetch and display the agents when the page loads
document.addEventListener('DOMContentLoaded', fetchAgentsAndPopulateTable);
</script>
