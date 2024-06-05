

   
    <style>
        /* Custom Styles */
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            /* background: linear-gradient(-170deg, rgb(63, 81, 181) 19%, rgb(76, 175, 80) 100%); */
            background: linear-gradient(-170deg, rgb(27, 70, 136) 19%, rgb(73, 184, 197) 100%);
        }
        .navbar-brand {
            color: #fff;
            font-weight: bold;
        }
        .navbar-nav .nav-link {
            color: #fff;
            margin: left 100px;
        }
        .navbar-nav .nav-item.dropdown .dropdown-menu {
            background-color: #fff; /* Dark gray */
        }
        .navbar-nav .nav-item.dropdown .dropdown-menu .dropdown-item {
            color: #fff;
        }
        .navbar-nav .nav-item.dropdown .dropdown-divider {
            border-top-color: #6c757d; /* Gray */
        }
        .navbar-toggler-icon {
            color: #fff;
        }
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .is-user-name {
            font-weight: bold;
        }
    </style>
</head>


<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="http://localhost:8080\census_project\assets\images\admin-logo.jpg" class="avatar img-fluid user-avatar" alt="admin">
                            <span class="text-white is-user-name">Admin Name</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-dark" href="admin_profile.php"><i class="fas fa-user"></i> Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-dark" id="logoutBtnClick" href="#" onclick="user_logout();"><i class="fas fa-sign-out-alt"></i> Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


 