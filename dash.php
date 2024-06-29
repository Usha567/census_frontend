
<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.main {
  width: 100%;
  display: flex;
}
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    background: #fff;
}
.main {
    height: 100%;
    display: flex;
}
.sidebar {
    height: 100vh;
    width: 280px;
    background: linear-gradient(-170deg, rgb(27, 70, 136) 19%, rgb(73, 184, 197) 100%);
    transition: all 0.5s ease-in-out;
    overflow-y: auto; /* Allows scrolling within the sidebar */
}
.content {
    width: calc(100% - 200px);
    transition: all 0.5s ease-in-out;
    overflow-y: auto; /* Allows scrolling within the content area */
}
  

header {
    background: linear-gradient(-170deg, rgb(27, 70, 136) 19%, rgb(73, 184, 197) 100%);
  padding: 10px 10px;
  display: flex;
  align-items: center;
}
header i.fa-bars {
  color: #fff;
  font-size: 30px;
  cursor: pointer;
}

.header-logo {
  font-size: 30px;
  font-weight: bold;
  color: #fff;
  margin-left: 30px;
}

.main.close .sidebar {
  width: 0px;
}
.main.close .content {
  width: 100%;
}
.container-fluid{
    margin: left 50px;
}
.filter-card{
    margin: right 50px;
}
.card-body {
    padding: 20px;
}
.search-box input {
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 5px 10px;
    width: 50%;
}

.search-box label {
    display: inline-block;
    margin-right: 10px;
    font-weight: bold;
    font-size: 1.25rem;
}
.button-group button {
    margin: 0 5px;
    padding: 6px 20px;
    border: none;
    color: #fff;
    border-radius: 4px;
}
.bg-info {
    background-color: #17a2b8 !important;
}
.aside-tools{
            padding: 9px 20px;
            border-bottom: 1px solid #f0f3f6;
        }
        .image{
    width: 150px;
    height: 50px;
}
.side-nav {
    display: flex;
    flex-direction: column;
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
.adminlogo{
    width: 50px;
    height: 50px;
}
.admin-header{
    margin: left 200px;
}
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    padding: 10px 10px;
    color: white;
}

#menu {
    cursor: pointer;
}

.admin-header {
    display: flex;
    align-items: center;
    position: relative;
}

.adminlogo {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 10px;
}

.is-user-name {
    margin-right: 10px;
}

.dropdown {
            position: relative;
            display: inline-block;
        }
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 140px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    right: 0;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    margin: right -9px;

}
.dropdown-content a:hover {
    background-color: #f1f1f1;
    margin: right -9px;
    margin: top 5px;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .fas.fa-caret-down {
    color: #ddd;
}
.agent{
    margin-left: 10px;;
}
.logo {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex: 1;
        }
        .small-text {
            font-size: 0.75rem; /* Adjust the size as needed */
        }
        </style>
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
                    <a href="#logout" onclick="user_logout();">Logout</a>
                </div>
            </div>
        </div>
    </header>

    <script>
    const Bar = document.getElementById("menu");
const main = document.getElementById("main");
Bar.addEventListener("click", () => {
  return main.classList.toggle("close");
});

</script>

