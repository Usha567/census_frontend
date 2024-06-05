<?php
    include 'includes/headertag.php';
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search and View Detailed Family Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>
<style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

/* body {
    background-image: linear-gradient(to right, lightblue, #666262);
} */

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
</style>
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


    <div class="container mt-4"></div>
    <!-- Language toggle -->
    <!-- <div class="container-fluid text-right">
      <div class="dropdown mt-3">
        <button class="bg-info">Select Language <i class="fas fa-caret-down"></i></button>
        <div class="dropdown-content text-center">
          <a href="#" onclick="setLanguage('en')">English</a>
          <a href="#" onclick="setLanguage('hi')">Hindi</a>
        </div>
      </div>
    </div> -->

    <!-- Search Form -->
    <div class="container-fluid ">
        <div class="filter-card shadow mt-5">
            <div class="card bg-light">
                <div class="card-body">
                    <h3 class="text-center  fw-blod main-heading" data-key="detailed_family_information">Detailed Family Information</h3>
                    <div class="seachbox">
                        <div class="row">
                            <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                <div class="search-box">
                                    <label for="Name" class="text-black fs-6" data-key="search_label">Name:</label>
                                    <input type="text" id="Name" class="control-form search-input-field" placeholder="Search Name">
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                <div class="search-box">
                                    <label for="number" class="text-black fs-6" data-key="search_label">Mobile No.:</label>
                                    <input type="text" id="number" class="control-form search-input-field" placeholder="Search number">
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                <div class="search-box">
                                    <label for="Age" class="text-black fs-6" data-key="search_label">Age:</label>
                                    <input type="text" id="Age" class="control-form search-input-field" placeholder="Search Age">
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                <div class="search-box">
                                    <label for="State" class="text-black fs-6" data-key="search_label">State:</label>
                                    <input type="text" id="State" class="control-form search-input-field" placeholder="Search State">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                <div class="search-box">
                                    <label for="District" class="text-black fs-6" data-key="search_label">District:</label>
                                    <input type="text" id="District" class="control-form search-input-field" placeholder="Search District">
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                <div class="search-box">
                                    <label for="Qualification" class="text-black fs-6" data-key="search_label">Qualification:</label>
                                    <input type="text" id="Qualification" class="control-form search-input-field" placeholder="Search Qualification">
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                <div class="search-box">
                                    <label for="Status" class="text-black fs-6" data-key="search_label">Status:</label>
                                    <input type="text" id="Status" class="control-form search-input-field" placeholder="Search Marital Status">
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                <div class="search-box">
                                    <label for="Occupation" class="text-black fs-6" data-key="search_label">Occupation:</label>
                                    <input type="text" id="Occupation" class="control-form search-input-field" placeholder="Search Occupation">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12  text-center">
                                <div class="button-group mt-2">
                                    <button class="bg-info mt-1" data-key="search_button">Search</button>
                                    <button class="bg-info mt-1" data-key="reset_button">Reset</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="table-responsive mt-4">
                        <table id="example" class="table table-striped bg-info table-hover table-bordered dataTable no-footer" width="100%">
                            <thead class="">
                                <tr>
                                    <th class="text-white" data-key="s_no">S.No.</th>
                                    <th class="text-white" data-key="name">Name</th>
                                    <th class="text-white" data-key="mobile">Mobile</th>
                                    <th class="text-white" data-key="age">Age</th>
                                    <th class="text-white" data-key="state">State</th>
                                    <th class="text-white" data-key="district">District</th>
                                    <th class="text-white" data-key="qualification">Qualification</th>
                                    <th class="text-white" data-key="marital_status">Marital Status</th>
                                    <th class="text-white" data-key="occupation">Occupation</th>
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

</body>
</html>

<script>
    const menubtn = document.querySelector(".menubtn");
const closebtn = document.querySelector(".closebtn");

menubtn.onclick = () => {
    menubtn.style.display = "none"
    closebtn.style.display = "block"
}

closebtn.onclick = () => {
    closebtn.style.display = "none"
    menubtn.style.display = "block"
}
    </script>

    
<script>
        async function setLanguage(language) {
            const response = await fetch(`${language}.json`);
            const translations = await response.json();
            
            document.querySelectorAll('[data-key]').forEach(element => {
                const key = element.getAttribute('data-key');
                element.textContent = translations[key];
            });
        }

        // Set default language to English
        setLanguage('en');
    </script>