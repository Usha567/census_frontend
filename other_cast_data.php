<?php
    include 'includes/headertag.php';
    include 'includes/headerjs.php';
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search and View Detailed Family Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="http://localhost:8080\census_project\cssfile\detailpage.css">
    <script src="http://localhost:8080/census_project\jsfile\other_cast_data.js"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>
<!-- <style>#google_translate_element,.skiptranslate{display:none;}body{top:0!important;}</style> -->
<style>

.goog-te-banner-frame.skiptranslate, .goog-te-gadget-icon {
      display: none !important;
    }
    .VIpgJd-ZVi9od-ORHb {
  display: none !important;
}
.container__menu {
    font-size: 1.2rem;
    animation: fold 1s linear 0s 1;
}

.container__menu a {
    text-decoration: none;
    color: #000;
    padding: 1rem;
    border: 1px solid #000;
    border-radius: 8px;
    text-shadow: 0 0 1px #000;
    animation: fold 1s linear 0s 1;
}

.menubtn {
    display: none;
    color: #000;
    padding: 0.5rem;
    border: 1px solid #000;
    border-radius: 8px;
    font-size: 1.6rem;
}

.closebtn {
    display: none;
    color: #000;
    padding: 0.5rem;
    border: 1px solid #000;
    border-radius: 8px;
    font-size: 1.6rem;
}

.container__menu a::selection {
    color: red;
}

@keyframes fold {
    from {
        transform: skew(10deg);
        color: green;
        background-color: #000;
    }

    to {
        transform: skew(160deg);
    }
}

@media (max-width: 618px) {
    .container__menu {
        display: none;
    }

    .menubtn {
        display: block;
    }
}
@media (min-width: 620px) {

    .menubtn {
        display: none;
    }
}
 /* Dropdown container */
 .language-dropdown{
    margin: 1px;
    padding: 1px;
    border:none;
 }
  .button-group button {
    margin: 0 5px;
    padding: 6px 20px;
    border: none;
    color: #fff;
    border-radius: 4px;
}

.search-box {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }
        .search-box label {
            margin-bottom: 5px;
        }
        .search-input-field {
            width: 100%;
            padding: 2px;
            box-sizing: border-box;
        }
        .search-box input {
            margin-bottom: -10px;
        }
        .seachbox{
            margin:52px;
            padding: 5px;
        }
        #OtherState {
    width: 100%; /* Makes the dropdown match the width of its container */
}
.total-box {
            position: relative;
        }

        .total-input-field {
            -webkit-appearance: none; /* Safari and Chrome */
            -moz-appearance: none; /* Firefox */
            appearance: none; /* Standard */
            border: none;
            background: none;
            font-size: 16px;
            color: black;
            padding-right: 20px; /* Add some padding to the right for the arrow */
        }

        .total-input-field:focus {
            outline: none; /* Remove focus outline */
        }

        .total-input-field::placeholder {
            color: black; /* Placeholder text color */
        }

        /* Add a custom arrow using CSS */
        .total-box::after {
            content: '';
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            width: 0;
            height: 0;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-top: 6px solid black;
            pointer-events: none;
        }
</style>
<body>
<header class="header">
    <nav>
        <div class="logo ">
            <h6 class="fw-bold text-white">"छीपा समाज शिक्षा और कैरियर" ग्रुप</h6>
            <h6 class="fw-bold text-white">छीपा (क्षत्रिय) समाज की जनगणना, वर्ष - 2024</h6>
            <h6 class="fw-bold text-white">(परिवार परिचय - पत्र)</h6>
        </div>
        <div id="google_translate_element" class="mt-3"></div>
    </nav>
    <div class="bg-white p-3 ">
        <h6 class="text-center">छीपा समाज शिक्षा और कैरियर" ग्रुप आपका हार्दिक स्वागत करता है |</h6>
    </div>
</header>


    <div class="container mt-4"></div>
  
    <!-- Search Form -->
    <div class="container-fluid pb-5">
        <div class="filter-card shadow mt-5">
            <div class="card bg-light">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4"></div>
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                            <h3>विस्तृत पारिवारिक जानकारी</h3>
                        </div>
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                            <div class="total-box w-75 text-end">
                                <!-- <label for="totalcensusdata" class="text-black fs-6" data-key="total_label">Total Census Data</label> -->
                                <div id="totalcensusdata" class="d-flex align-items-start flex-column w-100">
                                <select id="total_census_data" class="form-select">
                                    <!-- Options will be populated here -->
                                </select>
                                </div>
                            </div>
                        </div>
                     </div>
                    <!-- <h3 class="text-center  fw-blod main-heading" data-key="detailed_family_information">Detailed Family Information</h3> -->
                    <div class="seachbox ">
                        <div class="row ">
                            <div class="col-12 col-lg-2 col-md-2 col-sm-6">
                                <div class="search-box">
                                    <label for="Name" class="text-black fs-6" data-key="search_label">नाम:</label>
                                    <input type="text" id="customerName" class="control-form search-input-field" placeholder="सर्च नाम">
                                </div>
                            </div>
                            <div class="col-12 col-lg-2 col-md-2 col-sm-6">
                                <div class="search-box">
                                    <label for="number" class="text-black fs-6" data-key="search_label">मोबाइल नंबर:</label>
                                    <input type="text" id="number" class="control-form search-input-field" placeholder="सर्च मोबाइल नंबर">
                                </div>
                            </div>
                            <div class="col-12 col-lg-2 col-md-2 col-sm-6">
                                <div class="search-box">
                                    <label for="Age" class="text-black fs-6" data-key="search_label">आयु सीमा:</label>
                                    <div class="d-flex align-items-center">
                                        <input type="text" id="minAge" class="control-form search-input-field me-1" placeholder="न्यूनतम आयु">
                                        <span class="mx-1">-</span>
                                        <input type="text" id="maxAge" class="control-form search-input-field" placeholder="अधिकतम आयु">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                <div class="search-box">
                                    <label for="State" class="text-black fs-6" data-key="search_label">अन्य राज्य:</label>
                                    <div id="stateContainer" class="d-flex align-items-start flex-column">
                                        <select id="State" class="control-form search-input-field pb-2">
                                            <option value="">अन्य राज्य चुने</option>
                                            <!-- Options will be dynamically added here -->
                                        </select>
                                        <div id="otherStateInput" style="display: none; margin-top: 10px;">
                                            <label for="OtherState" class="text-black fs-6" data-key="search_label">अन्य राज्य:</label>
                                            <select id="OtherState" class="control-form search-input-field pb-2 text-black">
                                                <option value="">अन्य राज्य </option>
                                                <!-- Options will be dynamically added here -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                <div class="search-box">
                                    <label for="District" class="text-black fs-6" data-key="search_label">अन्य ज़िला:</label>
                                    <div id="districtContainer" class="d-flex align-items-start flex-column">
                                        <select id="District" class="control-form search-input-field pb-2">
                                            <option value="">अन्य ज़िला चुने</option>
                                        </select>
                                        <div id="otherDistrictInput" style="display: none; margin-top: 10px;">
                                            <label for="OtherDistrict" class="text-black fs-6" data-key="search_label">अन्य ज़िला:</label>
                                            <select id="OtherDistrict" class="control-form search-input-field pb-2">
                                                <option value="">अन्य ज़िला</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12 col-lg-2 col-md-2 col-sm-6">
                                <div class="search-box">
                                    <label for="Status" class="text-black fs-6" data-key="search_label">वैवाहिक स्थिति:</label>
                                            <select class="form-control" id="Status">
                                                <option selected disabled value>वैवाहिक स्थिति चुने</option>
                                                <option>सामान्य</option>
                                                <option>विदुर</option>
                                                <option>तलाकशुदा</option>
                                                <option>परित्याग</option>
                                                <option>छोड़ छुट्टी</option>
                                            </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-2 col-md-2 col-sm-6">
                                <div class="search-box">
                                    <label for="Married" class="text-black fs-6" data-key="search_label">विवाह:</label>
                                    <select class="form-control" id="Married">
                                        <option selected disabled value>विवाह चुने</option>
                                        <option value="हाँ">हाँ</option>
                                        <option value="नहीं">नहीं</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-2 col-md-2 col-sm-6">
                                <div class="search-box">
                                    <label for="child-type" class="text-black fs-6" data-key="search_label">बच्चे का प्रकार:</label>
                                    <select class="form-control" id="child_type">
                                        <option selected disabled value>बच्चे का प्रकार चुने</option>
                                        <option value="पुत्र">पुत्र</option>
                                        <option vaule="पुत्री">पुत्री</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                <div class="search-box">
                                    <label for="Qualification" class="text-black fs-6" data-key="search_label">शिक्षा:</label>
                                    <select class="form-control husband-qualification" id="Qualification">
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
                            <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                <div class="search-box">
                                    <label for="Occupation" class="text-black fs-6" data-key="search_label">कार्य:</label>
                                    <!-- <input type="text" id="Occupation" class="control-form search-input-field" placeholder="Search Occupation"> -->
                                    <select class="form-control occupation-select" id="Occupation">
                                        <option selected disabled value>चुने कार्य</option>
                                        <option value="कृषि">कृषि</option>
                                        <option value="व्यवसाय">व्यवसाय</option>
                                        <option value="फेरी">फेरी</option>
                                        <option value="श्रमिक">श्रमिक</option>
                                        <option value="पेंशन">पेंशन</option>
                                        <option value="शासकीया नौकरी">शासकीया नौकरी</option>
                                        <option value="प्राइवेट नौकरी">प्राइवेट नौकरी</option>
                                        <option value="सेवानिवृत">सेवानिवृत</option>
                                        <option value="गृहिणी">गृहिणी</option>
                                        <option value="विद्यार्थी">विद्यार्थी</option>
                                        <option value="अन्य">अन्य</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12  text-center">
                                <div class="button-group mt-2">
                                    <button class="bg-info mt-1" data-key="search_button" id="search">सर्च</button>
                                    <button class="bg-info mt-1" data-key="reset_button" onclick="resetdata()">रीसेट</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive mt-4">
                        <table id="example" class="table table-striped bg-info table-hover table-bordered dataTable no-footer" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-white" data-key="name">नाम</th>
                                    <th class="text-white" data-key="father_name">पिता का नाम</th>
                                    <th class="text-white" data-key="mobile">मोबाइल नंबर</th>
                                    <th class="text-white" data-key="age">आयु</th>
                                    <th class="text-white" data-key="age">मूल निवासी</th>
                                    <th class="text-white" data-key="qualification">शिक्षा</th>
                                    <th class="text-white" data-key="marital_status">वैवाहिक स्थिति	</th>
                                    <th class="text-white" data-key="occupation">कार्य</th>
                                
                                </tr>
                            </thead>
                            <tbody id="data-table" class="bg-white"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
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