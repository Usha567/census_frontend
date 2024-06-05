
<?php
    include 'includes/headertag.php'; 
   ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost:8080\census_project\cssfile\detailpage.css">
    <title>Responsive Table</title>
    <style>
        .table-responsive td, .table-responsive th {
            white-space: nowrap;
        }
        .table-responsive {
            overflow-x: auto;
        }
        .img{
            width: 80px;
            height:80px;
        }
    </style>
</head>
<body>
<header class="header">
    <nav>
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon">&#9776;</label>
        <div class="logo">
            <h6 class="fw-bold text-white">छिपा समाज शिक्षा और कैरियर" ग्रुप</h6>
            <h6 class="fw-bold text-white">छिपा (क्षत्रिय) समाज की जनगणना, वर्ष - 2024</h6>
            <h6 class="fw-bold text-white">(परिवार परिचय - पत्र)</h6>
        </div>
        <ul class="menu">
            <li>
                <a href="#" id="translate-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                        <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286zm1.634-.736L5.5 3.956h-.049l-.679 2.022z"/>
                        <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zm7.138 9.995q.289.451.63.846c-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6 6 0 0 1-.415-.492 2 2 0 0 1-.94.31"/>
                    </svg>
                </a>
                <div class="dropdown">
                    <a href="#" class="text-dark">Hindi</a>
                    <a href="#" class="text-dark">English</a>
                </div>
            </li>
        </ul>
    </nav>
</header>
<div class="container-fuild bg-light py-2 text-end">
    <!-- <a href=""><button>Feadback</button></a> -->
</div>
<div class="container mt-5">
    <div class=" text-center">
        <h6 class="fw-bold">छिपा समाज शिक्षा और कैरियर" ग्रुप</h6>
        <h6 class="fw-bold">छिपा (क्षत्रिय) समाज की जनगणना, वर्ष - 2024</h6>
        <h6 class="fw-bold">(परिवार परिचय - पत्र)</h6>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td rowspan="4" class="text-center align-middle">Male Chief</td>
                    <td colspan="2">Name: <span id="name">.........</span></td>
                    <td colspan="2">Age/Date of Birth: <span id="dob">.......</span></td>
                    <td colspan="2">Married: <span id="married">.......</span></td>
                    <td rowspan="2" class="align-middle">
                        <div>Number of children:</div>
                        <div>Son: <span id="son">.......</span></div>
                        <div>Daughter: <span id="daughter">.......</span></div>
                    </td>
                    <td rowspan="4" class="align-middle">
                        <img src="http://localhost:8080\census_project\assets\images\admin-logo.jpg" alt="" class="img">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Mother: <span id="mother">.......</span></td>
                    <td colspan="2">Mobile No.: <span id="mobile">.......</span></td>
                    <td colspan="2">Status: <span id="status">.......</span></td>
                </tr>
                <tr>
                    <td colspan="2">Father: <span id="father">.......</span></td>
                    <td colspan="2">Relationship with the chief: <span id="relationship">.......</span></td>
                    <td rowspan="2" colspan="2" class="align-middle">Blood Group: <span id="blood-group">.......</span></td>
                    <td rowspan="2" class="align-middle">
                        <div>Work: <span id="work">.......</span></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Original surname: <span id="surname">.......</span></td>
                    <td colspan="2">Education: <span id="education">.......</span></td>
                </tr>

                <tr>
                    <td rowspan="4" class="text-center align-middle">Female Chief</td>
                    <td colspan="2">Name: <span id="name_1">.........</span></td>
                    <td colspan="2">Age/Date of Birth: <span id="dob_1">.......</span></td>
                    <td colspan="2">Married: <span id="married_1">.......</span></td>
                    <td rowspan="2" class="align-middle">
                        <div>Number of children:</div>
                        <div>Son: <span id="son_1">.......</span></div>
                        <div>Daughter: <span id="daughter_1">.......</span></div>
                    </td>
                    <td rowspan="4" class="align-middle">
                        <img src="http://localhost:8080\census_project\assets\images\admin-logo.jpg" alt="" class="img">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Mother: <span id="mother_1">.......</span></td>
                    <td colspan="2">Mobile No.: <span id="mobile_1">.......</span></td>
                    <td colspan="2">Status: <span id="status_1">.......</span></td>
                </tr>
                <tr>
                    <td colspan="2">Father: <span id="father_1">.......</span></td>
                    <td colspan="2">Relationship with the chief: <span id="relationship_1">.......</span></td>
                    <td rowspan="2" colspan="2" class="align-middle">Blood Group: <span id="blood-group_1">.......</span></td>
                    <td rowspan="2" class="align-middle">
                        <div>Work: <span id="work_1">.......</span></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Original surname: <span id="surname_1">.......</span></td>
                    <td colspan="2">Education: <span id="education_1">.......</span></td>
                </tr>
                <tr>
                    <td rowspan="2" class="text-center align-middle">Unmarried Child</td>
                    <td colspan="2">Name: .......</td>
                    <td colspan="2">Relationship with the chief: .......</td>
                    <td colspan="2">Unmarried: .......</td>
                       <td rowspan="2" class="align-middle">
                        <div>Work: .......</div>
                    </td>
                    <td rowspan="2" class="align-middle">
                        <img src="http://localhost:8080\census_project\assets\images\admin-logo.jpg" alt="" class="img">
                    </td>
                  

                </tr>
                <tr>
                    <td colspan="2">Age/Date of Birth: .......</td>
                    <td colspan="2">Mobile No.: .......</td>
                    <td colspan="2">Status: .......</td>
                 
                </tr>
                <tr>
                    <td rowspan="2" class="text-center align-middle">Unmarried Child</td>
                    <td colspan="2">Name: <span id="name_3">.........</span></td>
                    <td colspan="2">Relationship with the chief: .......</td>
                    <td colspan="2">Unmarried: <span id="unmarried_3">........</span></td>
                       <td rowspan="2" class="align-middle">
                        <div>Work: <span id="work_3">..........</span></div>
                    </td>
                    <td rowspan="2" class="align-middle">
                        <img src="http://localhost:8080\census_project\assets\images\admin-logo.jpg" alt=""class="img">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Age/Date of Birth: <span id="dob_3">...........</span></td>
                    <td colspan="2">Mobile No.: <span id="number_3">........</span></td>
                    <td colspan="2">Status: <span id="status_3">.......</span></td>
                 
                </tr>
                <tr>
                    <td rowspan="2" class="text-center align-middle">Unmarried Child</td>
                    <td colspan="2">Name: <span id="name_4">.......</span></td>
                    <td colspan="2">Relationship with the chief: <span id="">........</span></td>
                    <td colspan="2">Unmarried: <span id="">......</span></td>
                       <td rowspan="2" class="align-middle">
                        <div>Work: <span id="">......</span></div>
                    </td>
                    <td rowspan="2" class="align-middle">
                        <img src="http://localhost:8080\census_project\assets\images\admin-logo.jpg" alt="" class="img">
                            <!-- <div>
                                  <div id="selectedImagesContainer1" class="upload__img-wrap row"></div>
                            </div> -->
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Age/Date of Birth: <span id="">.......</span></td>
                    <td colspan="2">Mobile No.: <span id="">.......</span></td>
                    <td colspan="2">Status: <span id="">.......</span></td>
                 
                </tr>
            </tbody>
        </table>
    </div>
</div>
<section></section>
    <div class="container mt-2">
        <a href=""><p class="text-end containt-jusify">suggetion link</p></a>
    </div>
    <div class="container">
        <!-- Husband Section -->
        <div class="member-section">
            <div class="filter-card shadow mt-5">
                <div class="card bg-light">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="hading">Male Chief</h4>
                            <span class="toggle-icon" id="toggle-husband" onclick="toggleSection('husband-section', 'toggle-husband')">+</span>
                        </div>
                        <div id="husband-section" style="display: none;">
                            <form id="husband-form shadow">
                                <div class="row">
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-id">ID Number</label>
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
                                            <label for="husband-mother-name">Mother's Name</label>
                                            <input type="text" class="form-control" id="husband-mother-name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-father-name">Father's Name</label>
                                            <input type="text" class="form-control" id="husband-father-name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-father-surname">Original Surname</label>
                                            <input type="text" class="form-control" id="husband-father-surname">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-father-id">Father's ID</label>
                                            <input type="text" class="form-control" id="husband-father-id">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-age">Age</label>
                                            <input type="number" class="form-control" id="husband-age">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-dob">Date of Birth</label>
                                            <input type="date" class="form-control" id="husband-dob">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-mobile">Mobile Number</label>
                                            <input type="tel" class="form-control" id="husband-mobile">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-relation">Relation with Head of Family</label>
                                            <input type="text" class="form-control" id="husband-relation" value="Self" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-qualification">Qualification</label>
                                            <select class="form-control" id="husband-qualification">
                                            <option selected disabled value>Select Qualification</option>
                                                <option>Primary</option>
                                                <option>Secondary</option>
                                                <option>Higher Secondary</option>
                                                <option>Graduate</option>
                                                <option>Post Graduate</option>
                                                <option>Post Graduate</option>
                                                <option>Post Graduate</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-marriage-type">Marriage Type</label>
                                            <select class="form-control" id="husband-marriage-type">
                                                <option selected disabled value>Select Marriage Type</option>
                                                <option>Same Caste</option>
                                                <option>Other Caste</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-marital-status">Marital Status</label>
                                            <select class="form-control" id="husband-marital-status">
                                                <option selected disabled value>Select Marital Status</option>
                                                <option>Normal</option>
                                                <option>Widower</option>
                                                <option>Divorced</option>
                                                <option>Parityag</option>
                                                <option>Chhod Chhutti</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-blood-group">Blood Group</label>
                                            <select class="form-control" id="husband-blood-group">
                                            <option selected disabled value>Select Blood Group</option>
                                                <option>A+</option>
                                                <option>A-</option>
                                                <option>B+</option>
                                                <option>B-</option>
                                                <option>AB+</option>
                                                <option>AB-</option>
                                                <option>O+</option>
                                                <option>O-</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-total-kids">Total Kids</label>
                                            <input type="number" class="form-control" id="husband-total-kids">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-sons">Sons</label>
                                            <input type="number" class="form-control" id="husband-sons">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-daughters">Daughters</label>
                                            <input type="number" class="form-control" id="husband-daughters">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-occupation">Occupation</label>
                                            <select class="form-control" id="husband-occupation">
                                                <option selected disabled value>Select Occupation</option>
                                                <option>Business</option>
                                                <option>Government Job</option>
                                                <option>Pension</option>
                                                <option>Farming</option>
                                                <option>Private Job</option>
                                                <option>Ferry</option>
                                                <option>Labour</option>
                                                <option>Student</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="Occupation">Occupation</label>
                                            <input type="number" class="form-control" id="Occupation">
                                        </div>
                                    </div>
                                 
                                    <div class="col-12 text-center">
                                        <div class="profile-pic-wrapper">
                                            <div class="pic-holder">
                                                <img id="husbandProfilePic" class="pic" src="http://localhost:8080/census_project/assets/images/camera-image.jpg">
                                                <input class="uploadProfileInput" type="file" name="husband_profile_pic" id="husbandProfilePhoto" accept="image/*" style="opacity: 0;" onchange="previewImage('husbandProfilePhoto', 'husbandProfilePic')" />
                                                <label for="husbandProfilePhoto" class="upload-file-block">
                                                    <div class="text-center">
                                                        <div class="mb-2">
                                                            <i class="fa fa-camera fa-2x"></i>
                                                        </div>
                                                        <div class="text-uppercase"> Update <br /> Image</div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                  
                    <!-- Save and Review Section -->
                    <div class="  mt-5">
                        <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6"></div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 text-center">
                               <button class="btn btn-secondary mt-1 py-1  mx-1">Save </button>
                               <button class="btn btn-info mt-1 py-1 mx-1"> Edit</button>
                               <button class="btn btn-success mt-1 py-1 mx-1">Submit </button>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>        
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
