<!DOCTYPE html>
<html lang="en">
<?php
    include 'includes/headertag.php';
   ?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  background: #fff;
}
.main {
  width: 100%;
  display: flex;
}
.sidebar {
  height: 100vh;
  width: 300px;
  background: linear-gradient(-170deg, rgb(27, 70, 136) 19%, rgb(73, 184, 197) 100%);
  transition: all 0.5s ease-in-out;
}
.content {
  width: calc(100% - 300px);
  transition: all 0.5s ease-in-out;
}

header {
    background: linear-gradient(-170deg, rgb(27, 70, 136) 19%, rgb(73, 184, 197) 100%);
  padding: 10px;
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
@media (max-width: 768px) {
            .table-responsive thead {
                display: none;
            }
            .table-responsive tr {
                display: block;
                margin-bottom: 0.625em;
            }
            .table-responsive td {
                display: block;
                text-align: right;
                font-size: 0.8em;
                border-bottom: 1px solid #ddd;
                position: relative;
                padding-left: 50%;
            }
            .table-responsive td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 45%;
                padding-left: 15px;
                font-weight: bold;
                text-align: left;
            }
        }
</style>
<body>
    <div class="main" id="main">
        <div class="sidebar"></div>
        <div class="content">
            <header>
                <i class="fas fa-bars" id="menu"></i>
                <div class="header-logo">MyHeader</div>
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
                                <div class="button-group">
                                    <button class="bg-info">Search</button>
                                    <button class="bg-info">Reset</button>
                                    <button class="bg-info" id="add-user-btn">Add User</button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive mt-4">
                            <table id="example" class="table table-striped bg-info table-hover table-bordered dataTable no-footer" width="100%">
                                <thead class="">
                                    <tr>
                                        <th class="text-white">S.No.</th>
                                        <th class="text-white">Name</th>
                                        <th class="text-white">Mobile</th>
                                        <th class="text-white">Email</th>
                                        <th class="text-white">State</th>
                                        <th class="text-white">District</th>
                                        <th class="text-white">City</th>
                                        <th class="text-white">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="data-table" class="bg-white">
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
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
        document.getElementById('add-user-btn').addEventListener('click', function() {
            const table = document.getElementById('data-table');
            const rowCount = table.rows.length;
            const row = table.insertRow(0); // Insert at the top
            
            // Insert cells in the row
            const cell1 = row.insertCell(0);
            const cell2 = row.insertCell(1);
            const cell3 = row.insertCell(2);
            const cell4 = row.insertCell(3);
            const cell5 = row.insertCell(4);
            const cell6 = row.insertCell(5);
            const cell7 = row.insertCell(6);
            const cell8 = row.insertCell(7);
            
            // Add input fields to the cells
            cell1.innerHTML = rowCount + 1; // S.No.
            cell2.contentEditable = true; // Name
            cell3.contentEditable = true; // Mobile
            cell4.contentEditable = true; // Email
            cell5.contentEditable = true; // State
            cell6.contentEditable = true; // District
            cell7.contentEditable = true; // City
            cell8.innerHTML = '<button class="btn btn-success btn-sm save-btn">Save</button> <button class="btn btn-danger btn-sm delete-btn">Delete</button> <button class="btn btn-primary btn-sm edit-btn">Edit</button>'; // Action
            
            // Add save functionality to the save button
            cell8.querySelector('.save-btn').addEventListener('click', function() {
                saveRow(row);
            });

            // Add delete functionality to the delete button
            cell8.querySelector('.delete-btn').addEventListener('click', function() {
                row.parentNode.removeChild(row);
                updateSerialNumbers();
            });

            // Add edit functionality to the edit button
            cell8.querySelector('.edit-btn').addEventListener('click', function() {
                editRow(row);
            });

            updateSerialNumbers(); // Update serial numbers after adding new row
        });

        function updateSerialNumbers() {
            const table = document.getElementById('data-table');
            const rows = table.rows;
            for (let i = 0; i < rows.length; i++) {
                rows[i].cells[0].innerHTML = i + 1;
            }
        }

        function saveRow(row) {
            const inputs = row.querySelectorAll('td[contenteditable="true"]');
            inputs.forEach(input => {
                input.setAttribute('contenteditable', 'false');
            });
            row.querySelector('.save-btn').style.display = 'none'; // Hide save button after saving
            row.querySelector('.edit-btn').style.display = 'inline-block'; // Show edit button
        }

        function editRow(row) {
            const cells = row.querySelectorAll('td');
            for (let i = 1; i < cells.length - 1; i++) { // Skip the serial number and action cells
                cells[i].setAttribute('contenteditable', 'true');
            }
            row.querySelector('.save-btn').style.display = 'inline-block'; // Show save button
            row.querySelector('.edit-btn').style.display = 'none'; // Hide edit button
        }
    </script>