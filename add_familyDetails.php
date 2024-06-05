
<?php
    include 'includes/headertag.php'; 
   ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Census Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost:8080\census_project\cssfile\familydetails.css">
    <style>
   * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: sans-serif;
            text-decoration: none;
            list-style: none;
        }

        .header {
            position: sticky;
            top: 0;
            width: 100%;
            box-shadow: 0 4px 20px hsla(207, 24%, 35%, 0.1);
            background: linear-gradient(-170deg, rgb(27, 70, 136) 19%, rgb(73, 184, 197) 100%);

            z-index: 1;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 30px;
        }

        .logo {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex: 1;
        }

        .logo h6 {
            font-weight: bold;
            color: #fff;
            margin: 0;
        }

        .menu {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .menu a {
            display: block;
            padding: 7px 15px;
            font-size: 17px;
            font-weight: 500;
            transition: 0.2s all ease-in-out;
            color: #fff;
        }

        .menu:hover a {
            opacity: 0.4;
        }

        .menu a:hover {
            opacity: 1;
            color: #fff;
        }

        .menu-icon {
            display: none;
        }

        #menu-toggle {
            display: none;
        }

        #menu-toggle:checked ~ .menu {
            transform: scale(1, 1);
        }

        .dropdown {
            display: none;
            position: absolute;
            background-color: #fff;
            box-shadow: 0 4px 20px hsla(207, 24%, 35%, 0.1);
            border-radius: 5px;
            top: 50px;
            right: 0;
            z-index: 1;
        }

        .dropdown a {
            padding: 10px 20px;
            white-space: nowrap;
        }

        .menu li {
            position: relative;
        }

        .menu li.active .dropdown {
            display: block;
        }

        @media only screen and (max-width: 950px) {
            nav {
                flex-direction: column;
            }

            .menu {
                flex-direction: column;
                background-color: #fff;
                align-items: start;
                position: absolute;
                top: 70px;
                left: 0;
                width: 100%;
                z-index: 1;
                transform: scale(1, 0);
                transform-origin: top;
                transition: transform 0.3s ease-in-out;
                box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            }

            .menu a {
                margin-left: 12px;
            }

            .menu li {
                margin-bottom: 10px;
            }

            .menu-icon {
                display: block;
                color: #fff;
                font-size: 28px;
                cursor: pointer;
            }
            .bi-translate{
              background: linear-gradient(-170deg, rgb(27, 70, 136) 19%, rgb(73, 184, 197) 100%);

            }
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-light w-100">
                 <h4 class="mb-4 text-center mt-2 align-items-center">Family Census Form</h4>
            </div>
        </div>
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
                                            <select class="form-control occupation-select" id="husband-occupation">
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
                                            <input type="text" class="form-control other-occupation" id="husband-occupation-type"placeholder="Enter your occupation">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
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
                                            <select class="form-control occupation-select" id="wife-occupation">
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
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4 other-qualification-group" style="display: none;"> <!-- Initially hidden -->
                                                <div class="form-group">
                                                    <label for="other-qualification">Other Qualification</label>
                                                    <input type="text" class="form-control other-qualification" id="child-other-qualification" placeholder="Enter your qualification">
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
                                                    <input type="text" class="form-control other-occupation" id="child-occupation-type"placeholder="Enter your occupation">
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
</body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                    <select class="form-control husband-qualification" id="child${childCount}-qualification">
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
                    <input type="text" class="form-control other-qualification" id="child-other${childCount}-qualification" placeholder="Enter your qualification">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${childCount}-occupation">Occupation</label>
                    <input type="text" class="form-control" id="child${childCount}-occupation">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${childCount}-employer">Employer/Organization</label>
                    <input type="text" class="form-control" id="child${childCount}-employer">
                </div>
            </div>
        </div>
        <hr>
    `;
    childrenEntries.insertBefore(newChildEntry, addChildButton); // Insert before the "Add Child" button

    const qualificationSelect = newChildEntry.querySelector(`#child${childCount}-qualification`);
    qualificationSelect.addEventListener('change', function() {
        const otherQualificationGroup = newChildEntry.querySelector('.other-qualification-group');
        if (qualificationSelect.value === 'Other') {
            otherQualificationGroup.style.display = 'block';
        } else {
            otherQualificationGroup.style.display = 'none';
        }
    });
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


