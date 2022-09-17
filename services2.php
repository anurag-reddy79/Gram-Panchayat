<html>
<head>
<title>SERVICES</title>
<style type="text/css">
.fontstyle {
	font-family: Arial Black, Gadget, sans-serif;
}
.vs {
	font-family: Courier New, Courier, monospace;
}
.vs {
	font-family: Courier New, Courier, monospace;
}
.stylecss {
	font-family: Lucida Sans Unicode, Lucida Grande, sans-serif;
}
.stylecss {
	font-family: Palatino Linotype, Book Antiqua, Palatino, serif;
}
.stylecss {
	font-family: Palatino Linotype, Book Antiqua, Palatino, serif;
}
.stylecss {
	font-family: Palatino Linotype, Book Antiqua, Palatino, serif;
}
body {
  font-family: Arial, Helvetica, sans-serif;
}
#sectionone,#sectionthree{
display:inline;
}
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
  border-radius: 25px;
  display:block;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  border-radius: 25px;
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  border-radius: 25px;

}

.flip-card-front {
  background-color: #333333;
  color: black;
  border-radius: 25px;
}

.flip-card-back {
  background-color: #FF8040;
  color: white;
  transform: rotateY(180deg);
}
.container .box { 
                width:540px; 
                margin:50px; 
                display:table; 
            } 
            .container .box .box-row { 
                display:table-row; 
            } 
            .container .box .box-cell { 
                display:table-cell; 
                width:33%; 
                padding:10px; 
            } 
            .container .box .box-cell.box1 { 
                background:green; 
                color:white; 
                text-align:justify; 
            } 
            .container .box .box-cell.box2 { 
                background:lightgreen; 
                text-align:justify 
            } 
            .container .box .box-cell.box3 { 
                background:lime; 
                text-align:justify; 
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
    header {
  background-color: #FF8040;
  padding: 4px;

  text-align: center;
  font-size: 35px;
  color: white;
  height:100px;
}
.main{
  display:inline-block;
  padding-right:140px;
  padding-left:140px;
}


</style>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

<body  >
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
    <a href="home.php"><i class="fa fa-fw fa-rocket"></i>Logout</a>
  </div>
   
 
<header>
<h1><b><font color="black" size="8" class="fontstyle" >SERVICES</font></h1>
</header>

<div class="main">
      <h1>HOUSE TAX</h1> 
      <p>pay your house tax here</p>
      <br>
      <button onclick="window.location.href='housetax.php'"><h3>Pay Tax</h3></button>      
</div>

<div class="main">
      <h1>WATER TAX</h1> 
      <p>pay your water tax here</p>
      <br>
      <button onclick="window.location.href='waterbill.php'"><h3>Pay Tax</h3></button>      
</div>   
<div class="main">
      <h1>WEALTH TAX</h1> 
      <p>pay your wealth tax here</p>
      <br>
      <button onclick="window.location.href='wealthtax.php'"><h3>Pay Tax</h3></button>      
</div>

</body>
</html>

