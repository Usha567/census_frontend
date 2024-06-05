<!DOCTYPE html>
<html lang="en">
<?php
    include 'includes/headertag.php';
   ?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost:8080\census_project\cssfile\familydetail_Admin.css">
  <link rel="stylesheet" href="http://localhost:8080\census_project\cssfile\familydetails.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
   
</style>
<body>
    <div class="main" id="main">
        <div class="sidebar text-center">
            <div class="aside-tools py-3">
                <img src="http://localhost:8080\census_project\assets\images\Census_Logo.png" alt="" class=" image">
            </div>
            <div class="menu py-2">
                <ul class="side-nav">
                    <li class="side-nav__item side-nav__item-active ">
                       <a href="">
                       <i class="fas fa-user text-white"></i>  <span class="agt text-white">Agent Management</span>
                       </a>
                    </li>
                    <li class="side-nav__item side-nav__item-active  text-center">
                       <a href="census_data.php" class="agent text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 13A5 5 0 1 0 8 3a5 5 0 0 0 0 10"/>
                        </svg>
                         <span class="agt text-white">Census Data Information</span>
                       </a>
                    </li>
                    <li class="side-nav__item side-nav__item-active  text-center">
                       <a href="" class="agent text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 13A5 5 0 1 0 8 3a5 5 0 0 0 0 10"/>
                        </svg>
                         <span class="agt text-white">Family Details</span>
                       </a>
                    </li>
                    <li class="side-nav__item side-nav__item-active  text-center">
                       <a href="" class="agent text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-fill" viewBox="0 0 16 16">
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
                    <a href="#logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
        </div>
    </header>
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
                   
                    <!-- Wife Section -->
                    <div class="member-section mt-3 bg-light">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="hading">Female Chief</h4>
                            <span class="toggle-icon" id="toggle-wife" onclick="toggleSection('wife-section', 'toggle-wife')">+</span>
                        </div>
                        <div id="wife-section" style="display: none;">
                            <form id="wife-form">
                                <!-- Wife details input fields -->
                                <div class="row">
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-name">Name</label>
                                            <input type="text" class="form-control" id="wife-name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-mother-name">Mother's Name</label>
                                            <input type="text" class="form-control" id="wife-mother-name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-father-name">Father's Name</label>
                                            <input type="text" class="form-control" id="wife-father-name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-father-surname">Original Surname</label>
                                            <input type="text" class="form-control" id="wife-father-surname">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-father-id">Father's ID</label>
                                            <input type="text" class="form-control" id="wife-father-id">
                                        </div>
                                    </div>  
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4"> 
                                        <div class="form-group">
                                            <label for="wife-age">Age</label>
                                            <input type="number" class="form-control" id="wife-age">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-dob">Date of Birth</label>
                                            <input type="date" class="form-control" id="wife-dob">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-mobile">Mobile Number</label>
                                            <input type="tel" class="form-control" id="wife-mobile">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-relation">Relation with Head of Family</label>
                                            <input type="text" class="form-control" id="wife-relation" value="Wife" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-qualification">Qualification</label>
                                            <select class="form-control" id="wife-qualification">
                                                <option selected disabled value>Select Qualification</option>
                                                <option>Primary</option>
                                                <option>Secondary</option>
                                                <option>Higher Secondary</option>
                                                <option>Graduate</option>
                                                <option>Post Graduate</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-marriage-type">Marriage Type</label>
                                            <select class="form-control" id="wife-marriage-type">
                                                <option selected disabled value>Select Marriage Type</option>
                                                <option>Same Caste</option>
                                                <option>Other Caste</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-marital-status">Marital Status</label>
                                            <select class="form-control" id="wife-marital-status">
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
                                            <label for="wife-blood-group">Blood Group</label>
                                            <select class="form-control" id="wife-blood-group">
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
                                            <label for="wife-total-kids">Total Kids</label>
                                            <input type="number" class="form-control" id="wife-total-kids">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-sons">Sons</label>
                                            <input type="number" class="form-control" id="wife-sons">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-daughters">Daughters</label>
                                            <input type="number" class="form-control" id="wife-daughters">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-occupation">Occupation</label>
                                            <select class="form-control" id="wife-occupation">
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
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="profile-pic-wrapper">
                                            <div class="pic-holder">
                                                <img id="wifeProfilePic" class="pic" src="http://localhost:8080/census_project/assets/images/camera-image.jpg">
                                                <input class="uploadProfileInput" type="file" name="wife_profile_pic" id="wifeProfilePhoto" accept="image/*" style="opacity: 0;" onchange="previewImage('wifeProfilePhoto', 'wifeProfilePic')" />
                                                <label for="wifeProfilePhoto" class="upload-file-block">
                                                    <div class="text-center">
                                                        <div class="mb-2">
                                                            <i class="fa fa-camera fa-2x"></i>
                                                        </div>
                                                        <div class="text-uppercase">Update <br /> Image</div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Children Section -->
                    <div class="member-section bg-light">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="hading">Unmarried Children</h4>
                            <span class="toggle-icon" id="toggle-children" onclick="toggleSection('children-section', 'toggle-children')">+</span>
                        </div>
                        <div id="children-section" style="display: none;">
                            <form id="children-form">
                                <div id="children-entries">
                                    <div class="child-entry mb-3" id="child-1">
                                        <h5>Child 1</h5>
                                        <div class="row">
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="child1-name">Name</label>
                                                    <input type="text" class="form-control" id="child1-name">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="child1-age">Age</label>
                                                    <input type="number" class="form-control" id="child1-age">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="child1-dob">Date of Birth</label>
                                                    <input type="date" class="form-control" id="child1-dob">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="child1-mobile">Mobile Number</label>
                                                    <input type="tel" class="form-control" id="child1-mobile">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="child1-relation">Relation with Head of Family</label>
                                                    <select class="form-control" id="child1-relation">
                                                        <option selected disabled value>Select Relation</option>
                                                        <option>Son</option>
                                                        <option>Daughter</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="child1-qualification">Qualification</label>
                                                    <select class="form-control" id="child1-qualification">
                                                        <option selected disabled value>Select Qualification</option>
                                                        <option>Primary</option>
                                                        <option>Secondary</option>
                                                        <option>Higher Secondary</option>
                                                        <option>Graduate</option>
                                                        <option>Post Graduate</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="child1-marriage-stage">Marriage Stage</label>
                                                    <select class="form-control" id="child1-marriage-stage">
                                                        <option selected disabled value>Select Marriage Stage</option>
                                                        <option>Unmarried</option>
                                                        <option>Tika</option>
                                                        <option>Engaged</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="child1-blood-group">Blood Group</label>
                                                    <select class="form-control" id="child1-blood-group">
                                                        <option selected disabled value>Select Blood Group</option>
                                                        <option>A+</option>
                                                        <option>A-</option>
                                                        <option>B+</option>
                                                        <option>B-</option>
                                                        <option>AB+</></option>
                                                        <option>AB-</option>
                                                        <option>O+</option>
                                                        <option>O-</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="child1-occupation">Occupation</label>
                                                    <select class="form-control" id="child1-occupation">
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
                                                        <img id="child1ProfilePic" class="pic" src="http://localhost:8080/census_project/assets/images/camera-image.jpg">
                                                        <input class="uploadProfileInput" type="file" name="child1_profile_pic" id="child1ProfilePhoto" accept="image/*" style="opacity: 0;" onchange="previewImage('child1ProfilePhoto', 'child1ProfilePic')" />
                                                        <label for="child1ProfilePhoto" class="upload-file-block">
                                                            <div class="text-center">
                                                                <div class="mb-2">
                                                                    <i class="fa fa-camera fa-2x"></i>
                                                                </div>
                                                                <div class="text-uppercase">
                                                                Update <br /> Image
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-info" onclick="addChild()">Add Child</button>
                                <!-- <button type="button" class="btn btn-danger" onclick="removeChild()">Remove</button> -->
                            </form>
                        </div>
                    </div>
                    <div class="member-section mt-3 bg-light">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="hading">Married Children</h4>
                            <span class="toggle-icon" id="married_toggle-children" onclick="toggleSection('married_children-section', 'married_toggle-children')">+</span>
                        </div>
                        <div id="married_children-section" style="display: none;">
                            <form id="married_children-form">
                                <div id="married_children-entries">
                                    <div class="Married_child-entry mb-3" id="married_child-1">
                                        <h5>Married Child 1</h5>
                                        <div class="row">
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="married_child1-name">Name</label>
                                                    <input type="text" class="form-control" id="married_child1-name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-info" onclick="addMarriedChild()">Add Married Child</button>
                            </form>
                        </div>
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

<script>
    function toggleSection(sectionId, toggleIconId) {
        var section = document.getElementById(sectionId);
        var toggleIcon = document.getElementById(toggleIconId);
        if (section.style.display === "none") {
            section.style.display = "block";
            toggleIcon.textContent = "-";
        } else {
            section.style.display = "none";
            toggleIcon.textContent = "+";
        }
    }
</script>
<script>
document.addEventListener("change", function (event) {
    if (event.target.classList.contains("uploadProfileInput")) {
        const triggerInput = event.target;
        const picHolder = triggerInput.closest(".pic-holder");
        const currentImg = picHolder.querySelector(".pic").src;
        const wrapper = triggerInput.closest(".profile-pic-wrapper");

        const alerts = wrapper.querySelectorAll('[role="alert"]');
        alerts.forEach(function (alert) {
            alert.remove();
        });

        triggerInput.blur();
        const files = triggerInput.files || [];
        if (!files.length || !window.FileReader) {
            return;
        }

        if (/^image/.test(files[0].type)) {
            const reader = new FileReader();
            reader.readAsDataURL(files[0]);

            reader.onloadend = function () {
                picHolder.classList.add("uploadInProgress");
                picHolder.querySelector(".pic").src = this.result;

                const loader = document.createElement("div");
                loader.classList.add("upload-loader");
                loader.innerHTML =
                    '<div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div>';
                picHolder.appendChild(loader);

                setTimeout(function () {
                    picHolder.classList.remove("uploadInProgress");
                    loader.remove();

                    const random = Math.random();
                    if (random < 0.9) {
                        wrapper.innerHTML +=
                            '<div class="snackbar show" role="alert"><i class="fa fa-check-circle text-success"></i> Profile image updated successfully</div>';
                        triggerInput.value = "";
                        setTimeout(function () {
                            wrapper.querySelector('[role="alert"]').remove();
                        }, 3000);
                    } else {
                        picHolder.querySelector(".pic").src = currentImg;
                        wrapper.innerHTML +=
                            '<div class="snackbar show" role="alert"><i class="fa fa-times-circle text-danger"></i> There is an error while uploading! Please try again later.</div>';
                        triggerInput.value = "";
                        setTimeout(function () {
                            wrapper.querySelector('[role="alert"]').remove();
                        }, 3000);
                    }
                }, 1500);
            };
        } else {
            wrapper.innerHTML +=
                '<div class="alert alert-danger d-inline-block p-2 small" role="alert">Please choose a valid image.</div>';
            setTimeout(function () {
                const invalidAlert = wrapper.querySelector('[role="alert"]');
                if (invalidAlert) {
                    invalidAlert.remove();
                }
            }, 3000);
        }
    }
});


</script>
<script>
   let childCount = 1;
const maxChildren = 10;

function toggleSection(sectionId, toggleIconId) {
    const section = document.getElementById(sectionId);
    const toggleIcon = document.getElementById(toggleIconId);
    if (section.style.display === "none") {
        section.style.display = "block";
        toggleIcon.textContent = "-";
    } else {
        section.style.display = "none";
        toggleIcon.textContent = "+";
    }
}

function addChild() {
    if (childCount >= maxChildren) {
        alert("You can only add up to 10 children.");
        return;
    }
    childCount++;
    const childrenEntries = document.getElementById('children-entries');
    const addChildButton = document.querySelector('#children-section button.btn-info'); // Select the "Add Child" button
    const newChildEntry = document.createElement('div');
    newChildEntry.className = 'child-entry mb-3';
    newChildEntry.id = `child-${childCount}`;
    newChildEntry.innerHTML = `
        <h5>Child ${childCount}</h5>
        <div class="row">
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${childCount}-name">Name</label>
                    <input type="text" class="form-control" id="child${childCount}-name">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${childCount}-age">Age</label>
                    <input type="number" class="form-control" id="child${childCount}-age">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${childCount}-dob">Date of Birth</label>
                    <input type="date" class="form-control" id="child${childCount}-dob">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${childCount}-mobile">Mobile Number</label>
                    <input type="tel" class="form-control" id="child${childCount}-mobile">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${childCount}-relation">Relation with Head of Family</label>
                    <select class="form-control" id="child${childCount}-relation">
                        <option selected disabled value>Select Relation</option>
                        <option>Son</option>
                        <option>Daughter</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${childCount}-qualification">Qualification</label>
                    <select class="form-control" id="child${childCount}-qualification">
                        <option selected disabled value>Select Qualification</option>
                        <option>Primary</option>
                        <option>Secondary</option>
                        <option>Higher Secondary</option>
                        <option>Graduate</option>
                        <option>Post Graduate</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${childCount}-marriage-stage">Marriage Stage</label>
                    <select class="form-control" id="child${childCount}-marriage-stage">
                        <option selected disabled value>Select Marriage Stage</option>
                        <option>Unmarried</option>
                        <option>Tika</option>
                        <option>Engaged</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${childCount}-blood-group">Blood Group</label>
                    <select class="form-control" id="child${childCount}-blood-group">
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
                    <label for="child${childCount}-occupation">Occupation</label>
                    <select class="form-control" id="child${childCount}-occupation">
                        <option selected disabled value>Select Occupation</option>
                        <option>Business</option>
                        <option>Government job</option>
                        <option>Pension</option>
                        <option>Farming</option>
                        <option>Private Job</option>
                        <option>Ferry</option>
                        <option>Labour</option>
                        <option>Student</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-12 text-center">
            <div class="profile-pic-wrapper">
                <div class="pic-holder">
                    <img id="child${childCount}-profilePic" class="pic" src="http://localhost:8080/census_project/assets/images/camera-image.jpg">
                    <input class="uploadProfileInput" type="file" name="profile_pic" id="child${childCount}-newProfilePhoto" accept="image/*" style="opacity: 0;" />
                    <label for="child${childCount}-newProfilePhoto" class="upload-file-block">
                        <div class="text-center">
                            <div class="mb-2">
                                <i class="fa fa-camera fa-2x"></i>
                            </div>
                            <div class="text-uppercase">
                                Update <br /> Image
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </div>
    `;
    childrenEntries.insertBefore(newChildEntry, addChildButton); 
}


    // function removeChild() {
    //     const childrenEntries = document.getElementById('children-entries');
    //     const lastChildEntry = childrenEntries.lastElementChild;
    //     if (lastChildEntry && lastChildEntry.id !== 'child-1') {
    //         lastChildEntry.remove();
    //     } else {
    //         alert("No more children to remove.");
    //     }
    // }
</script>
<script>
    function toggleSection(sectionId, toggleIconId) {
        var section = document.getElementById(sectionId);
        var toggleIcon = document.getElementById(toggleIconId);
        if (section.style.display === "none") {
            section.style.display = "block";
            toggleIcon.textContent = "-";
        } else {
            section.style.display = "none";
            toggleIcon.textContent = "+";
        }
    }

    function addMarriedChild() {
        var entries = document.getElementById('married_children-entries');
        var newEntryIndex = entries.children.length + 1;
        var newEntry = document.createElement('div');
        newEntry.className = 'Married_child-entry mb-3';
        newEntry.id = 'married_child-' + newEntryIndex;
        newEntry.innerHTML = `
            <h5>Married Child ${newEntryIndex}</h5>
            <div class="row">
                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                    <div class="form-group">
                        <label for="married_child${newEntryIndex}-name">Name</label>
                        <input type="text" class="form-control" id="married_child${newEntryIndex}-name">
                    </div>
                </div>
            </div>
        `;
        entries.appendChild(newEntry);
    }
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


