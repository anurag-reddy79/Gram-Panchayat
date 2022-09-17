<html lang="en">
<head>
<title>complaint</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}


header {
  background-color: #FF8040;
  padding: 10px;
  text-align: center;
  font-size: 35px;
  color: white;
  height:120px;
  border-radius: 25px;
}



article {
  float: left;
  padding: 40px;
  width: 100%;
 
  height: 450px; 
}


section:after {
  content: "";
  display: table;
  clear: both;
}




 (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}

input[type=text] {
  width: 100%;
  padding: 8px 25px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid orange;
  border-radius: 10px;
}
 input[type=submit], input[type=reset] {
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

<link rel="stylesheet" type="text/css" href="style.css">

</head>





<body>

<!--   START OF NAVBAR   -->

<div style="padding:10px">
    <img src="images/pic1.jpg" alt="image1" height="150px">
    <img src="images/header-image.png" alt="image2" height="150px" width="35%">
    <img src="images/-Pt-Jawaharlal-Nehru-logo.png" height="150px" width="35%">
    <img src="images/mopr-logo.png" style="float:right" alt="image3" height="150px" width="22%">
  </div>
  <div class="topnav">
    <a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a>
    <a href="about.php"><i class="fa fa-rocket" aria-hidden="true"></i>About</a>
    <a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>
    <a href="index.php"><i class="fa fa-fw fa-info"></i>Logout</a>
  </div>   


 
<!--   END OF NAVBAR    -->
<br><br>
<center>
<header>
<h1><b><font color="white" size="8" class="fontstyle" >Complaint</font></h1>
</header>
<section>
 <article>
<form action="compdata.php" method="POST">
<table>
<tr>
<td style="margin:10px; padding:5px;"><big><b>Name*</b></big></td>
<td> <input type="text" name="name" required></td>
</tr>
<tr>
<td style="margin:10px; padding:5px;"><big><b>Phone No*</b></big></td>
<td> <input type="text" name="phoneno" required></td>
</tr>
<tr>
<td style="margin:10px; padding:5px;"><big><b>Email id</big></td>
<td> <input type="text" name="email" required></td>
</tr>
<tr>
<td style="margin:10px; padding:10px;"><big><b>Complaint</b></big>
</td>
<td> <input type="text" name="complaintname" required> </td>
</tr>
<tr></tr>
<tr>
<td></td>
<td> <input type="submit" value="submit"></td>
<td> <input type="submit" value="cancel"></td>
</tr>
</table>
</br>
</br>
</br>
<div class="button">
<a href="index.php">Back to home</a>

</div>
</article>
</section>

</body>
</html>
