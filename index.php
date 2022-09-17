<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  
  <title>GPIS</title>
  <style>
    .topnav {
      overflow: hidden;
      background-color: white;
    }

    .topnav a {
      float: left;
      color: BLACK;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      width: 20%;
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

    .footer-dark {
      padding: 50px 0;
      color: black;
      /*background-color: #282d32;*/
      background-color: #EFEFEF;

    }

    .footer-dark h3 {
      margin-top: 0;
      margin-bottom: 12px;
      font-weight: bold;
      font-size: 16px;
    }

    .footer-dark ul {
      padding: 0;
      list-style: none;
      line-height: 1.6;
      font-size: 14px;
      margin-bottom: 0;
    }

    .footer-dark ul a {
      color: inherit;
      text-decoration: none;
      opacity: 0.6;
    }

    .footer-dark ul a:hover {
      opacity: 0.8;
    }

    @media (max-width:767px) {
      .footer-dark .item:not(.social) {
        text-align: center;
        /*padding-bottom: 20px;*/
      }
    }

    .footer-dark .item.text {
      margin-bottom: 36px;
    }

    @media (max-width:767px) {
      .footer-dark .item.text {
        margin-bottom: 0;
      }
    }

    .footer-dark .item.text p {
      opacity: 0.6;
      margin-bottom: 0;
    }

    .footer-dark .item.social {
      text-align: center;
    }

    @media (max-width:991px) {
      .footer-dark .item.social {
        text-align: center;
        margin-top: 20px;
      }
    }

    .footer-dark .item.social>a {
      font-size: 20px;
      width: 36px;
      height: 36px;
      line-height: 36px;
      display: inline-block;
      text-align: center;
      border-radius: 50%;
      box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.4);
      margin: 0 8px;
      color: #FF3B3F;
      opacity: 0.75;
    }

    .footer-dark .item.social>a:hover {
      opacity: 0.9;
    }

    .footer-dark .copyright {
      text-align: center;
      padding-top: 24px;
      opacity: 0.3;
      font-size: 13px;
      margin-bottom: 0;
    }

    .main {
      width: 350px;
      height: 500px;
      background: red;
      overflow: hidden;
      background-color: #EFEFEF;
      border-radius: 10px;
      box-shadow: 5px 20px 50px #000;
    }

    #chk {
      display: none;
    }

    .signup {
      position: relative;
      width: 100%;
      height: 100%;
    }

    label {
      color: BLACK;
      font-size: 2.1em;
      justify-content: center;
      display: flex;
      margin: 60px;
      font-weight: bold;
      cursor: pointer;
      transition: .5s ease-in-out;
    }

    input {
      width: 60%;
      height: 35px;
      background: #e0dede;
      justify-content: center;
      display: flex;
      margin: 20px auto;
      padding: 10px;
      border: none;
      outline: none;
      border-radius: 5px;
    }

    button {
      width: 60%;
      height: 40px;
      margin: 10px auto;
      justify-content: center;
      display: block;
      color: WHITE;
      background: #FF3B3F;
      font-size: 1em;
      font-weight: bold;
      margin-top: 20px;
      outline: none;
      border: none;
      border-radius: 5px;
      transition: .2s ease-in;
      cursor: pointer;
    }

    button:hover {
      background: #A9A9A9;
      color: #FF3B3F;
    }

    .login {
      height: 460px;
      background: #eee;
      border-radius: 60% / 10%;
      transform: translateY(-180px);
      transition: .8s ease-in-out;
    }

    .login label {
      color: #CAEBF2;
      transform: scale(.6);
    }

    #chk:checked~.login {
      transform: translateY(-500px);
    }

    #chk:checked~.login label {
      transform: scale(1);
    }

    #chk:checked~.signup label {
      transform: scale(.6);
    }

    h2{
      color: black;
      padding-right: 60px;
      padding-left: 100px;
    }

    .body1 {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      font-family: 'Jost', sans-serif;
      background-color: #EFEFEF;
    }

    .copyright {
      color: black;
    }


    @import url(https://fonts.googleapis.com/css?family=Istok+Web);
@keyframes slidy {
0% { left: 0%; }
20% { left: 0%; }
25% { left: -100%; }
45% { left: -100%; }
50% { left: -200%; }
70% { left: -200%; }
75% { left: -300%; }
95% { left: -300%; }
100% { left: -400%; }
}

 figure { 
  margin: 0; background: #101010;
  font-family: Istok Web, sans-serif;
  font-weight: 100;
  align:center;
}
div#captioned-gallery { 
  width: 100%; overflow: hidden; 
  align:center;
}
figure.slider { 
  position: relative; width: 500%;
  font-size: 0; animation: 10s slidy; 
  align:center;
}
figure.slider figure { 
  width: 20%; height: auto;
  display: inline-block;  position: inherit; 
  align:center;
}
figure.slider .img1 { width: 100%; height: 600px; align:center;}
figure.slider figure figcaption { 
  position: absolute; bottom: 0;
  background: rgba(0,0,0,0.4);
   width: 100%;
  font-size: 2rem; padding: .6rem; 
  align:center;
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
    <a href="#index.php"><i class="fa fa-fw fa-home"></i>Home</a>
    <a href="login.php"><i class="fa fa-fw fa-home"></i>Login</a>
    <a href="register.php"><i class="fa fa-rocket" aria-hidden="true"></i>Register</a>
    <a href="contactus.php"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>
    <a href="about.php"><i class="fa fa-fw fa-info"></i>About</a>
  </div>

   
  </div>

  <marquee direction="right" style="font-size: 50px;color: red;">Welcome To Gram Panchayati Raj</marquee>
  <script>
    function validateform() {
      var aadharno = document.myform.ano.value;
      var password = document.myform.password.value;
      if (aadharno == "admin" && password == 1234) {
        return true;
      }
      else if (aadharno == null || aadharno == "") {
        alert("Name can't be blank");
        return false;
      } else if (password.length < 6) {
        alert("Password must be at least 6 characters long.");
        return false;
      }
    }  
  </script>
  

  
    <base >
<div id="captioned-gallery">
	<figure class="slider">
		<figure>
			<img class="img1" src="images/img1.png" alt>
			
		</figure>
		<figure>
			<img class="img1" src="images/img1.png" alt>
	
		</figure>
		<figure>
			<img  class="img1" src="images/img1.png" alt>
			
		</figure>
		<figure>
			<img class="img1" src="images/img1.png" alt>

		</figure>
		<figure>
			<img class="img1" src="images/img1.png" alt>
		</figure>
	</figure>
</div>
    




  <div class="footer-dark">
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3 item">
            <h3>Services</h3>
            <ul>
              <li><a href="#">Tax Collection</a></li>
              <li><a href="#">Development</a></li>
              <li><a href="#">Recruitment</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-3 item">
            <h3>About</h3>
            <ul>
              <li><a href="#">Company</a></li>
              <li><a href="#">Team</a></li>
              <li><a href="#">Careers</a></li>
            </ul>
          </div>
          <div class="col-md-6 item text">
            <h3>Company Name</h3>
            <p>
              The state is the eighth largest state in India covering an area of 160,205 km2(61,855 sq mi).
              As per 2011 census of India, the state is tenth largest by population with 49,386,799 inhabitants.
              In accordance with the Andhra Pradesh Reorganisation Act, 2014.
            </p>
          </div>
          <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i
                class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a
              href="#"><i class="icon ion-social-instagram"></i></a></div>
        </div>
        <p class="copyright" style="color: black;">Gram Panchayat © 2022</p>
      </div>
    </footer>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE DATABASE IF NOT EXISTS project";
if ($conn->query($sql) === TRUE) {
//echo "Database created successfully";

mysqli_select_db($conn,"project");
//Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE TABLE IF NOT EXISTS registration( username VARCHAR(30) NOT NULL , password1 VARCHAR(10) NOT NULL , password2 VARCHAR(10) NOT NULL ,
 Adharcardno INT(12) NOT NULL , phone_no INT(10) NOT NULL ,  role VARCHAR(5) NOT NULL)";

if ($conn->query($sql) === TRUE) {
//echo "Table created successfully";
} else {
//echo "Error creating table: " . $conn->error;
}


$sql="INSERT INTO `registration`(`username`, `password1`, `password2`, `Adharcardno`, `phone_no`, `role`) VALUES ('officer','admin','admin','0','0','pdo')";
if ($conn->query($sql) === TRUE) {
//echo "Table created successfully";
} else {
//echo "Error creating table: " . $conn->error;
}

$sql="INSERT INTO `registration`(`username`, `password1`, `password2`, `Adharcardno`, `phone_no`, `role`) VALUES ('admin','admin','admin','0','0','admin')";
if ($conn->query($sql) === TRUE) {
//echo "Table created successfully";
} else {
//echo "Error creating table: " . $conn->error;
}


$sql = "CREATE TABLE IF NOT EXISTS housetax(Assessmentno INT(10) NOT NULL , Ownername VARCHAR(10) NOT NULL, amount INT(10) NOT NULL,status VARCHAR(6) NOT NULL)";
if ($conn->query($sql) === TRUE) {
//echo "Table created successfully";
} else {
//echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS watertax(Connectionno INT(10) NOT NULL , Name VARCHAR(10) NOT NULL,Amount INT(10) NOT NULL,status VARCHAR(6) NOT NULL)";
if ($conn->query($sql) === TRUE) {
//echo "Table created successfully";
} else {
//echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS wealthtax(paccno INT(10) NOT NULL , Assessmentyr INT(4) NOT NULL , Name VARCHAR(10) NOT NULL , Amount INT(10) NOT NULL,status VARCHAR(6) NOT NULL)";
if ($conn->query($sql) === TRUE) {
//echo "Table created successfully";
} else {
//echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS complaint(name VARCHAR(15) NOT NULL , phoneno INT(10) NOT NULL ,email VARCHAR(25) NOT NULL , complaintname VARCHAR(100) NOT NULL)";
if ($conn->query($sql) === TRUE) {
//echo "Table created successfully";
} else {
//echo "Error creating table: " . $conn->error;
}
$conn->close();
}
?>

</html>