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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="http://localhost:8080/census_project\jsfile\add_familyDetails.js"></script> 
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
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4" >
                                        <div class="form-group">
                                            <label for="husband-id">ID Number</label>
                                            <input type="text" class="form-control" id="numner_id"value="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4" >
                                        <div class="form-group">
                                            <label for="husband-id">family_id</label>
                                            <input type="text" class="form-control" id="family_id"value="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4" >
                                        <div class="form-group">
                                            <label for="husband-id">family member id</label>
                                            <select class="form-control" id="family_member_id">
                                                <option selected disabled value>Select Marital Status</option>
                                                <option value="1">1-Male Chief</option>
                                                <option value="2" disabled >2-Female Chief</option>
                                                <option value="3" disabled>3-Unmarried Children</option>
                                                <option value="4" disabled>4-Married Children</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-name">Name</label>
                                            <input type="text" class="form-control" id="husband_name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-mother-name">Mother's Name</label>
                                            <input type="text" class="form-control" id="husband_mother_name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-father-name">Father's Name</label>
                                            <input type="text" class="form-control" id="husband_father_name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-father-surname">Original Surname</label>
                                            <input type="text" class="form-control" id="husband_father_surname">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-father-id">Father's ID</label>
                                            <input type="text" class="form-control" id="husband_father_id">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-age">Age</label>
                                            <input type="number" class="form-control" id="husband_age">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-dob">Date of Birth</label>
                                            <input type="date" class="form-control" id="husband_dob">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-mobile">Mobile Number</label>
                                            <input type="tel" class="form-control" id="husband_mobile">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-relation">Relation with Head of Family</label>
                                            <input type="text" class="form-control" id="husband_relation" value="Self" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-qualification">Qualification</label>
                                            <select class="form-control husband-qualification" id="husband_qualification">
                                            <option selected disabled value>Select Qualification</option>
                                            <option value="Primary">Primary</option>
                                            <option value="Secondary">Secondary</option>
                                            <option value="Higher Secondary">Higher Secondary</option>
                                            <option value="Graduate">Graduate</option>
                                            <option value="Post Graduate">Post Graduate</option>
                                            <option value="Bachelor of Arts (B.A.)">Bachelor of Arts (B.A.)</option>
                                            <option value="Bachelor of Science (B.Sc.)">Bachelor of Science (B.Sc.)</option>
                                            <option value="Bachelor of Commerce (B.Com.)">Bachelor of Commerce (B.Com.)</option>
                                            <option value="Bachelor of Engineering (B.E.)">Bachelor of Engineering (B.E.)</option>
                                            <option value="Bachelor of Technology (B.Tech.)">Bachelor of Technology (B.Tech.)</option>
                                            <option value="Bachelor of Medicine, Bachelor of Surgery (MBBS)">Bachelor of Medicine, Bachelor of Surgery (MBBS)</option>
                                            <option value="Bachelor of Dental Surgery (BDS)">Bachelor of Dental Surgery (BDS)</option>
                                            <option value="Bachelor of Pharmacy (B.Pharm)">Bachelor of Pharmacy (B.Pharm)</option>
                                            <option value="Bachelor of Architecture (B.Arch)">Bachelor of Architecture (B.Arch)</option>
                                            <option value="Bachelor of Business Administration (BBA)">Bachelor of Business Administration (BBA)</option>
                                            <option value="Bachelor of Computer Applications (BCA)">Bachelor of Computer Applications (BCA)</option>
                                            <option value="Bachelor of Laws (LLB)">Bachelor of Laws (LLB)</option>
                                            <option value="Bachelor of Education (B.Ed)">Bachelor of Education (B.Ed)</option>
                                            <option value="Bachelor of Fine Arts (BFA)">Bachelor of Fine Arts (BFA)</option>
                                            <option value="Bachelor of Social Work (BSW)">Bachelor of Social Work (BSW)</option>
                                            <option value="Bachelor of Hotel Management (BHM)">Bachelor of Hotel Management (BHM)</option>
                                            <option value="Bachelor of Physiotherapy (BPT)">Bachelor of Physiotherapy (BPT)</option>
                                            <option value="Bachelor of Veterinary Science (BVSc)">Bachelor of Veterinary Science (BVSc)</option>
                                            <option value="Bachelor of Design (B.Des)">Bachelor of Design (B.Des)</option>
                                            <option value="Master of Arts (M.A.)">Master of Arts (M.A.)</option>
                                            <option value="Master of Science (M.Sc.)">Master of Science (M.Sc.)</option>
                                            <option value="Master of Commerce (M.Com.)">Master of Commerce (M.Com.)</option>
                                            <option value="Master of Engineering (M.E.)">Master of Engineering (M.E.)</option>
                                            <option value="Master of Technology (M.Tech.)">Master of Technology (M.Tech.)</option>
                                            <option value="Master of Business Administration (MBA)">Master of Business Administration (MBA)</option>
                                            <option value="Master of Computer Applications (MCA)">Master of Computer Applications (MCA)</option>
                                            <option value="Master of Laws (LLM)">Master of Laws (LLM)</option>
                                            <option value="Master of Education (M.Ed)">Master of Education (M.Ed)</option>
                                            <option value="Master of Fine Arts (MFA)">Master of Fine Arts (MFA)</option>
                                            <option value="Master of Social Work (MSW)">Master of Social Work (MSW)</option>
                                            <option value="Master of Hospital Administration (MHA)">Master of Hospital Administration (MHA)</option>
                                            <option value="Master of Public Health (MPH)">Master of Public Health (MPH)</option>
                                            <option value="Master of Pharmacy (M.Pharm)">Master of Pharmacy (M.Pharm)</option>
                                            <option value="Master of Design (M.Des)">Master of Design (M.Des)</option>
                                            <option value="Master of Veterinary Science (MVSc)">Master of Veterinary Science (MVSc)</option>
                                            <option value="Master of Physiotherapy (MPT)">Master of Physiotherapy (MPT)</option>
                                            <option value="Doctor of Philosophy (Ph.D.)">Doctor of Philosophy (Ph.D.)</option>
                                            <option value="Doctor of Medicine (MD)">Doctor of Medicine (MD)</option>
                                            <option value="Doctor of Dental Surgery (DDS)">Doctor of Dental Surgery (DDS)</option>
                                            <option value="Doctor of Veterinary Medicine (DVM)">Doctor of Veterinary Medicine (DVM)</option>
                                            <option value="Diploma in Engineering">Diploma in Engineering</option>
                                            <option value="Diploma in Pharmacy">Diploma in Pharmacy</option>
                                            <option value="Diploma in Education (D.Ed)">Diploma in Education (D.Ed)</option>
                                            <option value="Postgraduate Diploma in Management (PGDM)">Postgraduate Diploma in Management (PGDM)</option>
                                            <option value="Certificate in Digital Marketing">Certificate in Digital Marketing</option>
                                            <option value="Certificate in Data Science">Certificate in Data Science</option>
                                            <option value="Certificate in Graphic Design">Certificate in Graphic Design</option>
                                            <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 other-qualification-group" style="display: none;"> <!-- Initially hidden -->
                                        <div class="form-group">
                                            <label for="other-qualification">Other Qualification</label>
                                            <input type="text" class="form-control other-qualification" id="husband_other_qualification" placeholder="Enter your qualification">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-marriage-type">Marriage Type</label>
                                            <select class="form-control" id="husband_marriage_type">
                                                <option selected disabled value>Select Marriage Type</option>
                                                <option>Same Caste</option>
                                                <option>Other Caste</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-marital-status">Marital Status</label>
                                            <select class="form-control" id="husband_marital_status">
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
                                            <select class="form-control" id="husband_blood_group">
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
                                            <input type="number" class="form-control" id="husband_total_kids">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-sons">Sons</label>
                                            <input type="number" class="form-control" id="husband_sons">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-daughters">Daughters</label>
                                            <input type="number" class="form-control" id="husband_daughters">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-occupation">Occupation</label>
                                            <select class="form-control occupation-select" id="husband_occupation">
                                                <option selected disabled value>Select Occupation</option>
                                                <option value="Business">Business</option>
                                                <option value="Government Job">Government Job</option>
                                                <option value="Pension">Pension</option>
                                                <option value="Farming">Farming</option>
                                                <option value="Private Job">Private Job</option>
                                                <option value="Ferry">Ferry</option>
                                                <option value="Labour">Labour</option>
                                                <option value="Student">Student</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 other-occupation-group" style="display: none;">
                                        <div class="form-group">
                                            <label for="other-occupation">Occupation Type</label>
                                            <input type="text" class="form-control other-occupation" id="husband_occupation_type"placeholder="Enter your occupation">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="upload__box">
                                            <div class="upload__btn-box">
                                                <label>
                                                    <p class="upload__btn bg-info w-25 ">Upload images</p>
                                                    <input type="file" multiple="" data-max_length="1" class="upload__inputfile" id="f_file" name="_file">
                                                </label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="upload__img-wrap" style="display:flex; flex-wrap:wrap;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-2 text-end">
                                        <button type="button" class="btn btn-success" id="malechief_submit">submit</button>
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
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4" >
                                        <div class="form-group">
                                            <label for="husband-id">ID Number</label>
                                            <input type="text" class="form-control" id="female_numner_id"value="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4" >
                                        <div class="form-group">
                                            <label for="husband-id">ID Number</label>
                                            <input type="text" class="form-control" id="female_family_id"value="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4" >
                                        <div class="form-group">
                                            <label for="husband-id">family member id</label>
                                            <select class="form-control" id="female_family_member_id">
                                                <option selected disabled value>Select Marital Status</option>
                                                <option value="1" disabled>1-Male Chief</option>
                                                <option value="2">2-Female Chief</option>
                                                <option value="3" disabled>3-Unmarried Children</option>
                                                <option value="4" disabled>4-Married Children</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-name">Name</label>
                                            <input type="text" class="form-control" id="wife_name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-mother-name">Mother's Name</label>
                                            <input type="text" class="form-control" id="wife_mother_name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-father-name">Father's Name</label>
                                            <input type="text" class="form-control" id="wife_father_name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-father-surname">Original Surname</label>
                                            <input type="text" class="form-control" id="wife_father_surname">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-father-id">Father's ID</label>
                                            <input type="text" class="form-control" id="wife_father_id">
                                        </div>
                                    </div>  
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4"> 
                                        <div class="form-group">
                                            <label for="wife-age">Age</label>
                                            <input type="number" class="form-control" id="wife_age">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-dob">Date of Birth</label>
                                            <input type="date" class="form-control" id="wife_dob">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-mobile">Mobile Number</label>
                                            <input type="tel" class="form-control" id="wife_mobile">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-relation">Relation with Head of Family</label>
                                            <input type="text" class="form-control" id="wife_relation" value="Wife" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-qualification">Qualification</label>
                                            <select class="form-control husband-qualification" id="wife_qualification">
                                            <option selected disabled value>Select Qualification</option>
                                            <option value="Primary">Primary</option>
                                            <option value="Secondary">Secondary</option>
                                            <option value="Higher Secondary">Higher Secondary</option>
                                            <option value="Graduate">Graduate</option>
                                            <option value="Post Graduate">Post Graduate</option>
                                            <option value="Bachelor of Arts (B.A.)">Bachelor of Arts (B.A.)</option>
                                            <option value="Bachelor of Science (B.Sc.)">Bachelor of Science (B.Sc.)</option>
                                            <option value="Bachelor of Commerce (B.Com.)">Bachelor of Commerce (B.Com.)</option>
                                            <option value="Bachelor of Engineering (B.E.)">Bachelor of Engineering (B.E.)</option>
                                            <option value="Bachelor of Technology (B.Tech.)">Bachelor of Technology (B.Tech.)</option>
                                            <option value="Bachelor of Medicine, Bachelor of Surgery (MBBS)">Bachelor of Medicine, Bachelor of Surgery (MBBS)</option>
                                            <option value="Bachelor of Dental Surgery (BDS)">Bachelor of Dental Surgery (BDS)</option>
                                            <option value="Bachelor of Pharmacy (B.Pharm)">Bachelor of Pharmacy (B.Pharm)</option>
                                            <option value="Bachelor of Architecture (B.Arch)">Bachelor of Architecture (B.Arch)</option>
                                            <option value="Bachelor of Business Administration (BBA)">Bachelor of Business Administration (BBA)</option>
                                            <option value="Bachelor of Computer Applications (BCA)">Bachelor of Computer Applications (BCA)</option>
                                            <option value="Bachelor of Laws (LLB)">Bachelor of Laws (LLB)</option>
                                            <option value="Bachelor of Education (B.Ed)">Bachelor of Education (B.Ed)</option>
                                            <option value="Bachelor of Fine Arts (BFA)">Bachelor of Fine Arts (BFA)</option>
                                            <option value="Bachelor of Social Work (BSW)">Bachelor of Social Work (BSW)</option>
                                            <option value="Bachelor of Hotel Management (BHM)">Bachelor of Hotel Management (BHM)</option>
                                            <option value="Bachelor of Physiotherapy (BPT)">Bachelor of Physiotherapy (BPT)</option>
                                            <option value="Bachelor of Veterinary Science (BVSc)">Bachelor of Veterinary Science (BVSc)</option>
                                            <option value="Bachelor of Design (B.Des)">Bachelor of Design (B.Des)</option>
                                            <option value="Master of Arts (M.A.)">Master of Arts (M.A.)</option>
                                            <option value="Master of Science (M.Sc.)">Master of Science (M.Sc.)</option>
                                            <option value="Master of Commerce (M.Com.)">Master of Commerce (M.Com.)</option>
                                            <option value="Master of Engineering (M.E.)">Master of Engineering (M.E.)</option>
                                            <option value="Master of Technology (M.Tech.)">Master of Technology (M.Tech.)</option>
                                            <option value="Master of Business Administration (MBA)">Master of Business Administration (MBA)</option>
                                            <option value="Master of Computer Applications (MCA)">Master of Computer Applications (MCA)</option>
                                            <option value="Master of Laws (LLM)">Master of Laws (LLM)</option>
                                            <option value="Master of Education (M.Ed)">Master of Education (M.Ed)</option>
                                            <option value="Master of Fine Arts (MFA)">Master of Fine Arts (MFA)</option>
                                            <option value="Master of Social Work (MSW)">Master of Social Work (MSW)</option>
                                            <option value="Master of Hospital Administration (MHA)">Master of Hospital Administration (MHA)</option>
                                            <option value="Master of Public Health (MPH)">Master of Public Health (MPH)</option>
                                            <option value="Master of Pharmacy (M.Pharm)">Master of Pharmacy (M.Pharm)</option>
                                            <option value="Master of Design (M.Des)">Master of Design (M.Des)</option>
                                            <option value="Master of Veterinary Science (MVSc)">Master of Veterinary Science (MVSc)</option>
                                            <option value="Master of Physiotherapy (MPT)">Master of Physiotherapy (MPT)</option>
                                            <option value="Doctor of Philosophy (Ph.D.)">Doctor of Philosophy (Ph.D.)</option>
                                            <option value="Doctor of Medicine (MD)">Doctor of Medicine (MD)</option>
                                            <option value="Doctor of Dental Surgery (DDS)">Doctor of Dental Surgery (DDS)</option>
                                            <option value="Doctor of Veterinary Medicine (DVM)">Doctor of Veterinary Medicine (DVM)</option>
                                            <option value="Diploma in Engineering">Diploma in Engineering</option>
                                            <option value="Diploma in Pharmacy">Diploma in Pharmacy</option>
                                            <option value="Diploma in Education (D.Ed)">Diploma in Education (D.Ed)</option>
                                            <option value="Postgraduate Diploma in Management (PGDM)">Postgraduate Diploma in Management (PGDM)</option>
                                            <option value="Certificate in Digital Marketing">Certificate in Digital Marketing</option>
                                            <option value="Certificate in Data Science">Certificate in Data Science</option>
                                            <option value="Certificate in Graphic Design">Certificate in Graphic Design</option>
                                            <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 other-qualification-group" style="display: none;"> <!-- Initially hidden -->
                                        <div class="form-group">
                                            <label for="other-qualification">Other Qualification</label>
                                            <input type="text" class="form-control other-qualification" id="wife_other_qualification" placeholder="Enter your qualification">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-marriage-type">Marriage Type</label>
                                            <select class="form-control" id="wife_marriage_type">
                                                <option selected disabled value>Select Marriage Type</option>
                                                <option>Same Caste</option>
                                                <option>Other Caste</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-marital-status">Marital Status</label>
                                            <select class="form-control" id="wife_marital_status">
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
                                            <select class="form-control" id="wife_blood_group">
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
                                            <input type="number" class="form-control" id="wife_total_kids">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-sons">Sons</label>
                                            <input type="number" class="form-control" id="wife_sons">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-daughters">Daughters</label>
                                            <input type="number" class="form-control" id="wife_daughters">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-occupation">Occupation</label>
                                            <select class="form-control occupation-select" id="wife_occupation">
                                                <option selected disabled value>Select Occupation</option>
                                                <option value="Business">Business</option>
                                                <option value="Government Job">Government Job</option>
                                                <option value="Pension">Pension</option>
                                                <option value="Farming">Farming</option>
                                                <option value="Private Job">Private Job</option>
                                                <option value="Ferry">Ferry</option>
                                                <option value="Labour">Labour</option>
                                                <option value="Student">Student</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 other-occupation-group" style="display: none;">
                                        <div class="form-group">
                                            <label for="other-occupation">Occupation Type</label>
                                            <input type="text" class="form-control other-occupation" id="wife_occupation_type"placeholder="Enter your occupation">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="upload__box">
                                            <div class="upload__btn-box">
                                                <label>
                                                    <p class="upload__btn bg-info w-25 ">Upload images</p>
                                                    <input type="file" multiple="" data-max_length="1" class="upload__inputfile" id="wife_f_file" name="_file">
                                                </label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="upload__img-wrap" style="display:flex; flex-wrap:wrap;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 text-end">
                                        <button type="button" class="btn btn-success" id="femalechief_submit" >submit</button>
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
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4" >
                                                <div class="form-group">
                                                    <label for="husband-id">ID Number</label>
                                                    <input type="text" class="form-control" id="child-numner-id"value="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4" >
                                                <div class="form-group">
                                                    <label for="husband-id">family_id</label>
                                                    <input type="text" class="form-control" id="child-family-id"value="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4" >
                                                <div class="form-group">
                                                    <label for="child-id">family member id</label>
                                                    <select class="form-control" id="child-family-member-id">
                                                        <option selected disabled value>Select Marital Status</option>
                                                        <option value="1" disabled>1-Male Chief</option>
                                                        <option value="2" disabled>2-Female Chief</option>
                                                        <option value="3" >3-Unmarried Children</option>
                                                        <option value="4" disabled>4-Married Children</option>
                                                    </select>
                                                </div>
                                            </div>
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
                                                    <label for="husband-qualification">Qualification</label>
                                                    <select class="form-control husband-qualification" id="child-qualification">
                                                    <option selected disabled value>Select Qualification</option>
                                                    <option value="Primary">Primary</option>
                                                    <option value="Secondary">Secondary</option>
                                                    <option value="Higher Secondary">Higher Secondary</option>
                                                    <option value="Graduate">Graduate</option>
                                                    <option value="Post Graduate">Post Graduate</option>
                                                    <option value="Bachelor of Arts (B.A.)">Bachelor of Arts (B.A.)</option>
                                                    <option value="Bachelor of Science (B.Sc.)">Bachelor of Science (B.Sc.)</option>
                                                    <option value="Bachelor of Commerce (B.Com.)">Bachelor of Commerce (B.Com.)</option>
                                                    <option value="Bachelor of Engineering (B.E.)">Bachelor of Engineering (B.E.)</option>
                                                    <option value="Bachelor of Technology (B.Tech.)">Bachelor of Technology (B.Tech.)</option>
                                                    <option value="Bachelor of Medicine, Bachelor of Surgery (MBBS)">Bachelor of Medicine, Bachelor of Surgery (MBBS)</option>
                                                    <option value="Bachelor of Dental Surgery (BDS)">Bachelor of Dental Surgery (BDS)</option>
                                                    <option value="Bachelor of Pharmacy (B.Pharm)">Bachelor of Pharmacy (B.Pharm)</option>
                                                    <option value="Bachelor of Architecture (B.Arch)">Bachelor of Architecture (B.Arch)</option>
                                                    <option value="Bachelor of Business Administration (BBA)">Bachelor of Business Administration (BBA)</option>
                                                    <option value="Bachelor of Computer Applications (BCA)">Bachelor of Computer Applications (BCA)</option>
                                                    <option value="Bachelor of Laws (LLB)">Bachelor of Laws (LLB)</option>
                                                    <option value="Bachelor of Education (B.Ed)">Bachelor of Education (B.Ed)</option>
                                                    <option value="Bachelor of Fine Arts (BFA)">Bachelor of Fine Arts (BFA)</option>
                                                    <option value="Bachelor of Social Work (BSW)">Bachelor of Social Work (BSW)</option>
                                                    <option value="Bachelor of Hotel Management (BHM)">Bachelor of Hotel Management (BHM)</option>
                                                    <option value="Bachelor of Physiotherapy (BPT)">Bachelor of Physiotherapy (BPT)</option>
                                                    <option value="Bachelor of Veterinary Science (BVSc)">Bachelor of Veterinary Science (BVSc)</option>
                                                    <option value="Bachelor of Design (B.Des)">Bachelor of Design (B.Des)</option>
                                                    <option value="Master of Arts (M.A.)">Master of Arts (M.A.)</option>
                                                    <option value="Master of Science (M.Sc.)">Master of Science (M.Sc.)</option>
                                                    <option value="Master of Commerce (M.Com.)">Master of Commerce (M.Com.)</option>
                                                    <option value="Master of Engineering (M.E.)">Master of Engineering (M.E.)</option>
                                                    <option value="Master of Technology (M.Tech.)">Master of Technology (M.Tech.)</option>
                                                    <option value="Master of Business Administration (MBA)">Master of Business Administration (MBA)</option>
                                                    <option value="Master of Computer Applications (MCA)">Master of Computer Applications (MCA)</option>
                                                    <option value="Master of Laws (LLM)">Master of Laws (LLM)</option>
                                                    <option value="Master of Education (M.Ed)">Master of Education (M.Ed)</option>
                                                    <option value="Master of Fine Arts (MFA)">Master of Fine Arts (MFA)</option>
                                                    <option value="Master of Social Work (MSW)">Master of Social Work (MSW)</option>
                                                    <option value="Master of Hospital Administration (MHA)">Master of Hospital Administration (MHA)</option>
                                                    <option value="Master of Public Health (MPH)">Master of Public Health (MPH)</option>
                                                    <option value="Master of Pharmacy (M.Pharm)">Master of Pharmacy (M.Pharm)</option>
                                                    <option value="Master of Design (M.Des)">Master of Design (M.Des)</option>
                                                    <option value="Master of Veterinary Science (MVSc)">Master of Veterinary Science (MVSc)</option>
                                                    <option value="Master of Physiotherapy (MPT)">Master of Physiotherapy (MPT)</option>
                                                    <option value="Doctor of Philosophy (Ph.D.)">Doctor of Philosophy (Ph.D.)</option>
                                                    <option value="Doctor of Medicine (MD)">Doctor of Medicine (MD)</option>
                                                    <option value="Doctor of Dental Surgery (DDS)">Doctor of Dental Surgery (DDS)</option>
                                                    <option value="Doctor of Veterinary Medicine (DVM)">Doctor of Veterinary Medicine (DVM)</option>
                                                    <option value="Diploma in Engineering">Diploma in Engineering</option>
                                                    <option value="Diploma in Pharmacy">Diploma in Pharmacy</option>
                                                    <option value="Diploma in Education (D.Ed)">Diploma in Education (D.Ed)</option>
                                                    <option value="Postgraduate Diploma in Management (PGDM)">Postgraduate Diploma in Management (PGDM)</option>
                                                    <option value="Certificate in Digital Marketing">Certificate in Digital Marketing</option>
                                                    <option value="Certificate in Data Science">Certificate in Data Science</option>
                                                    <option value="Certificate in Graphic Design">Certificate in Graphic Design</option>
                                                    <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4 other-qualification-group" style="display: none;"> 
                                                <div class="form-group">
                                                    <label for="other-qualification">Other Qualification</label>
                                                    <input type="text" class="form-control other-qualification" placeholder="Enter your qualification" id="childother-qualification">
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
                                                        <option>AB+</option>
                                                        <option>AB-</option>
                                                        <option>O+</option>
                                                        <option>O-</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                            <div class="form-group">
                                                <label for="wife-occupation">Occupation</label>
                                                <select class="form-control occupation-select" id="child-occupation">
                                                    <option selected disabled value>Select Occupation</option>
                                                    <option value="Business">Business</option>
                                                    <option value="Government Job">Government Job</option>
                                                    <option value="Pension">Pension</option>
                                                    <option value="Farming">Farming</option>
                                                    <option value="Private Job">Private Job</option>
                                                    <option value="Ferry">Ferry</option>
                                                    <option value="Labour">Labour</option>
                                                    <option value="Student">Student</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4 col-md-4 col-sm-4 other-occupation-group" style="display: none;">
                                            <div class="form-group">
                                                <label for="other-occupation">Occupation Type</label>
                                                <input type="text" class="form-control other-occupation" id="wife-occupation-type"placeholder="Enter your occupation">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                            <div class="upload__box">
                                                <div class="upload__btn-box">
                                                    <label>
                                                        <p class="upload__btn bg-info w-25 ">Upload images</p>
                                                        <input type="file" multiple="" data-max_length="1" class="upload__inputfile" id="child-file" name="_file">
                                                    </label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="upload__img-wrap" style="display:flex; flex-wrap:wrap;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-info" onclick="addChild()">Add Child</button>
                                <!-- <button type="button" class="btn btn-danger" onclick="removeChild()">Remove</button> -->
                                    <div class="mt-2 text-end">
                                        <button type="button" class="btn btn-success" id="child_subm" onclick="store2(event)" >submit</button>
                                    </div>
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
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4" >
                                                <div class="form-group">
                                                    <label for="married-child-numner-id">ID Number</label>
                                                    <input type="text" class="form-control" id="married-child-numner-id"value="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4" >
                                                <div class="form-group">
                                                    <label for="married-child-family-id">family_id</label>
                                                    <input type="text" class="form-control" id="married-child-family-id"value="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="married_child1-name">Name</label>
                                                    <input type="text" class="form-control" id="married_child1-name">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4" >
                                                <div class="form-group">
                                                    <label for="marriedchild-family-member-id">family member id</label>
                                                    <select class="form-control" id="marriedchild-family-member-id">
                                                        <option selected disabled value>Select Marital Status</option>
                                                        <option value="1" disabled>1-Male Chief</option>
                                                        <option value="2" disabled>2-Female Chief</option>
                                                        <option value="3" disabled>3-Unmarried Children</option>
                                                        <option value="4" >4-Married Children</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                                <div class="upload__box">
                                                    <div class="upload__btn-box">
                                                        <label>
                                                            <p class="upload__btn bg-info w-25 ">Upload images</p>
                                                            <input type="file" multiple="" data-max_length="3" class="upload__inputfile" id="child-marrid-file" name="_file">
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="upload__img-wrap" style="display:flex; flex-wrap:wrap;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-info" onclick="addMarriedChild()">Add Married Child</button>
                                <div class="mt-2 text-end">
                                    <button type="button" class="btn btn-success" onclick="store3(event)">submit</button>
                                </div>
                            </form>
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
$(document).ready(function() {
    $('.occupation-select').change(function() {
        var selectedOccupation = $(this).val();
        if (selectedOccupation) { // Check if an option is selected
            $('.other-occupation-group').show(); // Show the input field
        } else {
            $('.other-occupation-group').hide(); // Hide the input field if no option is selected
            $('.other-occupation').val(''); // Clear the input field value
        }
    });
});
    $(document).ready(function() {
    $('.husband-qualification').change(function() {
      var selectedQualification = $(this).val();
      if (selectedQualification === 'Other') {
        $('.other-qualification-group').show(); // Show the input field
      } else {
        $('.other-qualification-group').hide(); // Hide the input field
        $('.other-qualification').val(''); // Clear the input field value
      }
    });
  });
 
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
        let firstChildIdNumber = "";
        let firstChildFamilyId = "";

        function addChild() {
            if (childCount >= maxChildren) {
                alert("You can only add up to 10 children.");
                return;
            }
            childCount++;
            const childrenEntries = document.getElementById('children-entries');
            const addChildButton = document.querySelector('button.btn-info'); // Select the "Add Child" button
            const newChildEntry = document.createElement('div');
            newChildEntry.className = 'child-entry mb-3';
            newChildEntry.id = `child-${childCount}`;
            newChildEntry.innerHTML = `
                <h5>Child ${childCount}</h5>
                <div class="row">
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="child${childCount}-numner-id">ID Number</label>
                            <input type="text" class="form-control" id="child${childCount}-numner-id" value="${firstChildIdNumber}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="child${childCount}-family-id">Family ID</label>
                            <input type="text" class="form-control" id="child${childCount}-family-id" value="${firstChildFamilyId}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="child${childCount}-family-member-id">Family Member ID</label>
                            <select class="form-control" id="child${childCount}-family-member-id">
                                <option selected disabled value>Select Marital Status</option>
                                <option value="1" disabled>1-Male Chief</option>
                                <option value="2" disabled>2-Female Chief</option>
                                <option value="3">3-Unmarried Children</option>
                                <option value="4" disabled>4-Married Children</option>
                            </select>
                        </div>
                    </div>
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
                                <option value="Primary">Primary</option>
                                <option value="Secondary">Secondary</option>
                                <option value="Higher Secondary">Higher Secondary</option>
                                <option value="Graduate">Graduate</option>
                                <option value="Post Graduate">Post Graduate</option>
                                <option value="Bachelor of Arts (B.A.)">Bachelor of Arts (B.A.)</option>
                                <option value="Bachelor of Science (B.Sc.)">Bachelor of Science (B.Sc.)</option>
                                <option value="Bachelor of Commerce (B.Com.)">Bachelor of Commerce (B.Com.)</option>
                                <option value="Bachelor of Engineering (B.E.)">Bachelor of Engineering (B.E.)</option>
                                <option value="Bachelor of Technology (B.Tech.)">Bachelor of Technology (B.Tech.)</option>
                                <option value="Bachelor of Medicine, Bachelor of Surgery (MBBS)">Bachelor of Medicine, Bachelor of Surgery (MBBS)</option>
                                <option value="Bachelor of Dental Surgery (BDS)">Bachelor of Dental Surgery (BDS)</option>
                                <option value="Bachelor of Pharmacy (B.Pharm)">Bachelor of Pharmacy (B.Pharm)</option>
                                <option value="Bachelor of Architecture (B.Arch)">Bachelor of Architecture (B.Arch)</option>
                                <option value="Bachelor of Business Administration (BBA)">Bachelor of Business Administration (BBA)</option>
                                <option value="Bachelor of Computer Applications (BCA)">Bachelor of Computer Applications (BCA)</option>
                                <option value="Bachelor of Laws (LLB)">Bachelor of Laws (LLB)</option>
                                <option value="Bachelor of Education (B.Ed)">Bachelor of Education (B.Ed)</option>
                                <option value="Bachelor of Fine Arts (BFA)">Bachelor of Fine Arts (BFA)</option>
                                <option value="Bachelor of Social Work (BSW)">Bachelor of Social Work (BSW)</option>
                                <option value="Bachelor of Hotel Management (BHM)">Bachelor of Hotel Management (BHM)</option>
                                <option value="Bachelor of Physiotherapy (BPT)">Bachelor of Physiotherapy (BPT)</option>
                                <option value="Bachelor of Veterinary Science (BVSc)">Bachelor of Veterinary Science (BVSc)</option>
                                <option value="Bachelor of Design (B.Des)">Bachelor of Design (B.Des)</option>
                                <option value="Master of Arts (M.A.)">Master of Arts (M.A.)</option>
                                <option value="Master of Science (M.Sc.)">Master of Science (M.Sc.)</option>
                                <option value="Master of Commerce (M.Com.)">Master of Commerce (M.Com.)</option>
                                <option value="Master of Engineering (M.E.)">Master of Engineering (M.E.)</option>
                                <option value="Master of Technology (M.Tech.)">Master of Technology (M.Tech.)</option>
                                <option value="Master of Business Administration (MBA)">Master of Business Administration (MBA)</option>
                                <option value="Master of Computer Applications (MCA)">Master of Computer Applications (MCA)</option>
                                <option value="Master of Laws (LLM)">Master of Laws (LLM)</option>
                                <option value="Master of Education (M.Ed)">Master of Education (M.Ed)</option>
                                <option value="Master of Fine Arts (MFA)">Master of Fine Arts (MFA)</option>
                                <option value="Master of Social Work (MSW)">Master of Social Work (MSW)</option>
                                <option value="Master of Hospital Administration (MHA)">Master of Hospital Administration (MHA)</option>
                                <option value="Master of Public Health (MPH)">Master of Public Health (MPH)</option>
                                <option value="Master of Pharmacy (M.Pharm)">Master of Pharmacy (M.Pharm)</option>
                                <option value="Master of Design (M.Des)">Master of Design (M.Des)</option>
                                <option value="Master of Veterinary Science (MVSc)">Master of Veterinary Science (MVSc)</option>
                                <option value="Master of Physiotherapy (MPT)">Master of Physiotherapy (MPT)</option>
                                <option value="Doctor of Philosophy (Ph.D.)">Doctor of Philosophy (Ph.D.)</option>
                                <option value="Doctor of Medicine (MD)">Doctor of Medicine (MD)</option>
                                <option value="Doctor of Dental Surgery (DDS)">Doctor of Dental Surgery (DDS)</option>
                                <option value="Doctor of Veterinary Medicine (DVM)">Doctor of Veterinary Medicine (DVM)</option>
                                <option value="Diploma in Engineering">Diploma in Engineering</option>
                                <option value="Diploma in Pharmacy">Diploma in Pharmacy</option>
                                <option value="Diploma in Education (D.Ed)">Diploma in Education (D.Ed)</option>
                                <option value="Postgraduate Diploma in Management (PGDM)">Postgraduate Diploma in Management (PGDM)</option>
                                <option value="Certificate in Digital Marketing">Certificate in Digital Marketing</option>
                                <option value="Certificate in Data Science">Certificate in Data Science</option>
                                <option value="Certificate in Graphic Design">Certificate in Graphic Design</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 other-qualification-group" style="display: none;"> 
                        <div class="form-group">
                            <label for="childother${childCount}-qualification">Other Qualification</label>
                            <input type="text" class="form-control other-qualification" id="childother${childCount}-qualification" placeholder="Enter your qualification">
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
                                 <option>Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 other-occupation-group" style="display: none;"> 
                        <div class="form-group">
                            <label for="childother${childCount}-occupation">Other Occupation</label>
                            <input type="text" class="form-control other-occupation" id="childother${childCount}-occupation" placeholder="Enter your occupation">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                    <div class="upload__box">
                        <div class="upload__btn-box">
                            <label>
                                <p class="upload__btn bg-info w-25 ">Upload images</p>
                                <input type="file" multiple="" data-max_length="3" class="uploadProfileInput upload__inputfile " id="child${childCount}-file" name="_file">
                            </label>
                        </div>
                        <div class="col-sm-12">
                            <div class="upload__img-wrap" style="display:flex; flex-wrap:wrap;"></div>
                        </div>
                    </div>
                </div>
                
            `;
            childrenEntries.insertBefore(newChildEntry, addChildButton); 
            ImgUpload(); 
            const qualificationSelect = newChildEntry.querySelector(`#child${childCount}-qualification`);
            qualificationSelect.addEventListener('change', function() {
                const otherQualificationGroup = newChildEntry.querySelector('.other-qualification-group');
                if (qualificationSelect.value === 'Other') {
                    otherQualificationGroup.style.display = 'block';
                } else {
                    otherQualificationGroup.style.display = 'none';
                }
            });
            const occupationSelect = newChildEntry.querySelector(`#child${childCount}-occupation`);
            const otherOccupationGroup = newChildEntry.querySelector('.other-occupation-group');

            occupationSelect.addEventListener('change', function() {
            otherOccupationGroup.style.display = 'block';
            });

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
                    <label for="married-child-number-id-${newEntryIndex}">ID Number</label>
                    <input type="text" class="form-control" id="married-child-number-id-${newEntryIndex}"  value="${firstChildIdNumber}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="married-child-family-id-${newEntryIndex}">Family ID</label>
                    <input type="text" class="form-control" id="married-child-family-id-${newEntryIndex}"  value="${firstChildFamilyId}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="married_child${newEntryIndex}-name">Name</label>
                    <input type="text" class="form-control" id="married_child${newEntryIndex}-name">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="marriedchild-family-member-id-${newEntryIndex}">Family Member ID</label>
                            <select class="form-control" id="marriedchild-family-member-id-${newEntryIndex}">
                                <option selected disabled value>Select Marital Status</option>
                                <option value="1" disabled>1-Male Chief</option>
                                <option value="2" disabled>2-Female Chief</option>
                                <option value="3">3-Unmarried Children</option>
                                <option value="4" disabled>4-Married Children</option>
                            </select>
                        </div>
                    </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="upload__box">
                    <div class="upload__btn-box">
                        <label>
                            <p class="upload__btn bg-info w-25">Upload images</p>
                            <input type="file" multiple="" data-max_length="3" class="upload__inputfile" id="child-married-file-${newEntryIndex}" name="_file">
                        </label>
                    </div>
                    <div class="col-sm-12">
                        <div class="upload__img-wrap" style="display:flex; flex-wrap:wrap;"></div>
                    </div>
                </div>
            </div>
        </div>
    `;
    entries.appendChild(newEntry);
    ImgUpload(); // Reinitialize the image upload function
}




</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>



