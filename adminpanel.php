<!-- <?php
    include 'includes/headertag.php';
    include 'includes/left_nav.php';
    include 'includes/header_admin.php';
   ?>  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
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
       
        .navbar-nav .nav-item.dropdown .dropdown-menu .dropdown-item {
            color: #fff;
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
.image{
    width: 150px;
    height: 50px;
}
.sidebar__logo {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 40px -20 56px -30px;
}
.agt{
   padding: inherit;
}
</style>
    <style>
        .aside-tools{
            padding: 9px 20px;
            border-bottom: 1px solid #f0f3f6;
        }
        .aside-tools img{
            width: 100%;
        }
        .aside{
            /* background: linear-gradient(-170deg, rgb(63, 81, 181) 19%, rgb(76, 175, 80) 100%); */
            background: linear-gradient(-170deg, rgb(27, 70, 136) 19%, rgb(73, 184, 197) 100%);
            width: 250px;
            padding-bottom: 60px;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            -webkit-transition: left 0.3s ease;
            transition: left 0.3s ease;
            z-index: 20;
            overflow-y: scroll; 
        }
        .aside::after{
            content: "";
            position: absolute;
            top:0;
        }
        .list-item{
            text-decoration: none;
        }
        .aside {
            /* background-color: #343a40; */
            height: 100vh;
        }
        .aside .aside-tools h4 {
            text-align: center;
        }
        .aside .menu ul {
            list-style: none; /* Remove default list item dots */
            padding: 0;
        }
        .aside .menu ul li a {
            color: white;
            display: flex;
            align-items: center;
            padding: 10px;
            text-decoration: none;
        }
        .aside .menu ul li a:hover {
            /* background-color: #495057; */
            text-decoration: none;
        }
        .aside .menu ul li a i {
            margin-right: 10px;
        }
        .image{
    width: 150px;
    height: 50px;
}
.agt{
    margin: left 5px;
}
#sidebar {
    width: 250px; /* Adjust as needed */
    transition: all 0.3s;
}

/* Media query for smaller screens */
@media (max-width: 768px) {
    #sidebar {
        width: 0;
    }
}

/* Button style */
.toggle-btn {
    display: none; /* Initially hidden */
}

/* Media query for smaller screens to show button */
@media (max-width: 768px) {
    .toggle-btn {
        display: block;
    }
}
    </style>
</head>

<body>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

</body>

</html>