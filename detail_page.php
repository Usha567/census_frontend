<?php
    include 'includes/headertag.php'; 
   ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
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
        .table-responsive td, .table-responsive th {
            white-space: nowrap;
        }
        .table-responsive {
            overflow-x: auto;
        }
    </style>
</head>
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
<div class="container mt-5 bg-light">
    <div class=" text-center">
        <h6 class="fw-bold">छिपा समाज शिक्षा और कैरियर" ग्रुप</h6>
        <h6 class="fw-bold">छिपा (क्षत्रिय) समाज की जनगणना, वर्ष - 2024</h6>
        <h6 class="fw-bold">(परिवार परिचय - पत्र)</h6>
    </div>
    <div class="table-responsive">
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
                </tr>
                <tr>
                    <td colspan="2">Mother: <span id="mother">.......</span></td>
                    <td colspan="2">Mobile No.: <span id="mobile">.......</span></td>
                    <td colspan="2">Status: <span id="status">.......</span></td>
                </tr>
                <tr>
                    <td colspan="2">Father: <span id="father">.......</span></td>
                    <td colspan="2">Relationship with the chief: <span id="relationship">.......</span></td>
                    <td rowspan="2" colspan="2" class="align-middle">Blood Group: <span id="blood-group">.......</span></td>
                    <td rowspan="2" class="align-middle">
                        <div>Work: <span id="work">.......</span></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Original surname: <span id="surname">.......</span></td>
                    <td colspan="2">Education: <span id="education">.......</span></td>
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
                </tr>
                <tr>
                    <td colspan="2">Mother: <span id="mother_1">.......</span></td>
                    <td colspan="2">Mobile No.: <span id="mobile_1">.......</span></td>
                    <td colspan="2">Status: <span id="status_1">.......</span></td>
                </tr>
                <tr>
                    <td colspan="2">Father: <span id="father_1">.......</span></td>
                    <td colspan="2">Relationship with the chief: <span id="relationship_1">.......</span></td>
                    <td rowspan="2" colspan="2" class="align-middle">Blood Group: <span id="blood-group_1">.......</span></td>
                    <td rowspan="2" class="align-middle">
                        <div>Work: <span id="work_1">.......</span></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Original surname: <span id="surname_1">.......</span></td>
                    <td colspan="2">Education: <span id="education_1">.......</span></td>
                </tr>
                <tr>
                    <td rowspan="2" class="text-center align-middle">Unmarried Child</td>
                    <td colspan="2">Name: .......</td>
                    <td colspan="2">Relationship with the chief: .......</td>
                    <td colspan="2">Unmarried: .......</td>
                       <td rowspan="2" class="align-middle">
                        <div>Work: .......</div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Age/Date of Birth: .......</td>
                    <td colspan="2">Mobile No.: .......</td>
                    <td colspan="2">Status: .......</td>
                 
                </tr>
                <tr>
                    <td rowspan="2" class="text-center align-middle">Unmarried Child</td>
                    <td colspan="2">Name: <span id="name_3">.........</span></td>
                    <td colspan="2">Relationship with the chief: .......</td>
                    <td colspan="2">Unmarried: <span id="unmarried_3">........</span></td>
                       <td rowspan="2" class="align-middle">
                        <div>Work: <span id="work_3">..........</span></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Age/Date of Birth: <span id="dob_3">...........</span></td>
                    <td colspan="2">Mobile No.: <span id="number_3">........</span></td>
                    <td colspan="2">Status: <span id="status_3">.......</span></td>
                 
                </tr>
                <tr>
                    <td rowspan="2" class="text-center align-middle">Unmarried Child</td>
                    <td colspan="2">Name: <span id="name_4">.......</span></td>
                    <td colspan="2">Relationship with the chief: <span id="">........</span></td>
                    <td colspan="2">Unmarried: <span id="">......</span></td>
                       <td rowspan="2" class="align-middle">
                        <div>Work: <span id="">......</span></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Age/Date of Birth: <span id="">.......</span></td>
                    <td colspan="2">Mobile No.: <span id="">.......</span></td>
                    <td colspan="2">Status: <span id="">.......</span></td>
                 
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
    document.getElementById('translate-icon').addEventListener('click', function(event) {
        event.preventDefault();
        this.parentNode.classList.toggle('active');
    });

    document.addEventListener('click', function(event) {
        var isClickInside = document.getElementById('translate-icon').contains(event.target);

        if (!isClickInside) {
            document.querySelector('.menu li').classList.remove('active');
        }
    });
</script>
</body>
</html>



