<?php
    include 'includes/headertag.php'; 
   ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900);
.contact-form {
  margin-top: 30px;
}
.contact-form .input-block {
  background-color: rgba(255, 255, 255, 0.8);
  border: solid 1px #FF512F;
  width: 100%;
  height: 30px;
  padding: 25px;
  position: relative;
  margin-bottom: 20px;
  -moz-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  -webkit-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}
.contact-form .input-block.focus {
  background-color: #fff;
  border: solid 1px #fb2900;
}
.contact-form .input-block.textarea {
  height: auto;
}
.contact-form .input-block.textarea .form-control {
  height: auto;
  resize: none;
}
.contact-form .input-block label {
  position: absolute;
  left: 25px;
  top: 25px;
  display: block;
  margin: 0;
  font-weight: 300;
  z-index: 1;
  color: #333;
  font-size: 18px;
  line-height: 10px;
}
.contact-form .input-block .form-control {
  background-color: transparent;
  padding: 0;
  border: none;
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  border-radius: 0;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  height: auto;
  position: relative;
  z-index: 2;
  font-size: 18px;
  color: #333;
}
.contact-form .input-block .form-control:focus label {
  top: 0;
}
.contact-form .square-button {
  background-color: rgba(255, 255, 255, 0.8);
  color: #fb2900;
  font-size: 26px;
  text-transform: uppercase;
  font-weight: 700;
  text-align: center;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  padding: 0 60px;
  height: 60px;
  border: none;
  width: 100%;
}
.contact-form .square-button:hover, .contact-form .square-button:focus {
  background-color: white;
}

@media (min-width: 768px) {
  .contact-wrap {
    width: 60%;
    margin: auto;
  }
}
/*----page styles---*/
body {
  /* background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuMCIgeTE9IjAuNSIgeDI9IjEuMCIgeTI9IjAuNSI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmNTEyZiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2RkMjQ3NiIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA=='); */
  background-size: 100%;
  background: linear-gradient(-170deg, rgb(27, 70, 136) 19%, rgb(73, 184, 197) 100%);

  font-family: 'Roboto', sans-serif;
}

.contact-wrap {
  padding: 15px;
}

h1 {
  background-color: white;
  color: #ff7c62;
  padding: 40px;
  margin: 0 0 50px;
  font-size: 30px;
  text-transform: uppercase;
  font-weight: 700;
  text-align: center;
}
h1 small {
  font-size: 18px;
  display: block;
  text-transform: none;
  font-weight: 300;
  margin-top: 10px;
  color: #ff7c62;
}

.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}
.main-section{
    background:#fff;
}
.image-census{
    height:150px;
}
  /* Dropdown container */
  .dropdown {
    position: relative;
    display: inline-block;
    
  }

  /* Dropdown menu */
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 148px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  /* Dropdown items */
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  /* Show the dropdown menu on hover */
  .dropdown:hover .dropdown-content {
    display: block;
  }

  /* Change color of dropdown links on hover */
  .dropdown-content a:hover {
    background-color: #f1f1f1
}
.dropdown button {

    color: white; 
    padding: 6px 7px;
    font-size: 16px; 
    border: none;
    cursor: pointer; 
    border-radius: 5px; 
    transition: background-color 0.3s; 
  }

  /* Add hover effect for button */
  .dropdown button:hover {
    background-color: #45a049; /* Darker green */
  }

  .main-container {
    width: auto;
    height: 100px;
    /* background-image: linear-gradient(to bottom, lightseagreen, lightblue); */
    background: linear-gradient(-170deg, rgb(27, 70, 136) 19%, rgb(73, 184, 197) 100%);
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    color: #fff;
    padding: 2rem;
    box-shadow: 0 0 0.5rem saddlebrown;
}

.container__logo {
    color: #000;
    font-size: 1.5rem;
    letter-spacing: 0.5rem;
    font-weight: 900;
    text-shadow: 0 0 1px #000;
    font-variant: small-caps;
    animation: move 2s ease-in-out 0s 1;
}

/* Add media query for screens smaller than a certain size */
@media (max-width: 768px) {
    .container__logo img {
        max-width: 100%; /* Set the maximum width to 100% */
        height: auto; /* Allow the height to adjust proportionally */
        margin: top 3px;
    }
}

</style>
<body>
<!-- <div class="container-fluid main-container">
    <div class="row w-100">
        <div class="col-6">
            <div class="container__logo">
                <img src="http://localhost:8080\census_project\assets\images\Census_Logo-preview.png" alt="" class="customer-image">
            </div>
        </div>
        <div class="col-6 text-right mt-3">
            <div class="language-dropdown"> 
             
                <select id="language-select"> <i class="fas fa-caret-down" style="font-size: 1rem !important;"></i>
                    <option value="selected disable" disabled selected>Language</option>
                    <option value="english">English</option>
                    <option value="hindi">Hindi</option>
                </select>
            </div>
        </div>
    </div>
</div> -->

    <section class="main-section">
        <div class="text-center">
        <img src="http://localhost:8080\census_project\assets\images\IMG-20240527-WA0005.jpg" alt="" class="w-75  text-center image-census">

        </div>
    </section>
    <div class="container-fluid text-right">
      <div class="dropdown mt-4">
        <button class="bg-info">Select Language <i class="fas fa-caret-down"></i></button>
        <div class="dropdown-content text-center">
          <a href="#" onclick="setLanguage('en')">English</a>
          <a href="#" onclick="setLanguage('hi')">Hindi</a>
        </div>
      </div>
    </div>
<section class="contact-wrap">
    <form id="dealership_enq_from" class="form-view-inner form-view-overlay bg-light box-shadow p-3" action="" method="" >
        <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                <div class="form-outline">
                    <label for="yr_state" class="form-label text-dark fw-bold ">State</label>
                    <select class="form-select py-2 state-dropdown" id="state_s" name="_state"aria-label=".form-select-lg example"required>
                      <option value="" selected disabled="">Select State</option>
                      <option value="chhattisgarh">Chhattisgarh</option>
                      <option value="madhyapradesh">MadhyaPradesh</option>
                      <option value="maharashtra">Maharashtra</option>
                      <option value="karnataka">Karnataka</option>
                      <option value="odisha">Odisha</option>
                      <option value="gujarat">Gujarat</option>
                   
                    </select>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                <div class="form-outline">
                    <label for="yr_state" class="form-label text-dark fw-bold ">District</label>
                    <select class="form-select py-2 state-dropdown" id="state_s" name="_state"aria-label=".form-select-lg example" required>
                      <option value="" selected disabled="">Select District</option>
                      <option value="durg">Durg</option>
                      <option value="bhilai">Bhilai</option>
                      <option value="dhamdha">Dhamdha</option>
                      <option value="raipur">Raipur</option>
                      <option value="indore">Indore</option>
                      <option value="dewas">Dewas</option>
                      <option value="ujjain">Ujjain</option>
                      <option value="indore">Indore</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                <div class="form-outline">
                    <label for="city" class="form-label text-dark fw-bold">City</label>
                    <select class="form-select py-2" id="city" name="city"aria-label=".form-select-lg example" required>
                    <option value="" selected disabled="">Select City</option>
                    <option value="bhilai">Bhilai</option>
                      <option value="dhamdha">Dhamdha</option>
                      <option value="raipur">Raipur</option>
                      <option value="indore">Indore</option>
                      <option value="dewas">Dewas</option>
                      <option value="ujjain">Ujjain</option>        
                    </select>    
                </div>  
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                <div class="form-outline">
                    <label for="f_name" class="form-label mb-0 py-1 text-dark fw-bold">ID Number</label>
                    <input type="text" class="form-control mb-0" placeholder="Enter Your Name"  id="f_name_1" name="f_name" required>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                <label for="a_hrvst" class="form-label text-dark  fw-bold">Native address</label>
                    <textarea class="form-control" rows="3" placeholder="Enter Location" name="about" id="about" onkeydown="return /[a-zA-Z\s]/i.test(event.key)"  oninput="limitWords(this, 200)" required></textarea>
            </div>
            <div class="text-center  my-3">
                <button type="submit" id="delership_enq_btn" class="btn submit-button bg-info mt-1 px-5 w-100" data-bs-toggle="modal" data-bs-target="get_OTP_btn">Submit</button>         
            </div>        
        </div>
    </form>
  <!-- <form action="" class="contact-form">
    <div class="row">
    <div class="col-sm-6">
      <div class="input-block">
        <label for="">First Name</label>
        <input type="text" class="form-control">
      </div>
    </div>
    <div class="col-sm-6">
      <div class="input-block">
        <label for="">Last Name</label>
        <input type="text" class="form-control">
      </div>
    </div>
    <div class="col-sm-12">
          <div class="input-block">
            <label for="message-subject">Message Subject</label>
            <input type="text" id="message-subject" class="form-control">
          </div>
        </div>

    <div class="col-sm-6">
      <div class="input-block">
        <label for="">Last Name</label>
        <input type="text" class="form-control">
      </div>
    </div>
    <div class="col-sm-6">
      <div class="input-block">
        <label for="">Last Name</label>
        <input type="text" class="form-control">
      </div>
    </div>
    <div class="col-sm-6">
      <div class="input-block">
        <label for="">Last Name</label>
        <input type="text" class="form-control">
      </div>
    </div>
    <div class="col-sm-12">
      <div class="input-block">
        <label for="">Email</label>
        <input type="text" class="form-control">
      </div>
    </div>
    <div class="col-sm-12">
      <div class="input-block">
        <label for="">Message Subject</label>
        <input type="text" class="form-control">
      </div>
    </div>
    <div class="col-sm-12">
      <div class="input-block textarea">
        <label for="">Drop your message here</label>
        <textarea rows="3" type="text" class="form-control"></textarea>
      </div>
    </div>
    <div class="col-sm-12">
      <button class="square-button">Send</button>
    </div>
    </div>
  </form> -->
</section>
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