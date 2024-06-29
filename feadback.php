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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">

</head>
<style>
   .btn i.fa,
.btn i.fas {
    font-size: 11px; /* Adjust the font size as needed */
}
.text-truncate {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    /* max-width: 300px;  */
    /* display: inline-block; */
    vertical-align: top;
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

    <div class="container ">
        <div class="filter-card shadow mt-5">
            <div class="card bg-light">
                <div class="card-body">
                    <h5 class="text-center">उपयोगकर्ता प्रतिक्रिया</h5>
                    <div class="table-responsive mt-4">
                        <table id="example" class="table table-striped bg-info table-hover table-bordered dataTable no-footer" width="100%">
                            <thead class="">
                                <tr>
                                    <th class="text-white">क्र.सं.</th>
                                    <th class="text-white" >परिवार आईडी</th>
                                    <th class="text-white" >नाम</th>
                                    <th class="text-white" >मोबाइल नंबर</th>
                                    <th class="text-white" >सुझाव संदेश</th>
                                    <th class="text-white" >गतिविधि</th>
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

    <!-- Modal -->
    <div class="modal fade" id="viewdatamodel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h1 class="modal-title fs-6 text-white" id="staticBackdropLabel">View Suggestion</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Family ID</td>
                                    <td id="view_family_id" colspan="3"></td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td id="view_name" colspan="3"></td>
                                </tr>
                                <tr>
                                    <td>Mobile</td>
                                    <td id="view_number" colspan="3"></td>
                                </tr>
                                <tr>
                                    <td>Suggestion</td>
                                    <td id="view_suggestion" colspan="3" class="containt-justify-center"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
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
    // Function to fetch suggestions data from API and populate table
    fetchSuggestions();
});
function fetchSuggestions() {
    const apiUrl = 'http://192.168.1.10:8000/api/get_all_suggestion';
    const token = localStorage.getItem('token');
    
    $.ajax({
        url: apiUrl,
        type: 'GET',
        headers: {
            'Authorization': 'Bearer ' + token
        },
        success: function(response) {
            if (response && response.data && response.data.length > 0) {
                const suggestions = response.data;
                const tableBody = $('#data-table');

                // Clear existing rows
                tableBody.empty();

                // Reverse the suggestions array to show newest data at the top
                const reversedSuggestions = suggestions.reverse();

                // Loop through reversed suggestions and populate table rows
                reversedSuggestions.forEach((suggestion, index) => {
                    const truncatedText = suggestion.suggestions.length > 50 
                        ? suggestion.suggestions.substring(0, 50) + '...' 
                        : suggestion.suggestions;
                    
                    const row = `
                        <tr>
                            <td>${index + 1}</td>
                            <td>${suggestion.family_id}</td>
                            <td>${suggestion.name}</td>
                            <td>${suggestion.mobile_number}</td>
                            <td class="text-truncate" title="${suggestion.suggestions}">${truncatedText}</td>
                            <td>
                                <button class="btn text-dark btn-sm p-0 m-1" onclick="viewSuggestion(${suggestion.id});" data-bs-toggle="modal" data-bs-target="#viewdatamodel">
                                    <i class="fa fa-eye" style="font-size: 11px;"></i>
                                </button>
                                <button class="btn text-dark btn-sm p-0 m-1" onclick="deleteSuggestion(${suggestion.id})">
                                    <i class="fa fa-trash" style="font-size: 11px;"></i>
                                </button>
                                <button class="btn text-dark btn-sm p-0 m-1" onclick="redirectSuggestion(${suggestion.family_id})">
                                    <i class="bi bi-arrow-up-right-square fw-bold" style="font-size: 11px;"></i>
                                </button>
                            </td>
                        </tr>
                    `;
                    tableBody.append(row);
                });
            } else {
                console.log('No suggestions found');
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching suggestions:', error);
        }
    });
}


    function viewSuggestion(userId) {
    // var apiBaseURL = APIBaseURL;get_suggestion_by_Id
    const apiUrl = 'http://192.168.1.10:8000/api/get_suggestion_by_Id/' + userId;
    // var url = apiBaseURL + 'get_enquiry_for_haat_bazar_by_id/' + userId;
  
    var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
      url: apiUrl,
      type: 'GET',
      headers: headers,
    
      success: function(response) {
        var userData = response.data[0];
        document.getElementById('view_family_id').innerText=userData.family_id;
        document.getElementById('view_name').innerText=userData.name;
        document.getElementById('view_number').innerText=userData.mobile_number;
        document.getElementById('view_suggestion').innerText=userData.suggestions;
    
       
        
      },
      error: function(error) {
        console.error('Error fetching user data:', error);
      }
    });
  }

  function deleteSuggestion(id) {
    const url = 'http://192.168.1.10:8000/api/delete_suggetion/' + id;
  console.log(url);
  var token = localStorage.getItem('token');

  if (!token) {
    console.error("Token is missing");
    return;
  }
  var isConfirmed = confirm("Are you sure you want to delete this data?");
  if (!isConfirmed) {
    return;
  }

  $.ajax({
    url: url,
    type: "DELETE",
    headers: {
      'Authorization': 'Bearer ' + token
    },
    success: function(result) {
      // get_tyre_list();
      window.location.reload();
      console.log("Delete request successful");
      alert("Delete operation successful");
    },
    error: function(error) {
      console.error('Error fetching data:', error);
      alert("Error during delete operation");
    }
  });
}

function redirectSuggestion(familyId) {
            // Replace 'targetPage.html' with the actual target page URL
            const targetUrl = `update_familydetails.php?family_id=${familyId}`;
            window.location.href = targetUrl;
        }
// function redirectSuggestion(id) {
//     const url = 'http://192.168.1.10:8000/api/get_suggestion_by_Id/' + id;
// window.location.href = "familydetail_admin.php?family_id=" + paraArr.family_Id;
// }
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