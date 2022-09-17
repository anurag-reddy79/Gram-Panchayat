<html lang="en">
<head>
<title>Water Tax</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

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

footer {
  background-color: #FF8040;
  padding: 15px ;
  text-align: center;
  color: white;
  height:60px;
}


 (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
input[type=text] {
  width: 20%;
  padding: 8px 25px;
  margin: 6px 0;
  box-sizing: border-box;
  border: 2px solid #FF8040;
  border-radius: 4px;
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
<body>
  <!--   START OF NAVBAR    -->
  <div style="padding:10px">
    <img src="images/pic1.jpg" alt="image1" height="150px">
    <img src="images/header-image.png" alt="image2" height="150px" width="35%">
    <img src="images/-Pt-Jawaharlal-Nehru-logo.png" height="150px" width="35%">
    <img src="images/mopr-logo.png" style="float:right" alt="image3" height="150px" width="22%">
  </div>
  <div class="topnav">
    <a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a>
    <a href="services2.php"><i class="fa fa-fw fa-home"></i>Services</a>
    <a href="complaint.php"><i class="fa fa-rocket" aria-hidden="true"></i>Complaint</a>
    <a href="logout.php"><i class="fa fa-fw fa-envelope"></i> Logout</a>
    
  </div>
   <br>
   <br>
   <br>
<!--   END OF NAVBAR    -->


<br>
<center>
<header>
<h1><b><font color="black" size="8" class="fontstyle" >Water Tax</font></h1>

</header>
<section>
 <article>
   <form action="waterdata.php" method="POST">
</br></br></br>
 <label class="vandana"><big><b>Connection no*</b></big></label>
 &nbsp; &nbsp;<input type="text" name="connectionno" required>
</br></br></br>
<input type="submit">

</form>
  </article>
</section>
</center>
<button type="back" onclick="window.location.href='housetax.php'"><i class="fa fa-arrow-left" style="color: #FFFFFF;" aria-hidden="true"></i>  </a>BACK</button>

<footer>
 
</footer>

</body>
</html>
