<html>
<head>
<title>REGISTRATION FORM</title>
<link rel="stylesheet" type="text/css" href="style3.css">
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
<style>
  .topnav {
    overflow: hidden;
    /*background-color: rgb(25, 36, 184);*/
    background-color: white;
  }

  .topnav a {
    float: left;
    color: BLACK;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    width: 25%;
    text-align: center;
    font-size: 25px;
  }

  .topnav a:hover {

    color: #FF3B3F;
  }

  .topnav a:active {

    color: #FF3B3F;
  }

  @media screen and (max-width: 1200px) {
    .navbar a {
      float: none;
      display: block;
      width: 100%;
      text-align: left;
    }
  }
</style>
</head>
<body>
  <div style="padding:10px">
    <img src="images/pic1.jpg" alt="image1" height="150px">
    <img src="images/header-image.png" alt="image2" height="150px" width="35%">
    <img src="images/-Pt-Jawaharlal-Nehru-logo.png" height="150px" width="35%">
    <img src="images/mopr-logo.png" style="float:right" alt="image3" height="150px" width="22%">
  </div>
  <div class="topnav">
    <a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a>
    <a href="login.php"><i class="fa fa-fw fa-home"></i>Login</a>
    <a href="contactus.php"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>
    <a href="about.php"><i class="fa fa-fw fa-info"></i>About</a>
    <br>
    <br>
  </div>
<br>
<br>
<br>
<div class="login">
<h1><b>REGISTRATION</h1>
<form  action="regdata.php" method="POST">
<p>Username</p>
 <input type="text" name="username" placeholder="enter name" required>
<p>Password</p>
<input type="password" name="password1" palceholder="enter password" required>
<p>Re Password</p>
<input type="password" name="password2" required>
<p>Aadharcard number</p>
<input type="text" name="Adharcardno" required>
<p>Phone Number</p>
<input type="text" name="phone_no" placeholder="enter number" required>
<p>Role</p>
<input type="text" name="role" placeholder="enter role as user" required>
<input type="submit" value="submit" >
</form>
</div>
</div>
</body>
</html>







