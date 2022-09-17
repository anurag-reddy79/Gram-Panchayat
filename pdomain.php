<!doctype html>
	<html>
		<head>
			<title>PDO Home</title>
			<!--   Visit this site for fonts https://fontawesome.com/v4.7/icons/ (line 7) -->
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
			<link rel="stylesheet" type="text/css" href="style.css">
      
<style>
.card {
	position: relative;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 50%;               
  margin-left: 20px;
  border-radius: 5px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
}

button[type=back]
 {
  background-color: #FF8040;
  border: none;
  color: white;
  font size:8px;
  padding: 12px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 15px;

 }
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

    

</style>


		</head>

		<body background="#F1F1F1">
<!--   START OF NAVBAR   -->
<div style="padding:10px">
    <img src="images/pic1.jpg" alt="image1" height="150px">
    <img src="images/header-image.png" alt="image2" height="150px" width="35%">
    <img src="images/-Pt-Jawaharlal-Nehru-logo.png" height="150px" width="35%">
    <img src="images/mopr-logo.png" style="float:right" alt="image3" height="150px" width="22%">
  </div>
       
       <div class="topnav">
    <a href="pdomain.php"><i class="fa fa-fw fa-home"></i>Home</a>
    <a href="post.php"><i class="fa fa-fw fa-pen"></i>Post</a>
    <a href="pdocomp.php"><i class="fa fa-rocket" aria-hidden="true"></i>Register</a>
    <a href="login.html"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>
  </div>
 
<!--   END OF NAVBAR    -->


<br><br><br><br><br>
<!-- <div class="containerpdo">   use if #ddd is needed in bg  -->
<center>
<div class="card">
	<a href="userslist.php">  <i class="fa fa-users" style="font-size:200px; color: #FF8040;" aria-hidden="true"></i>  </a>
  <!--  <img src="img_avatar2.png" alt="Avatar" style="width:100%">   -->
  <div class="container">
    <h1 style="letter-spacing: 10px;"><b><center>USERS</center></b></h1> 
      <!--  <p>view users as button</p>  
    <div class="button1">  <a href="pdetails.php">PAID DETAILS</a>  </div>  <br><br><br>
  <div class="button2">  <a href="udetails.php">UNPAID DETAILS</a> </div>  -->
  </div>
</div>
<br>
<br>
<div class="card">
	<a href="userdetails.php"> <i class="fa fa-list-alt" aria-hidden="true" style="font-size:200px; color: #FF8040;" aria-hidden="true"></i>  </a>
  <div class="container">
    <h1 style="letter-spacing: 10px;"><b><center>DETAILS</center></b></h1> 
     
  </div>
</div>
</center>

<button type="back" onclick="window.location.href='index.php'"><i class="fa fa-cog fa-spin fa-1x fa-fw" style="color: #FFFFFF;" aria-hidden="true"></i>  </a>LOGOUT</button>

		</body>
</html>