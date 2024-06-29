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
  <script src="http://localhost:8080/census_project\jsfile\add_familyDetails.js"></script> 
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
.role-group .form-check {
      display: inline-block;
      margin-right: 15px;
  }

  .role-group .form-check-input {
      width: 16px;
      height: 16px;
      margin-right: 5px;
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

    <div class="container">
        <!-- Husband Section -->
        <div class="member-section">
            <div class="filter-card shadow mt-5">
                <div class="card bg-light">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="hading">पुरुष मुखिया</h4>
                            <span class="toggle-icon" id="toggle-husband" onclick="toggleSection('husband-section', 'toggle-husband')">+</span>
                        </div>
                        <div id="husband-section" style="display: none;">
                            <form id="husband-form shadow">
                                <div class="row">
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4" hidden>
                                        <div class="form-group">
                                            <label for="husband-id">ID Number</label>
                                            <input type="text" class="form-control" id="numner_id"value="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4" hidden>
                                        <div class="form-group">
                                            <label for="husband-id">family_id</label>
                                            <input type="text" class="form-control" id="family_id"value="">
                                            <input type="text" class="form-control" id="updateOrInsert"value="insert">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4" hidden>
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
                                            <label for="husband-name">नाम</label>
                                            <input type="text" class="form-control" id="husband_name" >
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-mother-name">मां का नाम</label>
                                            <input type="text" class="form-control" id="husband_mother_name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-father-name">पिता का नाम</label>
                                            <input type="text" class="form-control" id="husband_father_name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-wife-name">पत्नी</label>
                                            <input type="text" class="form-control" id="husband_wife_name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-father-surname">मूल सरनेम</label>
                                            <input type="text" class="form-control" id="husband_father_surname">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-father-id">पिता आईडी</label>
                                            <input type="text" class="form-control" id="husband_father_id">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-age">आयु</label>
                                            <input type="number" class="form-control" id="husband_age">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-dob">जन्म की तारीख</label>
                                            <input type="date" class="form-control" id="husband_dob">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-mobile">मोबाइल नंबर</label>
                                            <input type="tel" class="form-control" id="husband_mobile">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-relation">परिवार के मुखिया के साथ संबंध</label>
                                            <input type="text" class="form-control" id="husband_relation" value="स्वयं" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-qualification">शिक्षा</label>
                                            <select class="form-control husband-qualification" id="husband_qualification">
                                                <option selected disabled value>शिक्षा चुने</option>
                                                <option value="प्राथमिक">प्राथमिक</option>
                                                <option value="माध्यमिक">माध्यमिक</option>
                                                <option value="उच्च माध्यमिक">उच्च माध्यमिक</option>
                                                <option value="स्नातक">स्नातक</option>
                                                <option value="स्नातकोत्तर">स्नातकोत्तर</option>
                                                <option value="बैचलर ऑफ आर्ट्स (बी.ए.)">बैचलर ऑफ आर्ट्स (बी.ए.)</option>
                                                <option value="बैचलर ऑफ साइंस (बी.एस्स.)">बैचलर ऑफ साइंस (बी.एस्स.)</option>
                                                <option value="बैचलर ऑफ कॉमर्स (बी.कॉम.)">बैचलर ऑफ कॉमर्स (बी.कॉम.)</option>
                                                <option value="बैचलर ऑफ इंजीनियरिंग (बी.ई.)">बैचलर ऑफ इंजीनियरिंग (बी.ई.)</option>
                                                <option value="बैचलर ऑफ टेक्नोलॉजी (बी.टेक.)">बैचलर ऑफ टेक्नोलॉजी (बी.टेक.)</option>
                                                <option value="बैचलर ऑफ मेडिसिन, बैचलर ऑफ सर्जरी (एमबीबीएस)">बैचलर ऑफ मेडिसिन, बैचलर ऑफ सर्जरी (एमबीबीएस)</option>
                                                <option value="बैचलर ऑफ डेंटल सर्जरी (बी.डी.एस.)">बैचलर ऑफ डेंटल सर्जरी (बी.डी.एस.)</option>
                                                <option value="बैचलर ऑफ फार्मेसी (बी.फार्म.)">बैचलर ऑफ फार्मेसी (बी.फार्म.)</option>
                                                <option value="बैचलर ऑफ आर्किटेक्चर (बी.आर्क.)">बैचलर ऑफ आर्किटेक्चर (बी.आर्क.)</option>
                                                <option value="बैचलर ऑफ बिजनेस एडमिनिस्ट्रेशन (बीबीए)">बैचलर ऑफ बिजनेस एडमिनिस्ट्रेशन (बीबीए)</option>
                                                <option value="बैचलर ऑफ कंप्यूटर एप्लीकेशन्स (बी.सी.ए)">बैचलर ऑफ कंप्यूटर एप्लीकेशन्स (बी.सी.ए)</option>
                                                <option value="बैचलर ऑफ लॉ (बीएलबी)">बैचलर ऑफ लॉ (बीएलबी)</option>
                                                <option value="बैचलर ऑफ एजुकेशन (बी.एड.)">बैचलर ऑफ एजुकेशन (बी.एड.)</option>
                                                <option value="बैचलर ऑफ फाइन आर्ट्स (बीएफए)">बैचलर ऑफ फाइन आर्ट्स (बीएफए)</option>
                                                <option value="बैचलर ऑफ सोशल वर्क (बी.एस.डब्ल्यू)">बैचलर ऑफ सोशल वर्क (बी.एस.डब्ल्यू)</option>
                                                <option value="बैचलर ऑफ होटल मैनेजमेंट (बीएचएम)">बैचलर ऑफ होटल मैनेजमेंट (बीएचएम)</option>
                                                <option value="बैचलर ऑफ फिजियोथेरेपी (बीपीटी)">बैचलर ऑफ फिजियोथेरेपी (बीपीटी)</option>
                                                <option value="बैचलर ऑफ वेटरनरी साइंस (बीवीएस)">बैचलर ऑफ वेटरनरी साइंस (बीवीएस)</option>
                                                <option value="बैचलर ऑफ डिजाइन (बी.डिजन)">बैचलर ऑफ डिजाइन (बी.डिजन)</option>
                                                <option value="मास्टर ऑफ आर्ट्स (एमए)">मास्टर ऑफ आर्ट्स (एमए)</option>
                                                <option value="मास्टर ऑफ साइंस (एमएससी)">मास्टर ऑफ साइंस (एमएससी)</option>
                                                <option value="मास्टर ऑफ कॉमर्स (एमकॉम)">मास्टर ऑफ कॉमर्स (एमकॉम)</option>
                                                <option value="मास्टर ऑफ इंजीनियरिंग (एमई)">मास्टर ऑफ इंजीनियरिंग (एमई)</option>
                                                <option value="मास्टर ऑफ टेक्नोलॉजी (एमटेक)">मास्टर ऑफ टेक्नोलॉजी (एमटेक)</option>
                                                <option value="मास्टर ऑफ बिजनेस एडमिनिस्ट्रेशन (एमबीए)">मास्टर ऑफ बिजनेस एडमिनिस्ट्रेशन (एमबीए)</option>
                                                <option value="मास्टर ऑफ कंप्यूटर एप्लीकेशन्स (एमसीए)">मास्टर ऑफ कंप्यूटर एप्लीकेशन्स (एमसीए)</option>
                                                <option value="मास्टर ऑफ लॉ (एलएलएम)">मास्टर ऑफ लॉ (एलएलएम)</option>
                                                <option value="मास्टर ऑफ एजुकेशन (एमएड)">मास्टर ऑफ एजुकेशन (एमएड)</option>
                                                <option value="मास्टर ऑफ फाइन आर्ट्स (एमएफए)">मास्टर ऑफ फाइन आर्ट्स (एमएफए)</option>
                                                <option value="मास्टर ऑफ सोशल वर्क (एमएसडब्ल्यू)">मास्टर ऑफ सोशल वर्क (एमएसडब्ल्यू)</option>
                                                <option value="मास्टर ऑफ हॉस्पिटल एडमिनिस्ट्रेशन (एमएचए)">मास्टर ऑफ हॉस्पिटल एडमिनिस्ट्रेशन (एमएचए)</option>
                                                <option value="मास्टर ऑफ पब्लिक हेल्थ (एमपीएच)">मास्टर ऑफ पब्लिक हेल्थ (एमपीएच)</option>
                                                <option value="मास्टर ऑफ फार्मेसी (एमफार्म)">मास्टर ऑफ फार्मेसी (एमफार्म)</option>
                                                <option value="मास्टर ऑफ डिजाइन (एमडिजन)">मास्टर ऑफ डिजाइन (एमडिजन)</option>
                                                <option value="मास्टर ऑफ वेटरनरी साइंस (एमवीएस)">मास्टर ऑफ वेटरनरी साइंस (एमवीएस)</option>
                                                <option value="मास्टर ऑफ फिजियोथेरेपी (एमपीटी)">मास्टर ऑफ फिजियोथेरेपी (एमपीटी)</option>
                                                <option value="डॉक्टर ऑफ फिलॉसफी">डॉक्टर ऑफ फिलॉसफी</option>
                                                <option value="डॉक्टर ऑफ मेडिसिन">डॉक्टर ऑफ मेडिसिन</option>
                                                <option value="डॉक्टर ऑफ डेंटल सर्जरी">डॉक्टर ऑफ डेंटल सर्जरी</option>
                                                <option value="डॉक्टर ऑफ वेटरनरी मेडिसिन">डॉक्टरेट ऑफ वेटरनरी मेडिसिन (पशु चिकित्सा में)</option>
                                                <option value="इंजीनियरिंग में डिप्लोमा">इंजीनियरिंग में डिप्लोमा</option>
                                                <option value="फार्मेसी में डिप्लोमा">फार्मेसी में डिप्लोमा</option>
                                                <option value="शिक्षा में डिप्लोमा">शिक्षा में डिप्लोमा</option>
                                                <option value="पोस्टग्रेजुएट डिप्लोमा इन मैनेजमेंट">पोस्टग्रेजुएट डिप्लोमा इन मैनेजमेंट</option>
                                                <option value="डिजिटल मार्केटिंग में सर्टिफिकेट">डिजिटल मार्केटिंग में सर्टिफिकेट</option>
                                                <option value="डेटा साइंस में सर्टिफिकेट">डेटा साइंस में सर्टिफिकेट</option>
                                                <option value="ग्राफिक डिजाइन में सर्टिफिकेट">ग्राफिक डिजाइन में सर्टिफिकेट</option>
                                                <option value="अन्य">अन्य</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 other-qualification-group" style="display: none;"> <!-- Initially hidden -->
                                        <div class="form-group">
                                            <label for="other-qualification">अन्य शिक्षा</label>
                                            <input type="text" class="form-control other-qualification" id="husband_other_qualification" placeholder="शिक्षा चुने">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-marriage">विवाह</label>
                                            <select class="form-control" id="husband_marriage" onchange="toggleHusMarriageType()">
                                                <option selected disabled value>विवाह चुने</option>
                                                <option value="1">हाँ</option>
                                                <option value="0">नहीं</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4" id="husband_marriage_type_wrapper" style="display: none;">
                                        <div class="form-group">
                                            <label for="husband-marriage-type">विवाह का प्रकार</label>
                                            <select class="form-control" id="husband_marriage_type">
                                                <option selected disabled value>विवाह का प्रकार चुने</option>
                                                <option>सजातीय</option>
                                                <option>अंतर्जातीय</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-marital-status">वैवाहिक स्थिति</label>
                                            <select class="form-control" id="husband_marital_status">
                                                <option selected disabled value>वैवाहिक स्थिति चुने</option>
                                                <option>सामान्य</option>
                                                <option>विदुर</option>
                                                <option>तलाकशुदा</option>
                                                <option>परित्याग</option>
                                                <option>छोड़ छुट्टी</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-blood-group">ब्लड ग्रुप</label>
                                            <select class="form-control" id="husband_blood_group">
                                                <option selected disabled value>ब्लड ग्रुप चुने</option>
                                                <option>ए+</option>
                                                <option>ए-</option>
                                                <option>बी+</option>
                                                <option>बी-</option>
                                                <option>एबी+</option>
                                                <option>एबी-</option>
                                                <option>ओ+</option>
                                                <option>ओ-</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-total-kids">बच्चों की कुल संख्या</label>
                                            <input type="number" class="form-control" id="husband_total_kids">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-sons">पुत्र</label>
                                            <input type="number" class="form-control" id="husband_sons">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-daughters">पुत्री</label>
                                            <input type="number" class="form-control" id="husband_daughters">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-occupation">कार्य</label>
                                            <select class="form-control occupation-select notranslate" id="husband_occupation">
                                                    <option selected disabled value>कार्य चुने</option>
                                                    <option value="कृषि">कृषि</option>
                                                    <option value="व्यवसाय">व्यवसाय</option>
                                                    <option value="फेरी">फेरी</option>
                                                    <option value="श्रमिक">श्रमिक</option>
                                                    <option value="पेंशन">पेंशन</option>
                                                    <option value="शासकीया नौकरी">शासकीया नौकरी</option>
                                                    <option value="प्राइवेट नौकरी">प्राइवेट नौकरी</option>
                                                    <option value="सेवानिवृत">सेवानिवृत</option>
                                                    <option value="विद्यार्थी">विद्यार्थी</option>
                                                    <option value="अन्य">अन्य</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 other-occupation-group" style="display: none;">
                                        <div class="form-group">
                                            <label for="other-occupation">कार्य के प्रकार</label>
                                            <input type="text" class="form-control other-occupation" id="husband_occupation_type"placeholder="अपनी कार्य दर्ज करें">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <label for="">जाति प्रमाण पत्र</label>
                                        <div class="input-group role-group mt-1">
                                            <div class="form-check">
                                                <input type="radio" id="Yes" name="role" value="1" class="form-check-input">
                                                <label for="Yes" class="form-check-label">हाँ</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="No" name="role" value="0" class="form-check-input">
                                                <label for="No" class="form-check-label">नहीं</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="upload__box">
                                            <div class="upload__btn-box">
                                                <label>
                                                    <p class="upload__btn bg-info w-25 ">तश्वीरें अपलोड करो</p>
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
                                        <button type="button" class="btn btn-success" id="malechief_submit">सुधार</button>
                                    </div>
                            </form>
                        </div>
                   
                    <!-- Wife Section -->
                    <div class="member-section mt-3 bg-light">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="hading">महिला मुखिया</h4>
                            <span class="toggle-icon" id="toggle-wife" onclick="toggleSection('wife-section', 'toggle-wife')">+</span>
                        </div>
                        <div id="wife-section" style="display: none;">
                            <form id="wife-form">
                                <!-- Wife details input fields -->
                                <div class="row">
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4" hidden>
                                        <div class="form-group">
                                            <label for="husband-id">ID Number</label>
                                            <input type="text" class="form-control" id="female_numner_id"value="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4" hidden>
                                        <div class="form-group">
                                            <label for="husband-id">ID Number</label>
                                            <input type="text" class="form-control" id="female_family_id"value="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4" hidden>
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
                                            <label for="wife-name">नाम</label>
                                            <input type="text" class="form-control" id="wife_name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-mother-name">मां का नाम</label>
                                            <input type="text" class="form-control" id="wife_mother_name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-father-name">पिता का नाम</label>
                                            <input type="text" class="form-control" id="wife_father_name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-husband-name">पति</label>
                                            <input type="text" class="form-control" id="wife_husband_name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-father-surname">मूल सरनेम</label>
                                            <input type="text" class="form-control" id="wife_father_surname">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-father-id">पिता आईडी</label>
                                            <input type="text" class="form-control" id="wife_father_id">
                                        </div>
                                    </div>  
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4"> 
                                        <div class="form-group">
                                            <label for="wife-age">आयु</label>
                                            <input type="number" class="form-control" id="wife_age">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-dob">जन्म की तारीख</label>
                                            <input type="date" class="form-control" id="wife_dob">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-mobile">मोबाइल नंबर</label>
                                            <input type="tel" class="form-control" id="wife_mobile">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-relation">परिवार के मुखिया के साथ संबंध</label>
                                            <input type="text" class="form-control" id="wife_relation" value="स्वयं" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="husband-qualification">शिक्षा</label>
                                            <select class="form-control husband-qualification" id="wife_qualification">
                                                <option selected disabled value>शिक्षा चुने</option>
                                                <option value="प्राथमिक">प्राथमिक</option>
                                                <option value="माध्यमिक">माध्यमिक</option>
                                                <option value="उच्च माध्यमिक">उच्च माध्यमिक</option>
                                                <option value="स्नातक">स्नातक</option>
                                                <option value="स्नातकोत्तर">स्नातकोत्तर</option>
                                                <option value="बैचलर ऑफ आर्ट्स (बी.ए.)">बैचलर ऑफ आर्ट्स (बी.ए.)</option>
                                                <option value="बैचलर ऑफ साइंस (बी.एस्स.)">बैचलर ऑफ साइंस (बी.एस्स.)</option>
                                                <option value="बैचलर ऑफ कॉमर्स (बी.कॉम.)">बैचलर ऑफ कॉमर्स (बी.कॉम.)</option>
                                                <option value="बैचलर ऑफ इंजीनियरिंग (बी.ई.)">बैचलर ऑफ इंजीनियरिंग (बी.ई.)</option>
                                                <option value="बैचलर ऑफ टेक्नोलॉजी (बी.टेक.)">बैचलर ऑफ टेक्नोलॉजी (बी.टेक.)</option>
                                                <option value="बैचलर ऑफ मेडिसिन, बैचलर ऑफ सर्जरी (एमबीबीएस)">बैचलर ऑफ मेडिसिन, बैचलर ऑफ सर्जरी (एमबीबीएस)</option>
                                                <option value="बैचलर ऑफ डेंटल सर्जरी (बी.डी.एस.)">बैचलर ऑफ डेंटल सर्जरी (बी.डी.एस.)</option>
                                                <option value="बैचलर ऑफ फार्मेसी (बी.फार्म.)">बैचलर ऑफ फार्मेसी (बी.फार्म.)</option>
                                                <option value="बैचलर ऑफ आर्किटेक्चर (बी.आर्क.)">बैचलर ऑफ आर्किटेक्चर (बी.आर्क.)</option>
                                                <option value="बैचलर ऑफ बिजनेस एडमिनिस्ट्रेशन (बीबीए)">बैचलर ऑफ बिजनेस एडमिनिस्ट्रेशन (बीबीए)</option>
                                                <option value="बैचलर ऑफ कंप्यूटर एप्लीकेशन्स (बी.सी.ए)">बैचलर ऑफ कंप्यूटर एप्लीकेशन्स (बी.सी.ए)</option>
                                                <option value="बैचलर ऑफ लॉ (बीएलबी)">बैचलर ऑफ लॉ (बीएलबी)</option>
                                                <option value="बैचलर ऑफ एजुकेशन (बी.एड.)">बैचलर ऑफ एजुकेशन (बी.एड.)</option>
                                                <option value="बैचलर ऑफ फाइन आर्ट्स (बीएफए)">बैचलर ऑफ फाइन आर्ट्स (बीएफए)</option>
                                                <option value="बैचलर ऑफ सोशल वर्क (बी.एस.डब्ल्यू)">बैचलर ऑफ सोशल वर्क (बी.एस.डब्ल्यू)</option>
                                                <option value="बैचलर ऑफ होटल मैनेजमेंट (बीएचएम)">बैचलर ऑफ होटल मैनेजमेंट (बीएचएम)</option>
                                                <option value="बैचलर ऑफ फिजियोथेरेपी (बीपीटी)">बैचलर ऑफ फिजियोथेरेपी (बीपीटी)</option>
                                                <option value="बैचलर ऑफ वेटरनरी साइंस (बीवीएस)">बैचलर ऑफ वेटरनरी साइंस (बीवीएस)</option>
                                                <option value="बैचलर ऑफ डिजाइन (बी.डिजन)">बैचलर ऑफ डिजाइन (बी.डिजन)</option>
                                                <option value="मास्टर ऑफ आर्ट्स (एमए)">मास्टर ऑफ आर्ट्स (एमए)</option>
                                                <option value="मास्टर ऑफ साइंस (एमएससी)">मास्टर ऑफ साइंस (एमएससी)</option>
                                                <option value="मास्टर ऑफ कॉमर्स (एमकॉम)">मास्टर ऑफ कॉमर्स (एमकॉम)</option>
                                                <option value="मास्टर ऑफ इंजीनियरिंग (एमई)">मास्टर ऑफ इंजीनियरिंग (एमई)</option>
                                                <option value="मास्टर ऑफ टेक्नोलॉजी (एमटेक)">मास्टर ऑफ टेक्नोलॉजी (एमटेक)</option>
                                                <option value="मास्टर ऑफ बिजनेस एडमिनिस्ट्रेशन (एमबीए)">मास्टर ऑफ बिजनेस एडमिनिस्ट्रेशन (एमबीए)</option>
                                                <option value="मास्टर ऑफ कंप्यूटर एप्लीकेशन्स (एमसीए)">मास्टर ऑफ कंप्यूटर एप्लीकेशन्स (एमसीए)</option>
                                                <option value="मास्टर ऑफ लॉ (एलएलएम)">मास्टर ऑफ लॉ (एलएलएम)</option>
                                                <option value="मास्टर ऑफ एजुकेशन (एमएड)">मास्टर ऑफ एजुकेशन (एमएड)</option>
                                                <option value="मास्टर ऑफ फाइन आर्ट्स (एमएफए)">मास्टर ऑफ फाइन आर्ट्स (एमएफए)</option>
                                                <option value="मास्टर ऑफ सोशल वर्क (एमएसडब्ल्यू)">मास्टर ऑफ सोशल वर्क (एमएसडब्ल्यू)</option>
                                                <option value="मास्टर ऑफ हॉस्पिटल एडमिनिस्ट्रेशन (एमएचए)">मास्टर ऑफ हॉस्पिटल एडमिनिस्ट्रेशन (एमएचए)</option>
                                                <option value="मास्टर ऑफ पब्लिक हेल्थ (एमपीएच)">मास्टर ऑफ पब्लिक हेल्थ (एमपीएच)</option>
                                                <option value="मास्टर ऑफ फार्मेसी (एमफार्म)">मास्टर ऑफ फार्मेसी (एमफार्म)</option>
                                                <option value="मास्टर ऑफ डिजाइन (एमडिजन)">मास्टर ऑफ डिजाइन (एमडिजन)</option>
                                                <option value="मास्टर ऑफ वेटरनरी साइंस (एमवीएस)">मास्टर ऑफ वेटरनरी साइंस (एमवीएस)</option>
                                                <option value="मास्टर ऑफ फिजियोथेरेपी (एमपीटी)">मास्टर ऑफ फिजियोथेरेपी (एमपीटी)</option>
                                                <option value="डॉक्टर ऑफ फिलॉसफी">डॉक्टर ऑफ फिलॉसफी</option>
                                                <option value="डॉक्टर ऑफ मेडिसिन">डॉक्टर ऑफ मेडिसिन</option>
                                                <option value="डॉक्टर ऑफ डेंटल सर्जरी">डॉक्टर ऑफ डेंटल सर्जरी</option>
                                                <option value="डॉक्टर ऑफ वेटरनरी मेडिसिन">डॉक्टरेट ऑफ वेटरनरी मेडिसिन (पशु चिकित्सा में)</option>
                                                <option value="इंजीनियरिंग में डिप्लोमा">इंजीनियरिंग में डिप्लोमा</option>
                                                <option value="फार्मेसी में डिप्लोमा">फार्मेसी में डिप्लोमा</option>
                                                <option value="शिक्षा में डिप्लोमा">शिक्षा में डिप्लोमा</option>
                                                <option value="पोस्टग्रेजुएट डिप्लोमा इन मैनेजमेंट">पोस्टग्रेजुएट डिप्लोमा इन मैनेजमेंट</option>
                                                <option value="डिजिटल मार्केटिंग में सर्टिफिकेट">डिजिटल मार्केटिंग में सर्टिफिकेट</option>
                                                <option value="डेटा साइंस में सर्टिफिकेट">डेटा साइंस में सर्टिफिकेट</option>
                                                <option value="ग्राफिक डिजाइन में सर्टिफिकेट">ग्राफिक डिजाइन में सर्टिफिकेट</option>
                                                <option value="अन्य">अन्य</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 other-qualification-group" style="display: none;"> <!-- Initially hidden -->
                                        <div class="form-group">
                                            <label for="other-qualification">अन्य शिक्षा</label>
                                            <input type="text" class="form-control other-qualification" id="wife_other_qualification" placeholder="शिक्षा चुने">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-marriage">विवाह</label>
                                            <select class="form-control" id="wife_marriage" onchange="toggleMarriageType()">
                                                <option selected disabled value>विवाह चुने</option>
                                                <option value="1">हाँ</option>
                                                <option value="0">नहीं</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4" id="marriage_type_wrapper" style="display: none;">
                                        <div class="form-group">
                                            <label for="wife-marriage-type">विवाह का प्रकार</label>
                                            <select class="form-control" id="wife_marriage_type">
                                                <option selected disabled value>विवाह का प्रकार चुने</option>
                                                <option>सजातीय</option>
                                                <option>अंतर्जातीय</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-marital-status">वैवाहिक स्थिति</label>
                                            <select class="form-control" id="wife_marital_status">
                                                <option selected disabled value>वैवाहिक स्थिति चुने</option>
                                                <option>सामान्य</option>
                                                <option>विदुर</option>
                                                <option>तलाकशुदा</option>
                                                <option>परित्याग</option>
                                                <option>छोड़ छुट्टी</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-blood-group">ब्लड ग्रुप</label>
                                            <select class="form-control" id="wife_blood_group">
                                                <option selected disabled value>ब्लड ग्रुप चुने</option>
                                                <option>ए+</option>
                                                <option>ए-</option>
                                                <option>बी+</option>
                                                <option>बी-</option>
                                                <option>एबी+</option>
                                                <option>एबी-</option>
                                                <option>ओ+</option>
                                                <option>ओ-</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-total-kids">बच्चों की कुल संख्या</label>
                                            <input type="number" class="form-control" id="wife_total_kids">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-sons">पुत्र</label>
                                            <input type="number" class="form-control" id="wife_sons">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-daughters">पुत्री</label>
                                            <input type="number" class="form-control" id="wife_daughters">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="wife-occupation">कार्य</label>
                                            <select class="form-control occupation-select notranslate" id="wife_occupation">
                                                    <option selected disabled value>कार्य चुने</option>
                                                    <option value="कृषि">कृषि</option>
                                                    <option value="व्यवसाय">व्यवसाय</option>
                                                    <option value="फेरी">फेरी</option>
                                                    <option value="श्रमिक">श्रमिक</option>
                                                    <option value="पेंशन">पेंशन</option>
                                                    <option value="शासकीया नौकरी">शासकीया नौकरी</option>
                                                    <option value="प्राइवेट नौकरी">प्राइवेट नौकरी</option>
                                                    <option value="गृहिणी">गृहिणी</option>
                                                    <option value="विद्यार्थी">विद्यार्थी</option>
                                                    <option value="अन्य">अन्य</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4 other-occupation-group" style="display: none;">
                                        <div class="form-group">
                                            <label for="other-occupation">कार्य के प्रकार</label>
                                            <input type="text" class="form-control other-occupation" id="wife_occupation_type"placeholder="अपनी कार्य दर्ज करें">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <label for="">जाति प्रमाण पत्र
                                        </label>
                                        <div class="input-group role-group mt-1">
                                            <div class="form-check">
                                                <input type="radio" id="Yes" name="role" value="1" class="form-check-input">
                                                <label for="Yes" class="form-check-label">हाँ</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="No" name="role" value="0" class="form-check-input">
                                                <label for="No" class="form-check-label">नहीं</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <div class="upload__box">
                                            <div class="upload__btn-box">
                                                <label>
                                                    <p class="upload__btn bg-info w-25 ">तश्वीरें अपलोड करो</p>
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
                                        <button type="button" class="btn btn-success" id="femalechief_submit" >सुधार</button>
                                    </div>
                            </form>
                        </div>
                    </div>

                    <!-- Children Section -->
                    <div class="member-section bg-light">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="hading">अविवाहित बच्चे</h4>
                            <span class="toggle-icon" id="toggle-children" onclick="toggleSection('children-section', 'toggle-children')">+</span>
                        </div>
                        <div id="children-section" style="display: none;">
                            <form id="children-form">
                                <div id="children-entries">
                                    <!-- Child entries will be dynamically added here -->
                                </div>
                                <button type="button" class="btn btn-info" onclick="addChild()">जोडे</button>
                              
                            </form>
                        </div>
                      
                    </div>
                    <div class="member-section mt-3 bg-light">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="hading">विवाहित बच्चे</h4>
                            <span class="toggle-icon" id="married_toggle-children" onclick="toggleSection('married_children-section', 'married_toggle-children')">+</span>
                        </div>
                        <div id="married_children-section" style="display: none;">
                            <form id="married_children-form">
                                <div id="married_children-entries">
                                 
                                </div>
                                <button type="button" class="btn btn-info" onclick="addMarriedChild()">जोडे</button>
                                <div class="mt-2 text-end">
                                    <!-- <button type="button" class="btn btn-success" onclick="store3(event)">Update</button> -->
                                </div>
                            </form>
                        </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</html>

<script>
    const Bar = document.getElementById("menu");
const main = document.getElementById("main");
Bar.addEventListener("click", () => {
  return main.classList.toggle("close");
});

</script>
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

<script>
    
    $(document).ready(function() {
    $('.occupation-select').change(function() {
        var selectedOccupation = $(this).val();
        if (selectedOccupation) { 
            $('.other-occupation-group').show(); 
        } else {
            $('.other-occupation-group').hide();
            $('.other-occupation').val(''); 
        }
    });
    });
    $(document).ready(function() {
    $('.husband-qualification').change(function() {
      var selectedQualification = $(this).val();
      if (selectedQualification === 'अन्य') {
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
    function toggleMarriageType() {
    var marriageSelect = document.getElementById("wife_marriage");
    var marriageTypeWrapper = document.getElementById("marriage_type_wrapper");

    if (marriageSelect.value === "1") {
        marriageTypeWrapper.style.display = "block";
    } else {
        marriageTypeWrapper.style.display = "none";
    }
}
function toggleHusMarriageType() {
    var marriageSelect = document.getElementById("husband_marriage");
    var marriageTypeWrapper = document.getElementById("husband_marriage_type_wrapper");

    if (marriageSelect.value === "1") {
        marriageTypeWrapper.style.display = "block";
    } else {
        marriageTypeWrapper.style.display = "none";
    }
}
</script>
<script>
let childCount = 1;
const maxChildren = 20;
let firstChildIdNumber = "";
let firstChildFamilyId = "";

function addChild() {
    if (childCount >= maxChildren) {
        alert("You can only add up to 10 children.");
        return;
    }
    childCount++;
    const childrenEntries = document.getElementById('children-entries');
    const newChildEntry = document.createElement('div');
    newChildEntry.className = 'child-entry mb-3';
    newChildEntry.id = `child-${childCount}`;
    newChildEntry.innerHTML = `
        <h5>Child ${childCount}</h5>
        <div class="row">
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${childCount}-name">नाम</label>
                    <input type="text" class="form-control" id="child${childCount}-name">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${childCount}-age">आयु</label>
                    <input type="number" class="form-control" id="child${childCount}-age">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${childCount}-dob">जन्म की तारीख</label>
                    <input type="date" class="form-control" id="child${childCount}-dob">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${childCount}-mobile">मोबाइल नंबर</label>
                    <input type="tel" class="form-control" id="child${childCount}-mobile">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${childCount}-relation">परिवार के मुखिया के साथ संबंध</label>
                    <select class="form-control" id="child${childCount}-relation">
                        <option selected disabled value>संबंध चुने</option>
                        <option value="पुत्र">पुत्र</option>
                        <option value="पुत्री">पुत्री</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${childCount}-qualification">शिक्षा</label>
                    <select class="form-control" id="child${childCount}-qualification">
                        <option selected disabled value>शिक्षा चुने</option>
                        <option value="प्राथमिक">प्राथमिक</option>
                        <option value="माध्यमिक">माध्यमिक</option>
                        <option value="उच्च माध्यमिक">उच्च माध्यमिक</option>
                        <option value="स्नातक">स्नातक</option>
                        <option value="स्नातकोत्तर">स्नातकोत्तर</option>
                        <option value="बैचलर ऑफ आर्ट्स (बी.ए.)">बैचलर ऑफ आर्ट्स (बी.ए.)</option>
                        <option value="बैचलर ऑफ साइंस (बी.एस्स.)">बैचलर ऑफ साइंस (बी.एस्स.)</option>
                        <option value="बैचलर ऑफ कॉमर्स (बी.कॉम.)">बैचलर ऑफ कॉमर्स (बी.कॉम.)</option>
                        <option value="बैचलर ऑफ इंजीनियरिंग (बी.ई.)">बैचलर ऑफ इंजीनियरिंग (बी.ई.)</option>
                        <option value="बैचलर ऑफ टेक्नोलॉजी (बी.टेक.)">बैचलर ऑफ टेक्नोलॉजी (बी.टेक.)</option>
                        <option value="बैचलर ऑफ मेडिसिन, बैचलर ऑफ सर्जरी (एमबीबीएस)">बैचलर ऑफ मेडिसिन, बैचलर ऑफ सर्जरी (एमबीबीएस)</option>
                        <option value="बैचलर ऑफ डेंटल सर्जरी (बी.डी.एस.)">बैचलर ऑफ डेंटल सर्जरी (बी.डी.एस.)</option>
                        <option value="बैचलर ऑफ फार्मेसी (बी.फार्म.)">बैचलर ऑफ फार्मेसी (बी.फार्म.)</option>
                        <option value="बैचलर ऑफ आर्किटेक्चर (बी.आर्क.)">बैचलर ऑफ आर्किटेक्चर (बी.आर्क.)</option>
                        <option value="बैचलर ऑफ बिजनेस एडमिनिस्ट्रेशन (बीबीए)">बैचलर ऑफ बिजनेस एडमिनिस्ट्रेशन (बीबीए)</option>
                        <option value="बैचलर ऑफ कंप्यूटर एप्लीकेशन्स (बी.सी.ए)">बैचलर ऑफ कंप्यूटर एप्लीकेशन्स (बी.सी.ए)</option>
                        <option value="बैचलर ऑफ लॉ (बीएलबी)">बैचलर ऑफ लॉ (बीएलबी)</option>
                        <option value="बैचलर ऑफ एजुकेशन (बी.एड.)">बैचलर ऑफ एजुकेशन (बी.एड.)</option>
                        <option value="बैचलर ऑफ फाइन आर्ट्स (बीएफए)">बैचलर ऑफ फाइन आर्ट्स (बीएफए)</option>
                        <option value="बैचलर ऑफ सोशल वर्क (बी.एस.डब्ल्यू)">बैचलर ऑफ सोशल वर्क (बी.एस.डब्ल्यू)</option>
                        <option value="बैचलर ऑफ होटल मैनेजमेंट (बीएचएम)">बैचलर ऑफ होटल मैनेजमेंट (बीएचएम)</option>
                        <option value="बैचलर ऑफ फिजियोथेरेपी (बीपीटी)">बैचलर ऑफ फिजियोथेरेपी (बीपीटी)</option>
                        <option value="बैचलर ऑफ वेटरनरी साइंस (बीवीएस)">बैचलर ऑफ वेटरनरी साइंस (बीवीएस)</option>
                        <option value="बैचलर ऑफ डिजाइन (बी.डिजन)">बैचलर ऑफ डिजाइन (बी.डिजन)</option>
                        <option value="मास्टर ऑफ आर्ट्स (एमए)">मास्टर ऑफ आर्ट्स (एमए)</option>
                        <option value="मास्टर ऑफ साइंस (एमएससी)">मास्टर ऑफ साइंस (एमएससी)</option>
                        <option value="मास्टर ऑफ कॉमर्स (एमकॉम)">मास्टर ऑफ कॉमर्स (एमकॉम)</option>
                        <option value="मास्टर ऑफ इंजीनियरिंग (एमई)">मास्टर ऑफ इंजीनियरिंग (एमई)</option>
                        <option value="मास्टर ऑफ टेक्नोलॉजी (एमटेक)">मास्टर ऑफ टेक्नोलॉजी (एमटेक)</option>
                        <option value="मास्टर ऑफ बिजनेस एडमिनिस्ट्रेशन (एमबीए)">मास्टर ऑफ बिजनेस एडमिनिस्ट्रेशन (एमबीए)</option>
                        <option value="मास्टर ऑफ कंप्यूटर एप्लीकेशन्स (एमसीए)">मास्टर ऑफ कंप्यूटर एप्लीकेशन्स (एमसीए)</option>
                        <option value="मास्टर ऑफ लॉ (एलएलएम)">मास्टर ऑफ लॉ (एलएलएम)</option>
                        <option value="मास्टर ऑफ एजुकेशन (एमएड)">मास्टर ऑफ एजुकेशन (एमएड)</option>
                        <option value="मास्टर ऑफ फाइन आर्ट्स (एमएफए)">मास्टर ऑफ फाइन आर्ट्स (एमएफए)</option>
                        <option value="मास्टर ऑफ सोशल वर्क (एमएसडब्ल्यू)">मास्टर ऑफ सोशल वर्क (एमएसडब्ल्यू)</option>
                        <option value="मास्टर ऑफ हॉस्पिटल एडमिनिस्ट्रेशन (एमएचए)">मास्टर ऑफ हॉस्पिटल एडमिनिस्ट्रेशन (एमएचए)</option>
                        <option value="मास्टर ऑफ पब्लिक हेल्थ (एमपीएच)">मास्टर ऑफ पब्लिक हेल्थ (एमपीएच)</option>
                        <option value="मास्टर ऑफ फार्मेसी (एमफार्म)">मास्टर ऑफ फार्मेसी (एमफार्म)</option>
                        <option value="मास्टर ऑफ डिजाइन (एमडिजन)">मास्टर ऑफ डिजाइन (एमडिजन)</option>
                        <option value="मास्टर ऑफ वेटरनरी साइंस (एमवीएस)">मास्टर ऑफ वेटरनरी साइंस (एमवीएस)</option>
                        <option value="मास्टर ऑफ फिजियोथेरेपी (एमपीटी)">मास्टर ऑफ फिजियोथेरेपी (एमपीटी)</option>
                        <option value="डॉक्टर ऑफ फिलॉसफी">डॉक्टर ऑफ फिलॉसफी</option>
                        <option value="डॉक्टर ऑफ मेडिसिन">डॉक्टर ऑफ मेडिसिन</option>
                        <option value="डॉक्टर ऑफ डेंटल सर्जरी">डॉक्टर ऑफ डेंटल सर्जरी</option>
                        <option value="डॉक्टर ऑफ वेटरनरी मेडिसिन">डॉक्टरेट ऑफ वेटरनरी मेडिसिन (पशु चिकित्सा में)</option>
                        <option value="इंजीनियरिंग में डिप्लोमा">इंजीनियरिंग में डिप्लोमा</option>
                        <option value="फार्मेसी में डिप्लोमा">फार्मेसी में डिप्लोमा</option>
                        <option value="शिक्षा में डिप्लोमा">शिक्षा में डिप्लोमा</option>
                        <option value="पोस्टग्रेजुएट डिप्लोमा इन मैनेजमेंट">पोस्टग्रेजुएट डिप्लोमा इन मैनेजमेंट</option>
                        <option value="डिजिटल मार्केटिंग में सर्टिफिकेट">डिजिटल मार्केटिंग में सर्टिफिकेट</option>
                        <option value="डेटा साइंस में सर्टिफिकेट">डेटा साइंस में सर्टिफिकेट</option>
                        <option value="ग्राफिक डिजाइन में सर्टिफिकेट">ग्राफिक डिजाइन में सर्टिफिकेट</option>
                        <option value="अन्य">अन्य</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 other-qualification-group" style="display: none;"> 
                <div class="form-group">
                    <label for="childother${childCount}-qualification">अन्य शिक्षा</label>
                    <input type="text" class="form-control other-qualification" id="childother${childCount}-qualification" placeholder="शिक्षा का चयन करें">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${childCount}-marriage-stage">विवाह चरण</label>
                    <select class="form-control" id="child${childCount}-marriage-stage">
                        <option selected disabled value>विवाह चरण चुने</option>
                        <option>अविवाहित</option>
                        <option>टीका</option>
                        <option>सागाई</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${childCount}-blood-group">ब्लड ग्रुप</label>
                    <select class="form-control" id="child${childCount}-blood-group">
                        <option selected disabled value>ब्लड ग्रुप चुने</option>
                        <option>ए+</option>
                        <option>ए-</option>
                        <option>बी+</option>
                        <option>बी-</option>
                        <option>एबी+</option>
                        <option>एबी-</option>
                        <option>ओ+</option>
                        <option>ओ-</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${childCount}-occupation">कार्य</label>
                    <select class="form-control" id="child${childCount}-occupation">
                        <option selected disabled value>चुने कार्य</option>
                        <option value="कृषि">कृषि</option>
                        <option value="व्यवसाय">व्यवसाय</option>
                        <option value="फेरी">फेरी</option>
                        <option value="श्रमिक">श्रमिक</option>
                        <option value="पेंशन">पेंशन</option>
                        <option value="शासकीया नौकरी">शासकीया नौकरी</option>
                        <option value="प्राइवेट नौकरी">प्राइवेट नौकरी</option>
                        <option value="विद्यार्थी">विद्यार्थी</option>
                        <option value="अन्य">अन्य</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 other-occupation-group" style="display: none;">
                <div class="form-group">
                    <label for="childother${childCount}-occupation">अन्य कार्य</label>
                    <input type="text" class="form-control other-occupation" id="childother${childCount}-occupation" placeholder="अपनी कार्य दर्ज करें">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <label for="">जाति प्रमाण पत्र</label>
                <div class="input-group role-group mt-1">
                    <div class="form-check">
                        <input type="radio" id="Yes" name="role${childCount}" value="1" class="form-check-input">
                        <label for="Yes" class="form-check-label">हाँ</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" id="No" name="role${childCount}" value="0" class="form-check-input">
                        <label for="No" class="form-check-label">नहीं</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="upload__box">
                    <div class="upload__btn-box">
                        <label>
                            <p class="upload__btn bg-info w-25 ">तश्वीरें अपलोड करो</p>
                            <input type="file" multiple="" data-max_length="3" class="uploadProfileInput upload__inputfile " id="child${childCount}-file" name="_file">
                        </label>
                    </div>
                    <div class="col-sm-12">
                        <div class="upload__img-wrap" id="child${childCount}-image" style="display:flex; flex-wrap:wrap;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-2 text-end">
            <button type="button" class="btn btn-success child-update-btn" data-child-id="${childCount}" onclick="updatedata(event)">सुधार</button>
        </div>
    `;

    childrenEntries.appendChild(newChildEntry);

    // Event listener for qualification select
    const qualificationSelect = newChildEntry.querySelector(`#child${childCount}-qualification`);
    qualificationSelect.addEventListener('change', function() {
        const otherQualificationGroup = newChildEntry.querySelector('.other-qualification-group');
        if (qualificationSelect.value === 'अन्य') {
            otherQualificationGroup.style.display = 'block';
        } else {
            otherQualificationGroup.style.display = 'none';
        }
    });

    // Event listener for occupation select
    const occupationSelect = newChildEntry.querySelector(`#child${childCount}-occupation`);
    const otherOccupationGroup = newChildEntry.querySelector('.other-occupation-group');
    occupationSelect.addEventListener('change', function() {
        if (occupationSelect.value === 'अन्य') {
            otherOccupationGroup.style.display = 'block';
        } else {
            otherOccupationGroup.style.display = 'none';
        }
    });
}
</script>
<script>
    // function toggleSection(sectionId, toggleIconId) {
    //     var section = document.getElementById(sectionId);
    //     var toggleIcon = document.getElementById(toggleIconId);
    //     if (section.style.display === "none") {
    //         section.style.display = "block";
    //         toggleIcon.textContent = "-";
    //     } else {
    //         section.style.display = "none";
    //         toggleIcon.textContent = "+";
    //     }
    // }

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
                    <label for="married_child${newEntryIndex}-name">नाम</label>
                    <input type="text" class="form-control" id="married_child${newEntryIndex}-name">
                </div>
                
            </div>
              <div class="col-12 col-lg-4 col-md-4 col-sm-4" >
                <div class="form-group">
                    <label for="married_child${newEntryIndex}-address">निवासी</label>
                    <input type="text" class="form-control" id="married_child${newEntryIndex}-address">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
            <div class="form-group">
                    <label for="married-child-number-id-${newEntryIndex}">आईडी नंबर</label>
                    <input type="text" class="form-control" id="married-child-number-id-${newEntryIndex}" >
                </div>
                <div class="form-group" hidden>
                    <label for="married-child-family-id-${newEntryIndex}">Family ID</label>
                    <input type="text" class="form-control" id="married-child-family-id-${newEntryIndex}"  value="${firstChildFamilyId}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
               
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4" hidden>
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
                            <p class="upload__btn bg-info w-25">तश्वीरें अपलोड करो</p>
                            <input type="file" multiple="" data-max_length="3" class="upload__inputfile" id="child-married-file-${newEntryIndex}" name="_file">
                        </label>
                    </div>
                    <div class="col-sm-12">
                        <div class="upload__img-wrap" id="marriedchild${newEntryIndex}" style="display:flex; flex-wrap:wrap;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-2 text-end">
            <button type="button" class="btn btn-success child-update-btn" data-child-id="${newEntryIndex}" onclick="updatedata(event)">सुधार</button>
        </div>
    `;
    entries.appendChild(newEntry);
    ImgUpload(); // Reinitialize the image upload function
}
</script>

<script>




function formatDate(date) {
    // Convert date to yyyy-mm-dd format
    var parts = date.split('-');
    if (parts.length === 3) {
        return parts[0] + '-' + parts[1].padStart(2, '0') + '-' + parts[2].padStart(2, '0');
    }
    return date; 
}

jQuery(document).ready(function () {
    ImgUpload();
});

function ImgUpload() {
    $('.upload__inputfile').each(function () {
        var imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
        var imgPreview = imgWrap.find('.upload__img-box'); // Existing image preview container

        $(this).on('change', function (e) {
            var files = e.target.files;
            var file = files[0]; // Only consider the first selected file

            if (!file.type.match('image.*')) {
                return; // Ignore non-image files
            }

            // Clear previous image preview if exists
            imgPreview.remove();

            var reader = new FileReader();
            reader.onload = function (e) {
                var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-file='" + file.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                imgWrap.html(html); // Replace existing content with new image preview
            };
            reader.readAsDataURL(file);
        });
    });

    // Handle removing uploaded image
    $('body').on('click', ".upload__img-close", function (e) {
        var file = $(this).parent().data("file");
        $(this).closest('.upload__img-box').remove(); // Remove the image preview container

        // Reset the file input field (optional)
        var input = $(this).closest('.upload__box').find('.upload__inputfile');
        input.val(''); // Clear the file input value to allow selecting the same file again (if needed)
    });
}


function getFamilyDetail() {
    const urlParams = new URLSearchParams(window.location.search);
    const user_id = urlParams.get('family_id');
    const url = "http://192.168.1.10:8000/api/get_initial_family_details_byId/" + user_id;
    const token = localStorage.getItem('token');

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + token
        },
        success: function(response) {
            if (response.data && response.data.length > 0) {
                const family = response.data[0];
                family.familymemberdetails.forEach((member, index)  => {
                    if (member.family_member_id === 1) {
                        
                        // Male Chief Data
                        $('#numner_id').val(member.id);
                        $('#family_id').val(member.family_id);
                        $('#family_member_id').val(member.family_member_id);
                        $('#husband_name').val(member.name);
                        $('#husband_mother_name').val(member.mother_name);
                        $('#husband_father_name').val(member.father_name);
                        $('#husband_wife_name').val(member.wife_name);
                        $('#husband_father_surname').val(member.father_surname);
                        $('#husband_father_id').val(member.father_id);
                        $('#husband_age').val(member.age);
                        $('#husband_dob').val(member.dob);
                        $('#husband_mobile').val(member.mobile_number);
                        $('#husband_relation').val(member.relation);
                        $('#husband_qualification').val(member.qualification);
                        $('#husband_marriage_type').val(member.marriage_type);
                        $('#husband_marital_status').val(member.marital_status);
                        $('#husband_marriage').val(member.marrieged);
                        $('#husband_blood_group').val(member.blood_group);
                        $('#husband_total_kids').val(member.total_kids);
                        $('#husband_sons').val(member.sons);
                        $('#husband_daughters').val(member.daughters);
                        $('#husband_occupation').val(member.occupation);
                        $('#husband_occupation_type').val(member.occupation_type);
                        $('.other-occupation-group').show();
                        
                        if (member.cast_certificate === '1') {
                            $('#Yes').prop('checked', true);
                            $('#No').prop('checked', false);
                        } else {
                            $('#Yes').prop('checked', false);
                            $('#No').prop('checked', true);
                        }
                        if (member.qualification === 'अन्य') {
                            $('.other-qualification-group').show();
                            $('#husband_other_qualification').val(member.other_qualification);
                        } else {
                            $('.other-qualification-group').hide();
                        }
                        $("#selectedImagesContainer").empty();
                            if (member.self_image) {
                                var imageUrl = 'http://192.168.1.10:8000/uploads/family_member_image/' + member.self_image.trim();
                                var newCard = `
                                    <div class="col-12 col-md-4 col-lg-4 position-relative" style="left:-10px;">
                                        <div class="upload__img-close_button" onclick="removeImage(this);"></div>
                                        <div class="brand-main d-flex box-shadow text-center ">
                                            <a class="weblink text-decoration-none text-dark" title="Image" style="display: flex; align-items: center; justify-content: center; height: 100%; width: 100%;">
                                                <img class="img-fluid" src="${imageUrl}" alt="Image" style="max-height: 100%; max-width: 100%;">
                                            </a>
                                        </div>
                                    </div>
                                `;
                                $("#selectedImagesContainer").append(newCard);
                            }
                        }else if (member.family_member_id === 2) {
                        $('#female_family_member_id').val(member.family_member_id);
                        $('#wife_name').val(member.name);
                        $('#wife_mother_name').val(member.mother_name);
                        $('#wife_father_name').val(member.father_name);
                        $('#wife_husband_name').val(member.husband_name);
                        $('#wife_father_surname').val(member.father_surname);
                        $('#wife_father_id').val(member.father_id);
                        $('#wife_age').val(member.age);
                        $('#wife_dob').val(member.dob);
                        $('#wife_mobile').val(member.mobile_number);
                        $('#wife_relation').val(member.relation);
                        $('#wife_qualification').val(member.qualification);
                        $('#wife_marriage_type').val(member.marriage_type);
                        $('#wife_marital_status').val(member.marital_status);
                        $('#wife_blood_group').val(member.blood_group);
                        $('#wife_total_kids').val(member.total_kids);
                        $('#wife_sons').val(member.sons);
                        $('#wife_daughters').val(member.daughters);
                        $('#wife_occupation').val(member.occupation);
                        $('#wife_occupation_type').val(member.occupation_type);
                        $('.other-occupation-group').show();
                        if (member.cast_certificate === '1') {
                            $('#Yes').prop('checked', true);
                            $('#No').prop('checked', false);
                        } else {
                            $('#Yes').prop('checked', false);
                            $('#No').prop('checked', true);
                        }
                        if (member.qualification === 'अन्य') {
                            $('.other-qualification-group').show();
                            $('#wife_other_qualification').val(member.other_qualification);
                        } else {
                            $('.other-qualification-group').hide();
                        }
                        $("#FemaleChiefImage").empty();
                            if (member.self_image) {
                                var imageUrl = 'http://192.168.1.10:8000/uploads/family_member_image/' + member.self_image.trim();
                                var newCard = `
                                    <div class="col-12 col-md-4 col-lg-4 position-relative" style="left:-10px;">
                                        <div class="upload__img-close_button" onclick="removeImage(this);"></div>
                                        <div class="brand-main d-flex box-shadow text-center ">
                                            <a class="weblink text-decoration-none text-dark" title="Image" style="display: flex; align-items: center; justify-content: center; height: 100%; width: 100%;">
                                                <img class="img-fluid" src="${imageUrl}" alt="Image" style="max-height: 100%; max-width: 100%;">
                                            </a>
                                        </div>
                                    </div>
                                `;
                                $("#FemaleChiefImage").append(newCard);
                            }
                    }else if (member.family_member_id === 3 && index === 0) {
                        populateFirstChild(member); 
                    } else if (member.family_member_id === 3 && index > 0) {
                        addNewChild(member); 
                    }
                    else if (member.family_member_id === 4 && index === 0) {
                        // Populate Initial Married Child Data
                        populateInitialMarriedChild(member);
                    } else if (member.family_member_id === 4 && index > 0) {
                        // Add New Married Child Data
                        addNewMarriedChild(member);
                    }
                });

                // After populating all data, show the #children-section
                $('#children-section').show();
                $('#married_children-section').show();
            } else {
                console.error('No family data found.');
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching data:', error);
        }
    });
}


function removeImage(element) {
    $(element).closest('.col-12').remove();
}
function populateFirstChild(member) {
    $('#child1-name').val(member.name);
    $(`child$${member.id}-family-member-id`).val(member.family_member_id);

}
// Function to add a new child dynamically
function addNewChild(member) {
    const childEntry = document.createElement('div');
    childEntry.className = 'child-entry mb-3';
    childEntry.id = `child-${member.id}`; 
    childEntry.innerHTML = `
        <h5>${member.name}</h5>
        <div class="row">
            <div class="col-12 col-lg-4 col-md-4 col-sm-4" hidden>
                <div class="form-group">
                    <label for="child$${member.id}-family-id">child id</label>
                <input type="text" class="form-control" id="child${member.id}-child-id" value="${member.id}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4" hidden>
                <div class="form-group">
                    <label for="child${member.id}-family-id">Family ID</label>
                    <input type="text" class="form-control" id="child${member.id}-family-id" value="${member.family_id}">
                </div>
            </div>
           <div class="col-12 col-lg-4 col-md-4 col-sm-4" hidden>
                <div class="form-group">
                    <label for="child${member.id}-family-member-id">Family Member ID</label>
                    <select class="form-control" id="child${member.id}-family-member-id">
                        <option selected disabled value>Select Marital Status</option>
                        <option value="1" ${member.family_member_id === 1 ? 'selected' : ''} disabled>1-Male Chief</option>
                        <option value="2" ${member.family_member_id === 2 ? 'selected' : ''} disabled>2-Female Chief</option>
                        <option value="3" ${member.family_member_id === 3 ? 'selected' : ''}>3-Unmarried Children</option>
                        <option value="4" ${member.family_member_id === 4 ? 'selected' : ''} disabled>4-Married Children</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${member.id}-name">नाम</label>
                    <input type="text" class="form-control" id="child${member.id}-name" value="${member.name}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${member.id}-age">आयु</label>
                    <input type="number" class="form-control" id="child${member.id}-age" value="${member.age}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${member.id}-dob">जन्म की तारीख</label>
                    <input type="date" class="form-control" id="child${member.id}-dob" value="${member.dob}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${member.id}-mobile">मोबाइल नंबर</label>
                    <input type="tel" class="form-control" id="child${member.id}-mobile" value="${member.mobile_number}">
                </div>
            </div>
             <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${member.id}-relation">परिवार के मुखिया के साथ संबंध</label>
                     <select class="form-control" id="child${member.id}-relation">
                        <option value="" disabled>संबंध चुने</option>
                        <option value="पुत्र" ${member.relation === 'पुत्र' ? 'selected' : ''}>पुत्र</option>
                        <option value="पुत्री" ${member.relation === 'पुत्री' ? 'selected' : ''}>पुत्री</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${member.id}-qualification">शिक्षा</label>
                    <select class="form-control" id="child${member.id}-qualification">
                        <option value="" disabled>शिक्षा चुने</option>
                        <option value="प्राथमिक" ${member.qualification === 'प्राथमिक' ? 'selected' : ''}>प्राथमिक</option>
                        <option value="माध्यमिक" ${member.qualification === 'माध्यमिक' ? 'selected' : ''}>माध्यमिक</option>
                        <option value="उच्च माध्यमिक" ${member.qualification === 'उच्च माध्यमिक' ? 'selected' : ''}>उच्च माध्यमिक</option>
                        <option value="स्नातक" ${member.qualification === 'स्नातक' ? 'selected' : ''}>स्नातक</option>
                        <option value="स्नातकोत्तर" ${member.qualification === 'स्नातकोत्तर' ? 'selected' : ''}>स्नातकोत्तर</option>
                        <option value="बैचलर ऑफ आर्ट्स (बी.ए.)" ${member.qualification === 'बैचलर ऑफ आर्ट्स (बी.ए.)' ? 'selected' : ''}>बैचलर ऑफ आर्ट्स (बी.ए.)</option>
                        <option value="बैचलर ऑफ साइंस (बी.एस्स.)" ${member.qualification === 'बैचलर ऑफ साइंस (बी.एस्स.)' ? 'selected' : ''}>बैचलर ऑफ साइंस (बी.एस्स.)</option>
                        <option value="बैचलर ऑफ कॉमर्स (बी.कॉम.)" ${member.qualification === 'बैचलर ऑफ कॉमर्स (बी.कॉम.)' ? 'selected' : ''}>बैचलर ऑफ कॉमर्स (बी.कॉम.)</option>
                        <option value="बैचलर ऑफ इंजीनियरिंग (बी.ई.)" ${member.qualification === 'बैचलर ऑफ इंजीनियरिंग (बी.ई.)' ? 'selected' : ''}>बैचलर ऑफ इंजीनियरिंग (बी.ई.)</option>
                        <option value="बैचलर ऑफ टेक्नोलॉजी (बी.टेक.)" ${member.qualification === 'बैचलर ऑफ टेक्नोलॉजी (बी.टेक.)' ? 'selected' : ''}>बैचलर ऑफ टेक्नोलॉजी (बी.टेक.)</option>
                        <option value="बैचलर ऑफ मेडिसिन, बैचलर ऑफ सर्जरी (एमबीबीएस)" ${member.qualification === 'बैचलर ऑफ मेडिसिन, बैचलर ऑफ सर्जरी (एमबीबीएस)' ? 'selected' : ''}>बैचलर ऑफ मेडिसिन, बैचलर ऑफ सर्जरी (एमबीबीएस)</option>
                        <option value="बैचलर ऑफ डेंटल सर्जरी (बी.डी.एस.)" ${member.qualification === 'बैचलर ऑफ डेंटल सर्जरी (बी.डी.एस.)' ? 'selected' : ''}>बैचलर ऑफ डेंटल सर्जरी (बी.डी.एस.)</option>
                        <option value="बैचलर ऑफ फार्मेसी (बी.फार्म.)" ${member.qualification === 'बैचलर ऑफ फार्मेसी (बी.फार्म.)' ? 'selected' : ''}>बैचलर ऑफ फार्मेसी (बी.फार्म.)</option>
                        <option value="बैचलर ऑफ आर्किटेक्चर (बी.आर्क.)" ${member.qualification === 'बैचलर ऑफ आर्किटेक्चर (बी.आर्क.)' ? 'selected' : ''}>बैचलर ऑफ आर्किटेक्चर (बी.आर्क.)</option>
                        <option value="बैचलर ऑफ बिजनेस एडमिनिस्ट्रेशन (बीबीए)" ${member.qualification === 'बैचलर ऑफ बिजनेस एडमिनिस्ट्रेशन (बीबीए)' ? 'selected' : ''}>बैचलर ऑफ बिजनेस एडमिनिस्ट्रेशन (बीबीए)</option>
                        <option value="बैचलर ऑफ कंप्यूटर एप्लीकेशन्स (बी.सी.ए)" ${member.qualification === 'बैचलर ऑफ कंप्यूटर एप्लीकेशन्स (बी.सी.ए)' ? 'selected' : ''}>बैचलर ऑफ कंप्यूटर एप्लीकेशन्स (बी.सी.ए)</option>
                        <option value="बैचलर ऑफ लॉ (बीएलबी))" ${member.qualification === 'बैचलर ऑफ लॉ (बीएलबी)' ? 'selected' : ''}>बैचलर ऑफ लॉ (बीएलबी)</option>
                        <option value="बैचलर ऑफ एजुकेशन (बी.एड.)" ${member.qualification === 'बैचलर ऑफ एजुकेशन (बी.एड.)' ? 'selected' : ''}>बैचलर ऑफ एजुकेशन (बी.एड.)</option>
                        <option value="बैचलर ऑफ फाइन आर्ट्स (बीएफए)" ${member.qualification === 'बैचलर ऑफ फाइन आर्ट्स (बीएफए)' ? 'selected' : ''}>बैचलर ऑफ फाइन आर्ट्स (बीएफए)</option>
                        <option value="बैचलर ऑफ सोशल वर्क (बीएसडब्ल्यू)" ${member.qualification === 'बैचलर ऑफ सोशल वर्क (बीएसडब्ल्यू)' ? 'selected' : ''}>बैचलर ऑफ सोशल वर्क (बीएसडब्ल्यू)</option>
                        <option value="बैचलर ऑफ होटल मैनेजमेंट (बीएचएम)" ${member.qualification === 'बैचलर ऑफ होटल मैनेजमेंट (बीएचएम)' ? 'selected' : ''}>बैचलर ऑफ होटल मैनेजमेंट (बीएचएम)</option>
                        <option value="बैचलर ऑफ फिजियोथेरेपी (बीपीटी)" ${member.qualification === 'बैचलर ऑफ फिजियोथेरेपी (बीपीटी)' ? 'selected' : ''}>बैचलर ऑफ फिजियोथेरेपी (बीपीटी)</option>
                        <option value="बैचलर ऑफ वेटरिनरी साइंस (बीवीएससी)" ${member.qualification === 'बैचलर ऑफ वेटरिनरी साइंस (बीवीएससी)' ? 'selected' : ''}>बैचलर ऑफ वेटरिनरी साइंस (बीवीएससी)</option>
                        <option value="बैचलर ऑफ डिजाइन (बी.डेस)" ${member.qualification === 'बैचलर ऑफ डिजाइन (बी.डेस)' ? 'selected' : ''}>बैचलर ऑफ डिजाइन (बी.डेस)</option>
                        <option value="मास्टर ऑफ आर्ट्स (एम.ए.)" ${member.qualification === 'मास्टर ऑफ आर्ट्स (एम.ए.)' ? 'selected' : ''}>मास्टर ऑफ आर्ट्स (एम.ए.)</option>
                        <option value="मास्टर ऑफ साइंस (एम.एससी.)" ${member.qualification === 'मास्टर ऑफ साइंस (एम.एससी.)' ? 'selected' : ''}>मास्टर ऑफ साइंस (एम.एससी.)</option>
                        <option value="मास्टर ऑफ कॉमर्स (एम.कॉम.)" ${member.qualification === 'मास्टर ऑफ कॉमर्स (एम.कॉम.)' ? 'selected' : ''}>मास्टर ऑफ कॉमर्स (एम.कॉम.)</option>
                        <option value="मास्टर ऑफ इंजीनियरिंग (एम.ई.)" ${member.qualification === 'मास्टर ऑफ इंजीनियरिंग (एम.ई.)' ? 'selected' : ''}>मास्टर ऑफ इंजीनियरिंग (एम.ई.)</option>
                        <option value="मास्टर ऑफ टेक्नोलॉजी (एम.टेक.)" ${member.qualification === 'मास्टर ऑफ टेक्नोलॉजी (एम.टेक.)' ? 'selected' : ''}>मास्टर ऑफ टेक्नोलॉजी (एम.टेक.)</option>
                        <option value="मास्टर ऑफ बिजनेस एडमिनिस्ट्रेशन (एमबीए)" ${member.qualification === 'मास्टर ऑफ बिजनेस एडमिनिस्ट्रेशन (एमबीए)' ? 'selected' : ''}>मास्टर ऑफ बिजनेस एडमिनिस्ट्रेशन (एमबीए)</option>
                        <option value="मास्टर ऑफ कंप्यूटर एप्लीकेशन्स (एमसीए)" ${member.qualification === 'मास्टर ऑफ कंप्यूटर एप्लीकेशन्स (एमसीए)' ? 'selected' : ''}>मास्टर ऑफ कंप्यूटर एप्लीकेशन्स (एमसीए)</option>
                        <option value="मास्टर ऑफ लॉ (एलएलएम)" ${member.qualification === 'मास्टर ऑफ लॉ (एलएलएम)' ? 'selected' : ''}>मास्टर ऑफ लॉ (एलएलएम)</option>
                        <option value="मास्टर ऑफ एजुकेशन (एम.एड.)" ${member.qualification === 'मास्टर ऑफ एजुकेशन (एम.एड.)' ? 'selected' : ''}>मास्टर ऑफ एजुकेशन (एम.एड.)</option>
                        <option value="मास्टर ऑफ फाइन आर्ट्स (एमएफए)" ${member.qualification === 'मास्टर ऑफ फाइन आर्ट्स (एमएफए)' ? 'selected' : ''}>मास्टर ऑफ फाइन आर्ट्स (एमएफए)</option>
                        <option value="मास्टर ऑफ सोशल वर्क (एमएसडब्ल्यू)" ${member.qualification === 'मास्टर ऑफ सोशल वर्क (एमएसडब्ल्यू)' ? 'selected' : ''}>मास्टर ऑफ सोशल वर्क (एमएसडब्ल्यू)</option>
                        <option value="मास्टर ऑफ हॉस्पिटल एडमिनिस्ट्रेशन (एमएचए)" ${member.qualification === 'मास्टर ऑफ हॉस्पिटल एडमिनिस्ट्रेशन (एमएचए)' ? 'selected' : ''}>मास्टर ऑफ हॉस्पिटल एडमिनिस्ट्रेशन (एमएचए)</option>
                        <option value="मास्टर ऑफ पब्लिक हेल्थ (एमपीएच)" ${member.qualification === 'मास्टर ऑफ पब्लिक हेल्थ (एमपीएच)' ? 'selected' : ''}>मास्टर ऑफ पब्लिक हेल्थ (एमपीएच)</option>
                        <option value="मास्टर ऑफ फार्मेसी (एम.फार्म.)" ${member.qualification === 'मास्टर ऑफ फार्मेसी (एम.फार्म.)' ? 'selected' : ''}>मास्टर ऑफ फार्मेसी (एम.फार्म.)</option>
                        <option value="मास्टर ऑफ डिजाइन (एम.डेस)" ${member.qualification === 'मास्टर ऑफ डिजाइन (एम.डेस)' ? 'selected' : ''}>मास्टर ऑफ डिजाइन (एम.डेस)</option>
                        <option value="मास्टर ऑफ वेटरिनरी साइंस (एमवीएससी)" ${member.qualification === 'मास्टर ऑफ वेटरिनरी साइंस (एमवीएससी)' ? 'selected' : ''}>मास्टर ऑफ वेटरिनरी साइंस (एमवीएससी)</option>
                        <option value="मास्टर ऑफ फिजियोथेरेपी (एमपीटी)" ${member.qualification === 'मास्टर ऑफ फिजियोथेरेपी (एमपीटी)' ? 'selected' : ''}>मास्टर ऑफ फिजियोथेरेपी (एमपीटी)</option>
                        <option value="डॉक्टर ऑफ फिलॉसफी (पीएच.डी.)" ${member.qualification === 'डॉक्टर ऑफ फिलॉसफी (पीएच.डी.)' ? 'selected' : ''}>डॉक्टर ऑफ फिलॉसफी (पीएच.डी.)</option>
                        <option value="डॉक्टर ऑफ मेडिसिन (एमडी)" ${member.qualification === 'डॉक्टर ऑफ मेडिसिन (एमडी)' ? 'selected' : ''}>डॉक्टर ऑफ मेडिसिन (एमडी)</option>
                        <option value="डॉक्टर ऑफ डेंटल सर्जरी (डीडीएस)" ${member.qualification === 'डॉक्टर ऑफ डेंटल सर्जरी (डीडीएस)' ? 'selected' : ''}>डॉक्टर ऑफ डेंटल सर्जरी (डीडीएस)</option>
                        <option value="डॉक्टर ऑफ वेटरिनरी मेडिसिन (डीवीएम)" ${member.qualification === 'डॉक्टर ऑफ वेटरिनरी मेडिसिन (डीवीएम)' ? 'selected' : ''}>डॉक्टर ऑफ वेटरिनरी मेडिसिन (डीवीएम)</option>
                        <option value="डिप्लोमा इन इंजीनियरिंग" ${member.qualification === 'डिप्लोमा इन इंजीनियरिंग' ? 'selected' : ''}>डिप्लोमा इन इंजीनियरिंग</option>
                        <option value="डिप्लोमा इन फार्मेसी" ${member.qualification === 'डिप्लोमा इन फार्मेसी' ? 'selected' : ''}>डिप्लोमा इन फार्मेसी</option>
                        <option value="डिप्लोमा इन एजुकेशन (डी.एड.)" ${member.qualification === 'डिप्लोमा इन एजुकेशन (डी.एड.)' ? 'selected' : ''}>डिप्लोमा इन एजुकेशन (डी.एड.)</option>
                        <option value="पोस्टग्रेजुएट डिप्लोमा इन मैनेजमेंट (पीजीडीएम)" ${member.qualification === 'पोस्टग्रेजुएट डिप्लोमा इन मैनेजमेंट (पीजीडीएम)' ? 'selected' : ''}>पोस्टग्रेजुएट डिप्लोमा इन मैनेजमेंट (पीजीडीएम)</option>
                        <option value="सर्टिफिकेट इन डिजिटल मार्केटिंग" ${member.qualification === 'सर्टिफिकेट इन डिजिटल मार्केटिंग' ? 'selected' : ''}>सर्टिफिकेट इन डिजिटल मार्केटिंग</option>
                        <option value="सर्टिफिकेट इन डेटा साइंस" ${member.qualification === 'सर्टिफिकेट इन डेटा साइंस' ? 'selected' : ''}>सर्टिफिकेट इन डेटा साइंस</option>
                        <option value="सर्टिफिकेट इन ग्राफिक डिजाइन" ${member.qualification === 'सर्टिफिकेट इन ग्राफिक डिजाइन' ? 'selected' : ''}>सर्टिफिकेट इन ग्राफिक डिजाइन</option>
                        <option value="अन्य" ${member.qualification === 'अन्य' ? 'selected' : ''}>अन्य</option>

                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 other-qualification-group" style="display: none;"> 
                <div class="form-group">
                    <label for="childother${member.id}-qualification">अन्य शिक्षा</label>
                    <input type="text" class="form-control other-qualification" id="childother${member.id}-qualification" placeholder="शिक्षा का चयन करें" value="${member.other_qualification}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${member.id}-marriage-stage">विवाह चरण</label>
                    <select class="form-control" id="child${member.id}-marriage-stage">
                        <option value="" disabled>विवाह चरण चुने</option>
                        <option value="अविवाहित" ${member.marriage_stage === 'अविवाहित' ? 'selected' : ''}>अविवाहित</option>
                        <option value="टीका" ${member.marriage_stage === 'टीका' ? 'selected' : ''}>टीका</option>
                        <option value="सागाई" ${member.marriage_stage === 'सागाई' ? 'selected' : ''}>सागाई</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${member.id}-blood-group">ब्लड ग्रुप</label>
                   <select class="form-control" id="child${member.id}-blood-group">
                        <option value="" disabled>ब्लड ग्रुप चुने</option>
                        <option value="ए+" ${member.blood_group === 'ए+' ? 'selected' : ''}>ए+</option>
                        <option value="ए-" ${member.blood_group === 'ए-' ? 'selected' : ''}>ए-</option>
                        <option value="बी+" ${member.blood_group === 'बी+' ? 'selected' : ''}>बी+</option>
                        <option value="बी-" ${member.blood_group === 'बी-' ? 'selected' : ''}>बी-</option>
                        <option value="एबी+" ${member.blood_group === 'एबी+' ? 'selected' : ''}>एबी+</option>
                        <option value="एबी-" ${member.blood_group === 'एबी-' ? 'selected' : ''}>एबी-</option>
                        <option value="ओ+" ${member.blood_group === 'ओ+' ? 'selected' : ''}>ओ+</option>
                        <option value="ओ-" ${member.blood_group === 'ओ-' ? 'selected' : ''}>ओ-</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="child${member.id}-occupation">कार्य</label>
                     <select class="form-control" id="child${member.id}-occupation">
                        <option value="" disabled>चुने कार्य</option>
                        <option value="कृषि" ${member.occupation === 'कृषि' ? 'selected' : ''}>कृषि</option>
                        <option value="व्यवसाय" ${member.occupation === 'व्यवसाय' ? 'selected' : ''}>व्यवसाय</option>
                        <option value="फेरी" ${member.occupation === 'फेरी' ? 'selected' : ''}>फेरी</option>
                        <option value="श्रमिक" ${member.occupation === 'श्रमिक' ? 'selected' : ''}>श्रमिक</option>
                        <option value="पेंशन" ${member.occupation === 'पेंशन' ? 'selected' : ''}>पेंशन</option>
                        <option value="शासकीया नौकरी" ${member.occupation === 'शासकीया नौकरी' ? 'selected' : ''}>शासकीया नौकरी</option>
                        <option value="प्राइवेट नौकरी" ${member.occupation === 'प्राइवेट नौकरी' ? 'selected' : ''}>प्राइवेट नौकरी</option>
                        <option value="विद्यार्थी" ${member.occupation === 'विद्यार्थी' ? 'selected' : ''}>विद्यार्थी</option>
                        <option value="अन्य" ${member.occupation === 'अन्य' ? 'selected' : ''}>अन्य</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 other-occupation-group" style="display: none;"> 
                <div class="form-group">
                    <label for="childother${member.id}-occupation">अन्य कार्य</label>
                    <input type="text" class="form-control other-occupation" id="childother${member.id}-occupation" placeholder="अपनी कार्य दर्ज करें"value="${member.occupation_type}">
                </div>
            </div>
           <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <label for="">जाति प्रमाण पत्</label>
                <div class="input-group role-group mt-1">
                    <div class="form-check">
                        <input type="radio" id="Yes${member.id}" name="role${member.id}" value="1" class="form-check-input" ${member.cast_certificate === 'Yes' ? 'checked' : ''}>
                        <label for="Yes${member.id}" class="form-check-label">हाँ</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" id="No${member.id}" name="role${member.id}" value="0" class="form-check-input" ${member.cast_certificate === 'No' ? 'checked' : ''}>
                        <label for="No${member.id}" class="form-check-label">नहीं</label>
                    </div>
                </div>
            </div>
           <div class="col-12 col-lg-4 col-md-4 col-sm-4">
            <div class="upload__box">
                <div class="upload__btn-box">
                    <label>
                        <p class="upload__btn bg-info w-25">तश्वीरें अपलोड करो</p>
                        <input type="file" multiple data-max_length="3" class="uploadProfileInput upload__inputfile" id="child${member.id}-file" name="_file" onchange="handleImageUpload(event, ${member.id})">
                    </label>
                </div>
                <div class="col-sm-12">
                    <div class="upload__img-wrap" id="child${member.id}-image" style="display:flex; flex-wrap:wrap;">
                        <!-- Images will be dynamically added here -->
                    </div>
                </div>
            </div>
        </div>
        </div>
         <div class="mt-2 text-end">
            <button type="button" class="btn btn-success  child-update-btn" data-child-id="${member.id}" onclick="update(event)">सुधार</button>
        </div>
    `;
    $('#children-entries').append(childEntry);
    ImgUpload(); 
    $(`#child${member.id}-image`).empty();
        if (member.self_image) {
            var imageUrl = 'http://192.168.1.10:8000/uploads/family_member_image/' + member.self_image.trim();
            console.log(imageUrl,'rsdtrytuyiuoi');
            var newCard = `
                <div class="col-12 col-md-4 col-lg-4 position-relative" style="left:-10px;">
                    <div class="upload__img-close_button" onclick="removeImage(this);"></div>
                    <div class="brand-main d-flex box-shadow text-center ">
                        <a class="weblink text-decoration-none text-dark" title="Image" style="display: flex; align-items: center; justify-content: center; height: 100%; width: 100%;">
                            <img class="img-fluid" src="${imageUrl}" alt="Image" style="max-height: 100%; max-width: 100%;">
                        </a>
                    </div>
                </div>
            `;
            $(`#child${member.id}-image`).append(newCard);
        }
                       
                           
}

function populateInitialMarriedChild(marriedChild) {
    $('#married_child1-name').val(marriedChild.name);
    // $('#married-child-number-id').val(marriedChild.id_number);
    $('#married-child-family-id').val(marriedChild.family_id);
    // Populate additional fields for initial married child as needed
}

function addNewMarriedChild(marriedChild) {
    const marriedChildEntry = document.createElement('div');
    marriedChildEntry.className = 'married-child-entry mb-3';
    marriedChildEntry.id = `married_child-${marriedChild.id}`; // Assuming marriedChild.id can uniquely identify each married child

    const id = marriedChild.id || '';
    const familyId = marriedChild.family_id || '';
    const familyMemberId = marriedChild.family_member_id || '';
    const name = marriedChild.name || '';
    const address = marriedChild.married_child_address || '';
    const marriedChildId = marriedChild.married_child_id || '';
    const selfImage = marriedChild.self_image ? marriedChild.self_image.trim() : '';

    marriedChildEntry.innerHTML = `
        <h5>Married Child ${name}</h5>
        <div class="row">
            <div class="col-12 col-lg-4 col-md-4 col-sm-4" hidden>
                <div class="form-group">
                    <label for="child${id}-family-id">Married Child ID</label>
                    <input type="text" class="form-control" id="child${id}-family-id" value="${id}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4" hidden>
                <div class="form-group">
                    <label for="child${id}-family-id">Family ID</label>
                    <input type="text" class="form-control" id="married_child${id}-family-id" value="${familyId}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4" hidden>
                <div class="form-group">
                    <label for="child${id}-family-member-id">Family Member ID</label>
                    <select class="form-control" id="child${id}-family-member-id">
                        <option selected disabled value>Select Marital Status</option>
                        <option value="1" ${familyMemberId === 1 ? 'selected' : ''} disabled>1-Male Chief</option>
                        <option value="2" ${familyMemberId === 2 ? 'selected' : ''} disabled>2-Female Chief</option>
                        <option value="3" ${familyMemberId === 3 ? 'selected' : ''} disabled>3-Unmarried Children</option>
                        <option value="4" ${familyMemberId === 4 ? 'selected' : ''}>4-Married Children</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="married_child${id}-name">नाम</label>
                    <input type="text" class="form-control" id="married_child${id}-name" value="${name}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="married_child${id}-address">निवासी</label>
                    <input type="text" class="form-control" id="married_child${id}-address" value="${address}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="married_child${id}-number-id">आईडी नंबर</label>
                    <input type="text" class="form-control" id="married_child${id}-number-id" value="${marriedChildId}">
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                <div class="upload__box">
                    <div class="upload__btn-box">
                        <label>
                            <p class="upload__btn bg-info w-25">तश्वीरें अपलोड करो</p>
                            <input type="file" multiple data-max_length="1" class="upload__inputfile" id="married_child${id}-file" name="_file" onchange="handleImageUpload(event, ${id})">
                        </label>
                    </div>
                    <div class="col-sm-12">
                        <div class="upload__img-wrap" id="marriedchild${id}" style="display:flex; flex-wrap:wrap;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-2 text-end">
            <button type="button" class="btn btn-success child-update-btn" data-married-child-id="${id}" onclick="marriedupdate(event)">सुधार</button>
        </div>
    `;

    document.getElementById('married_children-entries').appendChild(marriedChildEntry);
    ImgUpload(); 

    const marriedChildImageContainer = document.getElementById(`marriedchild${id}`);
    marriedChildImageContainer.innerHTML = '';

    if (selfImage) {
        const imageUrl = `http://192.168.1.10:8000/uploads/family_member_image/${selfImage}`;
        const newCard = `
            <div class="col-12 col-md-4 col-lg-4 position-relative" style="left:-10px;">
                <div class="upload__img-close_button" onclick="removeImage(this);"></div>
                <div class="brand-main d-flex box-shadow text-center">
                    <a class="weblink text-decoration-none text-dark" title="Image" style="display: flex; align-items: center; justify-content: center; height: 100%; width: 100%;">
                        <img class="img-fluid" src="${imageUrl}" alt="Image" style="max-height: 100%; max-width: 100%;">
                    </a>
                </div>
            </div>
        `;
        marriedChildImageContainer.innerHTML = newCard;
    }
}

getFamilyDetail();

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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



