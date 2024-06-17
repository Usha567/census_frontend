
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
        * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
.suggetion{
    font-size:10px;
}

    </style>
</head>
<body>
<header class="header">
    <nav>
      
        <div class="logo">
            <h6 class="fw-bold text-white">"छीपा समाज शिक्षा और कैरियर" ग्रुप</h6>
            <h6 class="fw-bold text-white">छीपा (क्षत्रिय) समाज की जनगणना, वर्ष - 2024</h6>
            <h6 class="fw-bold text-white">(परिवार परिचय - पत्र)</h6>
        </div>
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon">&#9776;</label>
        <ul class="menu">
            <li>
                <a href="#" id="translate-icon" onclick="toggleDropdown()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                        <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286zm1.634-.736L5.5 3.956h-.049l-.679 2.022z"/>
                        <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zm7.138 9.995q.289.451.63.846c-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6 6 0 0 1-.415-.492 2 2 0 0 1-.94.31"/>
                    </svg>
                </a>
                <div class="dropdown" id="translate-dropdown" style="display: none;">
                    <a href="#" class="text-dark">हिंदी</a>
                    <a href="#" class="text-dark">English</a>
                </div>
            </li>
        </ul>
    </nav>
</header>
<div class="container-fuild bg-light py-2 text-end">
    <!-- <a href=""><button>Feadback</button></a> -->
</div>
<div class="container mt-5 pb-5">
    <div class=" text-center">
        <h6 class="fw-bold">"छीपा समाज शिक्षा और कैरियर" ग्रुप</h6>
        <h6 class="fw-bold">छीपा (क्षत्रिय) समाज की जनगणना, वर्ष - 2024</h6>
        <h6 class="fw-bold">(परिवार परिचय - पत्र)</h6>
    </div>
    <div class="row">
        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
            <div class="input-placeholder">
                City/Villege: <span id="city_villege">...........</span>
            </div>
        </div>
        <div class="col-12 col-lg-2 col-md-2 col-sm-2">
            <div class="input-placeholder">
                District: <span id="district">........</span>
            </div>
        </div>
        <div class="col-12 col-lg-2 col-md-2 col-sm-2">
            <div class="input-placeholder">
                State: <span id="state">...........</span>
            </div>
        </div>
        <div class="col-12 col-lg-2 col-md-2 col-sm-2">
            <div class="input-placeholder">
                ID NO.: <span>......</span>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
            <div class="input-placeholder">
                Native: <span>........</span>
            </div>
        </div> 
    </div>
     <div class="" id="familydetailstable">
        <div class="table-responsive mt-2">
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
                        <td colspan="2">Father: <span id="father">..........</span><span>,</span><span> ID</span><Span>.............</Span></td>
                        <td colspan="2">Relationship with the chief: <span id="relationship">.......</span></td>
                        <td rowspan="1" colspan="2" class="align-middle">Blood Group: <span id="blood-group">.......</span></td>
                        <td rowspan="2" class="align-middle">
                            <div>Work: <span id="work">.......</span></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">Original surname: <span id="surname">.......</span></td>
                        <td colspan="2">Education: <span id="education">.......</span></td>
                        <td colspan="2">Cast Certificate: <span id="education">.......</span></td>

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
                        <td colspan="2">Father: <span id="father_1">.......</span><span>,</span><span>ID</span><Span>......</Span></td>
                        <td colspan="2">Relationship with the chief: <span id="relationship_1">.......</span></td>
                        <td rowspan="1" colspan="2" class="align-middle">Blood Group: <span id="blood-group_1">.......</span></td>
                        <td rowspan="2" class="align-middle">
                            <div>Work: <span id="work_1">.......</span></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">Original surname: <span id="surname_1">.......</span></td>
                        <td colspan="2">Education: <span id="education_1">.......</span></td>
                        <td colspan="2">Cast Certificate: <span id="education">.......</span></td>
                    </tr>
                    <tr>
                        <td rowspan="3" class="text-center align-middle">Unmarried Child</td>
                        <td colspan="2" rowspan="2">Name: .......</td>
                        <td colspan="2" rowspan="2">Relationship with the chief: .......</td>
                        <td colspan="2">Unmarried: .......</td>
                        <td rowspan="3" class="align-middle">
                            <div>Work: .......</div>
                        </td>
                        <td rowspan="3" class="align-middle">
                            <img src="http://localhost:8080\census_project\assets\images\admin-logo.jpg" alt="" class="img">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">Status: .......</td>
                    </tr>
                    <tr>
                    <td colspan="2">Age/Date of Birth: .......</td>
                        <td colspan="2">Mobile No.: .......</td>
                        <td colspan="2">Cast Certificate: .......</td>
                    </tr>
                    <tr>
                        <td rowspan="3" class="text-center align-middle">Unmarried Child</td>
                        <td colspan="2" rowspan="2">Name: .......</td>
                        <td colspan="2" rowspan="2">Relationship with the chief: .......</td>
                        <td colspan="2">Unmarried: .......</td>
                        <td rowspan="3" class="align-middle">
                            <div>Work: .......</div>
                        </td>
                        <td rowspan="3" class="align-middle">
                            <img src="http://localhost:8080\census_project\assets\images\admin-logo.jpg" alt="" class="img">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">Status: .......</td>
                    </tr>
                    <tr>
                    <td colspan="2">Age/Date of Birth: .......</td>
                        <td colspan="2">Mobile No.: .......</td>
                        <td colspan="2">Cast Certificate: .......</td>
                    </tr>
                    <tr>
                        <td rowspan="3" class="text-center align-middle">Unmarried Child</td>
                        <td colspan="2" rowspan="2">Name: .......</td>
                        <td colspan="2" rowspan="2">Relationship with the chief: .......</td>
                        <td colspan="2">Unmarried: .......</td>
                        <td rowspan="3" class="align-middle">
                            <div>Work: .......</div>
                        </td>
                        <td rowspan="3" class="align-middle">
                            <img src="http://localhost:8080\census_project\assets\images\admin-logo.jpg" alt="" class="img">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">Status: .......</td>
                    </tr>
                    <tr>
                    <td colspan="2">Age/Date of Birth: .......</td>
                        <td colspan="2">Mobile No.: .......</td>
                        <td colspan="2">Cast Certificate: .......</td>
                    </tr>
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
    <h6>Married Children</h6>
</div>
    <div class="table-responsive">
        <table class="table table-bordered" id="marriedChildrenTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dynamic content will be inserted here -->
            </tbody>
        </table>
    </div>
    <div class="comtainer">
        <div class="row">
        <div class="col-12 col-lg-5 col-md-5 col-sm-5">
            <div class="input-placeholder">
              Signature of Chief/Representative: <span id="city_villege">...........</span>
            </div>
        </div>
        <div class="col-12 col-lg-4 col-md-4 col-sm-4">
            <div class="input-placeholder">
                To the joint Family: <span id="district">........</span>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
            <div class="input-placeholder">
                Date: <span id="state">...........</span>
            </div>
        </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-12 text-end mt-3">
           <button type="button" class="btn btn-success suggetion"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Suggesstion/Correction</button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h1 class="modal-title fs-6 text-white" id="staticBackdropLabel">Suggesstion/Correction</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                    <label for="wife-name">Name</label>
                    <input type="text" class="form-control" id="user-name">
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                    <label for="wife-name">Mobile</label>
                    <input type="text" class="form-control" id="user-name">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <label for="a_hrvst" class="form-label text-dark  fw-bold">Your suggesstion</label>
                    <textarea class="form-control" rows="2" placeholder="Enter Location" name="about" id="about" onkeydown="return /[a-zA-Z\s]/i.test(event.key)"  oninput="limitWords(this, 200)" required></textarea>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info">submit</button>
      </div>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
// $(document).ready(function(){
    
//     var familyId = ''; 
//     fetchFamilyData(familyId);
// });

// function fetchFamilyData(familyId) {
//     // var url = "http://your-backend-api.com/api/family/" + familyId;

//     axios.get(url)
//     .then(function (response) {
//         var familyData = response.data;
//         populateMarriedChildrenTable(familyData.marriedChildren);
//         // Populate other parts of the page as needed
//     })
//     .catch(function (error) {
//         console.error('Error fetching data:', error);
//         alert('Failed to fetch family data');
//     });
// }

// function populateMarriedChildrenTable(marriedChildren) {
//     var tableBody = $('#marriedChildrenTable tbody');
//     tableBody.empty(); // Clear any existing rows

//     marriedChildren.forEach(function(child) {
//         var row = '<tr>' +
//             '<td>' + child.id + '</td>' +
//             '<td>' + child.name + '</td>' +
//             '</tr>';
//         tableBody.append(row);
//     });
// }
</script>
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

$(document).ready(function() {

    var fk_family_id = 1; // Replace with the actual family ID
    var url = 'http://192.168.1.10:8000/api/getall_initial_family_details/' + fk_family_id;

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(response) {
            var data = response.data;

            // Populate Male Chief Details
            $('#name').text(data.maleChief.name);
            $('#dob').text(data.maleChief.dob);
            $('#married').text(data.maleChief.married);
            $('#son').text(data.maleChief.son);
            $('#daughter').text(data.maleChief.daughter);
            $('#mother').text(data.maleChief.mother);
            $('#mobile').text(data.maleChief.mobile);
            $('#status').text(data.maleChief.status);
            $('#father').text(data.maleChief.father);
            $('#relationship').text(data.maleChief.relationship);
            $('#blood-group').text(data.maleChief.bloodGroup);
            $('#work').text(data.maleChief.work);
            $('#surname').text(data.maleChief.surname);
            $('#education').text(data.maleChief.education);
            $('#cast-certificate').text(data.maleChief.castCertificate);

            // Populate Female Chief Details
            $('#name_1').text(data.femaleChief.name);
            $('#dob_1').text(data.femaleChief.dob);
            $('#married_1').text(data.femaleChief.married);
            $('#son_1').text(data.femaleChief.son);
            $('#daughter_1').text(data.femaleChief.daughter);
            $('#mother_1').text(data.femaleChief.mother);
            $('#mobile_1').text(data.femaleChief.mobile);
            $('#status_1').text(data.femaleChief.status);
            $('#father_1').text(data.femaleChief.father);
            $('#relationship_1').text(data.femaleChief.relationship);
            $('#blood-group_1').text(data.femaleChief.bloodGroup);
            $('#work_1').text(data.femaleChief.work);
            $('#surname_1').text(data.femaleChief.surname);
            $('#education_1').text(data.femaleChief.education);
            $('#cast-certificate_1').text(data.femaleChief.castCertificate);

            // Populate Unmarried Child Details
            var children = data.children;
            children.forEach(function(child, index) {
                if (index === 0) {
                    $('#child_name').text(child.name);
                    $('#child_relationship').text(child.relationship);
                    $('#child_unmarried').text(child.unmarried);
                    $('#child_work').text(child.work);
                    $('#child_status').text(child.status);
                    $('#child_dob').text(child.dob);
                    $('#child_mobile').text(child.mobile);
                    $('#child_cast_certificate').text(child.castCertificate);
                }
                // Repeat the above block for additional children if necessary
            });
        },
        error: function(error) {
            console.error('Error fetching data:', error);
            alert('An error occurred while fetching data. Please try again.');
        }
    });
});
// $(document).ready(function() {

//     function fetchFamilyDetails() {
//         // Clear existing data
//         $('#family-details').empty();

//         // Fetch data from API
//         $.ajax({
//             url: 'http://192.168.1.10:8000/api/getall_initial_family_details/' + fk_family_id,
//             type: 'GET',
//             success: function(data) {
//                 // Male Chief Details
//                 var maleChiefHtml = `
//                     <tr>
//                         <td rowspan="4" class="text-center align-middle">Male Chief</td>
//                         <td colspan="2">Name: ${data.name}</td>
//                         <td colspan="2">Age/Date of Birth: ${data.dob}</td>
//                         <td colspan="2">Married: ${data.marital_status}</td>
//                         <td rowspan="2" class="align-middle">
//                             <div>Number of children:</div>
//                             <div>Son: ${data.son}</div>
//                             <div>Daughter: ${data.daughter}</div>
//                         </td>
//                         <td rowspan="4" class="align-middle">
//                             <img src="http://192.168.1.10:8000/${data.self_image_1}" alt="" class="img">
//                         </td>
//                     </tr>
//                     <tr>
//                         <td colspan="2">Mother: ${data.mother}</td>
//                         <td colspan="2">Mobile No.: ${data.mobile}</td>
//                         <td colspan="2">Status: ${data.status}</td>
//                     </tr>
//                     <tr>
//                         <td colspan="2">Father: ${data.father}</td>
//                         <td colspan="2">Relationship with the chief: ${data.relationship}</td>
//                         <td rowspan="1" colspan="2" class="align-middle">Blood Group: ${data.blood_group}</td>
//                         <td rowspan="2" class="align-middle">
//                             <div>Work: ${data.work}</div>
//                         </td>
//                     </tr>
//                     <tr>
//                         <td colspan="2">Original surname: ${data.surname}</td>
//                         <td colspan="2">Education: ${data.education}</td>
//                         <td colspan="2">Cast Certificate: ${data.cast_certificate}</td>
//                     </tr>
//                 `;

//                 // Female Chief Details (similar structure as male chief)
//                 var femaleChiefHtml = `
//                     <tr>
//                         <td rowspan="4" class="text-center align-middle">Female Chief</td>
//                         <td colspan="2">Name: ${data.name_1}</td>
//                         <td colspan="2">Age/Date of Birth: ${data.dob_1}</td>
//                         <td colspan="2">Married: ${data.marital_status_1}</td>
//                         <td rowspan="2" class="align-middle">
//                             <div>Number of children:</div>
//                             <div>Son: ${data.son_1}</div>
//                             <div>Daughter: ${data.daughter_1}</div>
//                         </td>
//                         <td rowspan="4" class="align-middle">
//                             <img src="http://localhost:8080/census_project/assets/images/admin-logo.jpg" alt="" class="img">
//                         </td>
//                     </tr>
//                     <tr>
//                         <td colspan="2">Mother: ${data.mother_1}</td>
//                         <td colspan="2">Mobile No.: ${data.mobile_1}</td>
//                         <td colspan="2">Status: ${data.status_1}</td>
//                     </tr>
//                     <tr>
//                         <td colspan="2">Father: ${data.father_1}</td>
//                         <td colspan="2">Relationship with the chief: ${data.relationship_1}</td>
//                         <td rowspan="1" colspan="2" class="align-middle">Blood Group: ${data.blood_group_1}</td>
//                         <td rowspan="2" class="align-middle">
//                             <div>Work: ${data.work_1}</div>
//                         </td>
//                     </tr>
//                     <tr>
//                         <td colspan="2">Original surname: ${data.surname_1}</td>
//                         <td colspan="2">Education: ${data.education_1}</td>
//                         <td colspan="2">Cast Certificate: ${data.cast_certificate_1}</td>
//                     </tr>
//                 `;

//                 // Append male chief and female chief details
//                 $('#family-details').append(maleChiefHtml);
//                 $('#family-details').append(femaleChiefHtml);

//                 // Children Details (assuming familymemberdetails is an array of children)
//                 data.familymemberdetails.forEach(function(child, index) {
//                     var childHtml = `
//                         <tr>
//                             <td rowspan="3" class="text-center align-middle">Unmarried Child</td>
//                             <td colspan="2">Name: ${child.name}</td>
//                             <td colspan="2">Relationship with the chief: ${child.relation}</td>
//                             <td colspan="2">Unmarried: ${child.marital_status === 'Unmarried' ? 'Yes' : 'No'}</td>
//                             <td rowspan="3" class="align-middle">
//                                 <div>Work: ${child.occupation}</div>
//                             </td>
//                             <td rowspan="3" class="align-middle">
//                                 <img src="http://localhost:8080/census_project/assets/images/admin-logo.jpg" alt="" class="img">
//                             </td>
//                         </tr>
//                         <tr>
//                             <td colspan="2">Age/Date of Birth: ${child.dob}</td>
//                             <td colspan="2">Mobile No.: ${child.mobile_number}</td>
//                             <td colspan="2">Cast Certificate: ${child.cast_certificate}</td>
//                         </tr>
//                         <tr>
//                             <td colspan="2">Status: ${child.marital_status}</td>
//                             <td colspan="2">Education: ${child.qualification}</td>
//                             <td colspan="2">Blood Group: ${child.blood_group}</td>
//                         </tr>
//                     `;
//                     $('#family-details').append(childHtml);
//                 });
//             },
//             error: function(error) {
//                 console.error('Error fetching family details:', error);
//             }
//         });
//     }

//     // Fetch family details on page load
//     fetchFamilyDetails();
// });
</script>