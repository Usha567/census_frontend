    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html, body {
    height: 100%;
}

body {
    font-family: 'Plus Jakarta Sans', sans-serif;
    height: 100vh;
}

/* -------------- CONTAINER -------------- */
.container {
    display: flex;
    height: 100%;
    
}

/* -------------- SIDEBAR -------------- */
.sidebar {
    width: 240px;
    display: flex;
    flex-direction: column;
    flex-shrink: 0;
    justify-content: space-between;
    border-right: 1px solid #F3F5F7;
    padding: 0 16px;
    overflow: auto;
    background: linear-gradient(-170deg, rgb(27, 70, 136) 19%, rgb(73, 184, 197) 100%);
}

.sidebar__logo {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 40px -20 56px -30px;
}

.sidebar__logo-header-contant {
    margin-left: 14px;
}

.side-nav {
    display: flex;
    flex-direction: column;
}

.side-nav__header {
    font-size: 14px;
    line-height: 21px;
    color: #fff;
    padding-bottom: 10px;
    display: inline-block;
}

.side-nav__header, .side-nav__item > span {
    letter-spacing: -2%;
    font-weight: 500;
}

.side-nav__item {
    list-style: none;
    color: #596780;
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 14px 0 14px 16px;    
    border-radius: 10px;
    transition: all .4s;
    cursor: pointer;
    white-space: nowrap;
}

.side-nav__item > svg {
  flex-shrink: 0;
}

.side-nav__item.last-item {
    margin-bottom: 32px;
}

.side-nav__item:not(:last-child) {
    margin-bottom: 4px;
}

.side-nav__item:hover,  .side-nav__item-active {
    /* background-color: #7C5CFC; */
    color: white;
}

/* -------------- MAIN CONTENT -------------- */
.main-content {
    display: flex;
    flex-direction: column;
    width: 100%;
    overflow: auto;
}
.image{
    width: 150px;
    height: 50px;
}
.header-contant{
    background: linear-gradient(-170deg, rgb(27, 70, 136) 19%, rgb(73, 184, 197) 100%);

}
/* -------------- TOP CONTAINER -------------- */
.top-container {
    border-bottom: 1px solid #F3F5F7;
    padding: 18px 32px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
/* -------------- USER NAV -------------- */
.user-nav, .user-info {
    display: flex;
    align-items: center;
}

.user-name {
    font-weight: 600;
    font-size: 16px;
    line-height: 24px;
    letter-spacing: -2%;
    margin: 0 12px 0 12px;
    color:#fff;
}

.user-image {
    height: 44px;
    width: 44px;
}

/* -------------- BUTTON -------------- */
.button-box {
    display: flex;
    justify-content: space-between;
    margin-top: 56px;
}

.btn {
    padding: 16px 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
}

.btn-purple {
    background-color: #7C5CFC;
    color: white;
}

.btn-white {
    background-color: white;
    color: black;
    border: 2px solid #7C5CFC;
}
.user-nav {
            position: relative;
            display: inline-block;
        }

        .user-info {
            display: flex;
            align-items: center;
        }

        .image-header {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            cursor: pointer;
        }

        .user-info {
    display: flex;
    align-items: center; /* Vertically center the items */
    position: relative;
}

.image-header {
    margin-right: 10px; /* Optional: Add some space between the image and the text */
}

.user-name {
    margin-right: 10px; /* Optional: Add some space between the text and the SVG */
}

.dropdown {
    position: relative;
    display: flex;
    align-items: center; /* Vertically center the SVG icon and the dropdown */
}

.dropdown-content {
    display: none;
    position: absolute;
    top: 100%; /* Position the dropdown below the SVG */
    left: -120px; /* Align the dropdown with the left edge of the parent */
    margin-top: 15px; /* Adjust the space between the SVG and the dropdown */
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    text-align: left; /* Align the text inside the dropdown to the left */
    padding: 10px;
}

.dropdown-content a {
    color: black;
    text-decoration: none;
    display: block;
    padding-left: 10px;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}

.dropdown-item {
    display: flex;
    align-items: center;
    padding: 5px 0;
}

.dropdown-item svg {
    margin-right: 10px;
}

/* Toggle the dropdown on click */
.svg-container {
    cursor: pointer;
}

.svg-container:focus + .dropdown-content,
.svg-container:active + .dropdown-content {
    display: block;
}

.dropdown-content {
    display: none;
}

.svg-container.active + .dropdown-content {
    display: block;
}
.white-icon {
            color: white;
            margin-left: 10px;
        }
/* Show the dropdown when the user clicks outside */
window.onclick = function(event) {
    if (!event.target.matches('.svg-container')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.style.display === "block") {
                openDropdown.style.display = "none";
            }
        }
    }
}
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

<body>
    <div class="container">
        <nav class="sidebar">            
            <div>
                <div class="sidebar__logo">
                        <img src="http://localhost:8080\census_project\assets\images\Census_Logo.png" alt="" class=" image">
                </div>
                <ul class="side-nav">
                    <span class="side-nav__header text-white">Main Menu</span>
                    <li class="side-nav__item side-nav__item-active">
                    <i class="fas fa-user"></i>                     
                        <span>Agent Management  </span>
                    </li>
                    </ul>
            </div>         
        </nav>
        <main class="main-content">
            <div class="row header-contant">
                <div class="top-container">
                    <div class="col-12 col-lg-8 col-md-8 col-sm-8"></div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                        <div class="user-nav">
                            <div class="user-info">
                                <img src="http://localhost:8080/census_project/assets/images/header-logojpg.jpg" alt="Profile Picture" class="image-header">
                                <span class="user-name text-white">Admin</span>
                                <div class="dropdown">
                                    <div class="svg-container" onclick="toggleDropdown()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill white-icon" viewBox="0 0 16 16">
                                            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 0 0 1-1.506 0z"/>
                                        </svg>
                                    </div>
                                    <div id="myDropdown" class="dropdown-content text-center">
                                        <div class="dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                                            </svg>
                                            <a href="#profile">Profile</a>
                                        </div>
                                        <div class="dropdown-item">
                                            <svg width="20" height="20" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.8999 8.05999C9.2099 4.45999 11.0599 2.98999 15.1099 2.98999H15.2399C19.7099 2.98999 21.4999 4.77999 21.4999 9.24999V15.77C21.4999 20.24 19.7099 22.03 15.2399 22.03H15.1099C11.0899 22.03 9.2399 20.58 8.9099 17.04" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M15.0001 12.5H3.62012" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M5.85 9.14999L2.5 12.5L5.85 15.85" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <a href="#logout">Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>


<script>
    function toggleDropdown() {
        var dropdown = document.getElementById("myDropdown");
        if (dropdown.style.display === "block") {
            dropdown.style.display = "none";
        } else {
            dropdown.style.display = "block";
        }
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.svg-container, .svg-container *')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.style.display === "block") {
                    openDropdown.style.display = "none";
                }
            }
        }
    }
</script>
