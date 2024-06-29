<?php
    include 'includes/headertag.php'; 
    include 'includes/headerjs.php'; 

    $family_Id = $_REQUEST['id']; 


?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Census Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost:8080\census_project\cssfile\familydetails.css">
    <link rel="stylesheet" href="http://localhost:8080\census_project\cssfile\header.css">
    <script src="http://localhost:8080/census_project\jsfile\add_familyDetails.js"></script> 
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script> -->
    
 
</head>
<style>
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
    .VIpgJd-ZVi9od-ORHb {
  display: none !important;
}
</style>
<body>
<header class="header">
    <nav>
      
        <div class="logo notranslate">
            <h6 class="fw-bold text-white">"छीपा समाज शिक्षा और कैरियर" ग्रुप</h6>
            <h6 class="fw-bold text-white">छीपा (क्षत्रिय) समाज की जनगणना, वर्ष - 2024</h6>
            <h6 class="fw-bold text-white">(परिवार परिचय - पत्र)</h6>
        </div>
        <div id="google_translate_element" class="mt-3" ></div>
    </nav>
</header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-light w-100">
                 <h4 class="mb-4 text-center mt-2 align-items-center">परिवार जनगणना फॉर्म</h4>
            </div>
        </div>
    </div>
    <div class="container pb-5">
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
                                        <button type="button" class="btn btn-success" id="malechief_submit">जमा करना</button>
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
                                        <button type="button" class="btn btn-success" id="femalechief_submit" >जमा करना</button>
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
                                    <div class="child-entry mb-3" id="child-1">
                                        <h5 class="">क्रमांक 1</h5>
                                        <div class="row">
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4" hidden>
                                                <div class="form-group">
                                                    <label for="husband-id">ID Number</label>
                                                    <input type="text" class="form-control" id="child-numner-id">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4" hidden>
                                                <div class="form-group">
                                                    <label for="husband-id">family_id</label>
                                                    <input type="text" class="form-control" id="child-family-id"value="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4" hidden>
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
                                                    <label for="child1-name">नाम</label>
                                                    <input type="text" class="form-control" id="child1-name">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="child1-age">आयु</label>
                                                    <input type="number" class="form-control" id="child1-age">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="child1-dob">जन्म की तारीख</label>
                                                    <input type="date" class="form-control" id="child1-dob">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="child1-mobile">मोबाइल नंबर</label>
                                                    <input type="tel" class="form-control" id="child1-mobile">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="child1-relation">परिवार के मुखिया के साथ संबंध</label>
                                                    <select class="form-control" id="child1-relation">
                                                        <option selected disabled value>संबंध चुने</option>
                                                        <option value="पुत्र">पुत्र</option>
                                                        <option value="पुत्री">पुत्री</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="husband-qualification">शिक्षा</label>
                                                    <select class="form-control husband-qualification" id="child-qualification">
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
                                                    <label for="other-qualification">अन्य शिक्षा</label>
                                                    <input type="text" class="form-control other-qualification" placeholder="शिक्षा का चयन करें" id="childother-qualification">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="child1-marriage-stage">विवाह चरण</label>
                                                    <select class="form-control" id="child1-marriage-stage">
                                                        <option selected disabled value>विवाह चरण चुने</option>
                                                        <option>अविवाहित</option>
                                                        <option>टीका</option>
                                                        <option>सागाई</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="child1-blood-group">ब्लड ग्रुप</label>
                                                    <select class="form-control" id="child1-blood-group">
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
                                                <label for="child-occupation">कार्य</label>
                                                <select class="form-control occupation-select" id="child-occupation">
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
                                                <label for="childother-occupation">अन्य कार्य</label>
                                                <input type="text" class="form-control other-occupation" id="childother-occupation-type"placeholder="अपनी कार्य दर्ज करें">
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
                                                        <input type="file" multiple="" data-max_length="1" class="upload__inputfile" id="child-file" name="_file">
                                                    </label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="upload__img-wrap" id="" style="display:flex; flex-wrap:wrap;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-info" onclick="addChild()">जोडे</button>
                                <!-- <button type="button" class="btn btn-danger" onclick="removeChild()">Remove</button> -->

                                    <div class="mt-2 text-end">
                                        <button type="button" class="btn btn-success" id="child_subm" onclick="store2(event)" >जमा करना</button>
                                    </div>
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
                                    <div class="Married_child-entry mb-3" id="married_child-1">
                                        <h5>क्रमांक 1</h5>
                                        <div class="row">
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4" >
                                            <div class="form-group">
                                                    <label for="married_child1-name">नाम</label>
                                                    <input type="text" class="form-control" id="married_child1-name">
                                                </div>
                                          
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4" >
                                            <div class="form-group">
                                                    <label for="married_child1-address">निवासी</label>
                                                    <input type="text" class="form-control" id="married_child1-address">
                                                </div>
                                          
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4" >
                                            <div class="form-group">
                                                    <label for="married-child-numner-id">आईडी नंबर</label>
                                                    <input type="text" class="form-control" id="married-child-numner-id">
                                                </div>
                                                <div class="form-group" hidden>
                                                    <label for="married-child-family-id">family_id</label>
                                                    <input type="text" class="form-control" id="married-child-family-id"value="">
                                                </div>
                                            </div>
                                          
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                                <div class="upload__box">
                                                    <div class="upload__btn-box">
                                                        <label>
                                                            <p class="upload__btn bg-info w-25 ">तश्वीरें अपलोड करो</p>
                                                            <input type="file" multiple="" data-max_length="1" class="upload__inputfile" id="child-marrid-file" name="_file">
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="upload__img-wrap" style="display:flex; flex-wrap:wrap;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 col-sm-4" hidden>
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
                                           
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-info" onclick="addMarriedChild()">जोडे</button>
                                <div class="mt-2 text-end">
                                    <button type="button" class="btn btn-success" onclick="store3(event)">जमा करना</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    <div class="mt-2 text-end pb-5">
        <button type="button" class="btn btn-info" id="backhome">पिछे जाये</button>
    </div>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("backhome").addEventListener("click", function() {
                if (confirm( "Are you sure you want to go back from this page? Once you go back, you will never get this page again and you won't be update the details.")) {
                    window.location.href = "census_data.php";
                }
            });
        });
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
                <h5>क्रमांक ${childCount}</h5>
                <div class="row">
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4" hidden>
                        <div class="form-group">
                            <label for="child${childCount}-numner-id">ID Number</label>
                            <input type="text" class="form-control" id="child${childCount}-numner-id" value="${firstChildIdNumber}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4" hidden>
                        <div class="form-group">
                            <label for="child${childCount}-family-id">Family ID</label>
                            <input type="text" class="form-control" id="child${childCount}-family-id" value="${firstChildFamilyId}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4" hidden>
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
                                <option>बी+</option>
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
                                <input type="radio" id="Yes" name="role${childCount}" value="हाँ" class="form-check-input">
                                <label for="Yes" class="form-check-label">हाँ</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="No" name="role${childCount}" value="नहीं" class="form-check-input">
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
                                <div class="upload__img-wrap" style="display:flex; flex-wrap:wrap;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            `;
            childrenEntries.insertBefore(newChildEntry, addChildButton); 
            ImgUpload(); 
            const qualificationSelect = newChildEntry.querySelector(`#child${childCount}-qualification`);
            qualificationSelect.addEventListener('change', function() {
                const otherQualificationGroup = newChildEntry.querySelector('.other-qualification-group');
                if (qualificationSelect.value === 'अन्य') {
                    otherQualificationGroup.style.display = 'block';
                } else {
                    otherQualificationGroup.style.display = 'none';
                }
            });
            // const occupationSelect = newChildEntry.querySelector(`#child${childCount}-occupation`);
            // const otherOccupationGroup = newChildEntry.querySelector('.other-occupation-group');

            // occupationSelect.addEventListener('change', function() {
            // otherOccupationGroup.style.display = 'block';
            // });

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
        <h5>क्रमांक ${newEntryIndex}</h5>
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
<script>
    function getInitialFamily() {
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
        success: function(data) {
            if (data.data && data.data.length > 0) {
                firstChildIdNumber = data.data[0].id;
                firstChildFamilyId = data.data[0].fk_family_id;

                // Populate initial fields
                document.getElementById('numner_id').value = firstChildIdNumber;
                document.getElementById('family_id').value = firstChildFamilyId;
                document.getElementById('female_numner_id').value = firstChildIdNumber;
                document.getElementById('female_family_id').value = firstChildFamilyId;
                document.getElementById('child-numner-id').value = firstChildIdNumber;
                document.getElementById('child-family-id').value = firstChildFamilyId
                document.getElementById('married-child-numner-id').value = firstChildIdNumber;
                document.getElementById('married-child-family-id').value = firstChildFamilyId

                // addChild();
           
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching data:', error);
        }
    });
}
getInitialFamily();
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- <script src="http://localhost:8080/census_project\jsfile\add_familyDetails.js"></script>  -->