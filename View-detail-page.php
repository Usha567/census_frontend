
<?php
    include 'includes/headertag.php'; 
    include 'includes/headerjs.php';
    // $family_Id = $_REQUEST['fk_family_id']; 
   ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost:8080\census_project\cssfile\detailpage.css">
    <link rel="stylesheet" href="http://localhost:8080\census_project\cssfile\header.css">
    <script src="http://localhost:8080/census_project\jsfile\view_detail_page.js"></script> 
 
    <style>
.goog-te-banner-frame.skiptranslate, .goog-te-gadget-icon {
      display: none !important;
    }
    
    .goog-te-gadget {
      color: transparent !important;
      margin:0px;
      padding:0px;
    }
 
    .goog-te-gadget select {
      display: inline-block !important;
      color: black !important;
    }

    /* Ensure the dropdown appears without extra elements */
    .goog-te-combo {
      border: 1px solid #ccc;
      padding: 5px;
      font-size: 14px;
    }
.table-responsive {
    overflow-x: auto;
}

/* Default style for table cells and headers */
.table-responsive td,
.table-responsive th {
    white-space: nowrap;
    vertical-align: middle;
    font-size: 14px; /* Default font size for larger screens */
}

/* Ensure images are fixed size */
.table-responsive .img-fixed-size {
    width: 150px; /* Fixed width for images */
    height: auto; /* Maintain aspect ratio */
    display: block;
    margin: auto; /* Center align images */
    object-fit: cover; /* Ensures the image covers the area */
}

/* Responsive adjustments for smaller screens */
@media (max-width: 767px) {
    .table-responsive td,
    .table-responsive th {
        font-size: 12px; /* Decrease font size for better readability on smaller screens */
    }

    /* Decrease image size for smaller screens */
    .table-responsive .img-fixed-size {
        width: 100px; /* Adjust width for smaller screens */
    }
}
        * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
.suggetion{
    font-size:13px;
}
.row-data{
    margin-left:10px;
}
#google_translate_element {
    display: inline-block;
  }
  .bg-light-blue {
    background-color: #e0f7fa; /* Light blue color */
}
.bg-white {
    background-color: white; /* White color */
}
    </style>
</head>
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
</header>
<div class="container-fuild bg-light py-2 text-end">
    <!-- <a href=""><button>Feadback</button></a> -->
</div>
<div class="container mt-5 pb-5">
    <div class="row row-data">
        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
            <div class="input-placeholder">
                शहर/गांव: <span id="city_villege">...........</span>
            </div>
        </div>
        <div class="col-12 col-lg-2 col-md-2 col-sm-2">
            <div class="input-placeholder">
            ज़िला: <span id="district">........</span>
            </div>
        </div>
        <div class="col-12 col-lg-2 col-md-2 col-sm-2">
            <div class="input-placeholder">
            राज्य: <span id="state">...........</span>
            </div>
        </div>
        <div class="col-12 col-lg-2 col-md-2 col-sm-2">
            <div class="input-placeholder">
            आईडी नम्बर: <span id="ID_NO"></span>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
            <div class="input-placeholder">
            मूल निवासी: <span id="native_Address"></span>
            </div>
        </div> 
    </div>
    <div class="container-fluid" id="familydetailstable">
        <div class="table-responsive mt-2">
            <table class="table table-bordered">
                <tbody>
                    <tr id="male-chief-placeholder"></tr>
                    <tr id="female-chief-placeholder"></tr>
                    <tr id="unmarried-children-placeholder"></tr>
                </tbody>
            </table>
        </div>
    </div>

<div>
<!-- <div class="container">
    <div class="table-responsive mt-2">
        <table class="table table-bordered">
            <tbody id="family-details">
            </tbody>
        </table>
    </div>
</div> -->
    <h6 class="mt-4">विवाहित बच्चे</h6>
</div>
<div class="table-responsive">
    <table class="table table-bordered" id="marriedChildrenTable">
        <thead>
            <tr>
                <th>नाम</th>
                <th>जगह</th>
            </tr>
        </thead>
        <tbody>
            <!-- Dynamic content will be inserted here -->
        </tbody>
    </table>
</div>
    <div class="container">
    <div class="row">
        <div class="col-12 text-end mt-3">
           <button type="button" class="btn btn-success suggetion"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">सुझाव/सुधार</button>
           <a href="customer_panel.php"><button type="button" class="btn btn-success suggetion">होम</button></a>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h1 class="modal-title fs-6 text-white" id="staticBackdropLabel">सुझाव/सुधार</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" id="saggesstion_form">
            <div class="row">
                <div class="col-12 col-lg-6 col-md-6 col-sm-6" hidden>
                        <div class="form-group">
                            <label for="wife-name">Family ID</label>
                            <input type="text" class="form-control" id="fid" value="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="wife-name">नाम</label>
                            <input type="text" class="form-control" id="user_name">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="wife-name">मोबाइल नंबर</label>
                            <input type="text" class="form-control" id="user_mobnumber">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <label for="a_hrvst" class="form-label text-dark  fw-bold">आपका सुझाव</label>
                            <textarea class="form-control" rows="2" placeholder="Enter suggesstion" name="about" id="massage" onkeydown="return /[a-zA-Z\s,]/i.test(event.key)"  oninput="limitWords(this, 5000)" required></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">बंद करे</button>
                <button type="button" class="btn btn-info" id="suggesstion_submit">जमा करें</button>
            </div>
        </form>
    </div>
  </div>
</div>

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

<!-- <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: 'en',
        includedLanguages: 'en,hi',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
      }, 'google_translate_element');
    }

    function setInitialLanguage() {
      const language = 'hi';
      const combo = document.querySelector('.goog-te-combo');
      if (combo) {
        combo.value = language;
        combo.dispatchEvent(new Event('change'));
      }
    }

    document.addEventListener("DOMContentLoaded", function() {
      googleTranslateElementInit();
      setTimeout(setInitialLanguage, 1000);  // Delay to ensure the element is rendered
    });
    function removeSelectLanguageOption() {
      const combo = document.querySelector('.goog-te-combo');
      if (combo) {
        combo.remove(0);  // Remove the first option ("Select Language")
      }
    }

    document.addEventListener("DOMContentLoaded", function() {
      setTimeout(removeSelectLanguageOption, 500);  // Delay to ensure the element is rendered
    });
</script> -->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

