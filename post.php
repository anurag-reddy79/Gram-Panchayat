<!DOCTYPE html>
<html>
   <head>
      <title>Post Updates</title>
      <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="style.css">

      <style>
      	
header 
{
  background-color: #FF8040;
  padding: 10px;
  text-align: center;
  font-size: 35px;
  color: white;
  height:120px;
  border-radius: 25px;
}



input[type=submit]
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
    <a href="post.php"><i class="fa fa-fw fa-pen"></i>Post</a>
    <a href="pdocomp.php"><i class="fa fa-wrong" aria-hidden="true"></i>PDO Complaint</a>
    <a href="index.php"><i class="fa fa-fw fa-rocket"></i>Logout</a>
  </div>

 <ul>

 
<!--   END OF NAVBAR    -->
<br>
<header>
<h1><b><font color="black" size="8" class="fontstyle" >Post Latest Updates</font></h1>
</header>
	  <center>
      <form action = "modify" method = "get">
         
         <h2>The updates posted here can be viewed by all the users of the Gram Panchayat</h2>
         <br>
         <textarea rows = "20" cols = "100" name = "updates" placeholder="Enter updates here"></textarea>
            
         <br>
         <input type = "submit" value = "submit" onclick="alert('Submission Successfull');" /> 
      </form>
      </center>
   </body>
</html>