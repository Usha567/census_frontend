
<?php
    include 'includes/headertag.php';
    include 'includes/headerjs.php';
    // include 'jsfile/login.js';
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> 
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
  <script src="http://localhost:8080/census_project\jsfile\login.js"></script> 
    <title>Document</title>
</head>
<style>

  *::after {
    box-sizing: border-box;
  }

  body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    font-weight: 400;
    color: #666666;
    background: #eaeff4;
  }

  .wrapper {
    margin: 0 auto;
    width: 100%;
    max-width: 1140px;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
  }

  .container {
    position: relative;
    width: 100%;
    max-width: 730px;
    height: auto;
    display: flex;
    background: #ffffff;
    box-shadow: 0 0 15px rgba(0, 0, 0, .1);
    padding-left: var(--bs-gutter-x,.rem);

  }

  .credit {
    position: relative;
    margin: 25px auto 0 auto;
    width: 100%;
    text-align: center;
    color: #666666;
    font-size: 16px;
    font-weight: 400;
  }

  .credit a {
    color: #222222;
    font-size: 16px;
    font-weight: 600;
  }

  /* * * * * Login Form CSS * * * * */
  h2 {
    margin: 0 0 15px 0;
    font-size: 30px;
    font-weight: 700;
  }

  h2 img {
    width: 120px;
  }

  p {
    margin: 0 0 20px 0;
    font-size: 16px;
    font-weight: 500;
    line-height: 22px;
  }

  .btn {
    display: inline-block;
    padding: 7px 20px;
    font-size: 16px;
    letter-spacing: 1px;
    text-decoration: none;
    border-radius: 5px;
    color: #ffffff;
    outline: none;
    border: 1px solid #ffffff;
    transition: .3s;
    -webkit-transition: .3s;
  }

  .btn:hover {
    /* color: #4CAF50; */
    /* background: #ffffff; */
  }

  .col-left,
  .col-right {
    width: 55%;
    padding: 45px 35px;
    display: flex;
  }

  .col-left {
    width: 45%;
    /* background: #4CAF50; */
    background: linear-gradient(-170deg, rgb(73, 184, 197) 19%, rgb(27, 70, 136) 100%);

    -webkit-clip-path: polygon(98% 17%, 100% 34%, 98% 51%, 100% 68%, 98% 84%, 100% 100%, 0 100%, 0 0, 100% 0);
    clip-path: polygon(98% 17%, 100% 34%, 98% 51%, 100% 68%, 98% 84%, 100% 100%, 0 100%, 0 0, 100% 0);
  }

  @media(max-width: 575.98px) {
    .container {
      flex-direction: column;
      box-shadow: none;
    }

    .col-left,
    .col-right {
      width: 100%;
      margin: 0;
      padding: 30px;
      -webkit-clip-path: none;
      clip-path: none;
    }
  }

  .login-text {
    position: relative;
    width: 100%;
    color: #ffffff;
    text-align: center;
  }

  .login-form {
    position: relative;
    width: 100%;
    color: #666666;
  }

  .login-form p:last-child {
    margin: 0;
  }

  .login-form p a {
    color: #4CAF50;
    font-size: 14px;
    text-decoration: none;
  }

  .login-form p:last-child a:last-child {
    float: right;
  }

  .login-form label {
    display: block;
    width: 100%;
    margin-bottom: 2px;
    letter-spacing: .5px;
  }

  .login-form p:last-child label {
    width: 60%;
    float: left;
  }

  .login-form label span {
    color: #ff574e;
    padding-left: 2px;
  }

  .login-form input {
    display: block;
    width: 100%;
    height: 40px;
    padding: 0 10px;
    font-size: 16px;
    letter-spacing: 1px;
    outline: none;
    border: 1px solid #cccccc;
    border-radius: 5px;
  }

  .login-form input:focus {
    border-color: #ff574e;
  }

  .login-form input.btn {
    color: #ffffff;
    /* background: #4CAF50; */
    background: linear-gradient(-170deg, rgb(73, 184, 197) 19%, rgb(27, 70, 136) 100%);

    border-color: rgb(27, 70, 136);
    outline: none;
    cursor: pointer;
  }

  .login-form input.btn:hover {
    color: #4CAF50;
    background: #ffffff;
  }
    /* background: #4CAF50; */
  .role-group .form-check {
      display: inline-block;
      margin-right: 15px;
  }

  .role-group .form-check-input {
      width: 20px;
      height: 20px;
      margin-right: 5px;
  }
</style>
<body>
<?php
    // include 'jsfile/login.js';
   ?>
<div class="wrapper">
  <div class="container">
    <div class="col-left">
      <div class="login-text">
        <div class="logo mt-5">
          <h6 class="fw-bold text-white">"छीपा समाज शिक्षा और कैरियर" ग्रुप</h6>
          <h6 class="fw-bold text-white">छीपा (क्षत्रिय) समाज की जनगणना, वर्ष - 2024</h6>
          <h6 class="fw-bold text-white">(परिवार परिचय - पत्र)</h6>
        </div>
      </div>
    </div>
    <div class="col-right">
      <div class="login-form">
        <h2 class="text-center">Login</h2>
        <form id="loginForm">
          <div class="col-12">
            <label>Role<span class="text-danger">*</span></label>
            <div class="input-group role-group">
              <div class="form-check">
                  <input type="radio" id="admin" name="role" value="1" class="form-check-input">
                  <label for="admin" class="form-check-label">Admin</label>
              </div>
              <div class="form-check">
                  <input type="radio" id="agent" name="role" value="2" class="form-check-input">
                  <label for="agent" class="form-check-label">Jangadna Adhikari</label>
              </div>
            </div>
          </div>
          <div class="col-12 mt-2">
              <label>Username<span class="text-danger">*</span></label>
              <div class="input-group">
                  <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                  <input type="text" class="form-control" placeholder="Enter Username" id="username" required>
              </div>
          </div>
          <div class="col-12 mt-2" hidden>
            <label>Mobile No.:<span class="text-danger">*</span></label>
            <div class="input-group">
                <div class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <input type="text" class="form-control" placeholder="Enter Number" id="mobile">
            </div>
          </div>
          <div class="col-12 mt-2">
            <label>Password:<span class="text-danger">*</span></label>
              <div class="input-group">
                <div class="input-group-text"><i class="fas fa-eye-slash" id="eyeeye"></i></div>
                  <input type="password" class="form-control" placeholder="Enter Password" id="password" required>
                </div>
          </div>
          <div class="col-12 mt-5">
            <input class="btn" type="submit" value="Login" id="loginbtn"/>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>


<script>
 
</script>
