<!DOCTYPE html>
<html>
<head>
  <title>User Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

button[type=back]
 {
  background-color: #BBBBBB;
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
    <a href="complaint.php"><i class="fa fa-fw fa-info"></i>Complaint</a>
    <a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>
    <a href="index.php"><i class="fa fa-fw fa-info"></i>About</a>
  </div>
 
<!--   END OF NAVBAR    -->

<center><h1>House Tax</h1></center>
<div class="row">
  <div class="column" style="background-color:#aaa;">
    <center><h2>Total Users</h2></center>
   <!--  <p>Some text..</p> -->

    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username FROM registration WHERE role= 'user' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "Name: ". $row["username"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>




  </div>
  <div class="column" style="background-color:#bbb;">
    <center><h2>Paid Users</h2></center>
    <!-- <p>Some text..</p> -->
      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ownername FROM housetax WHERE status= 'paid' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "Name: ". $row["username"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
  </div>
  <div class="column" style="background-color:#ccc;">
    <center><h2>Unpaid Users</h2></center>
     
      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ownername FROM housetax WHERE status= 'unpaid' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "Name: ". $row["ownername"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
  </div>
</div>


<br><br><br>


<center><h1>Wealth Tax</h1></center>
<div class="row">
  <div class="column" style="background-color:#aaa;">
    <center><h2>Total Users</h2></center>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username FROM registration WHERE role= 'user' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "Name: ". $row["username"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
  </div>
  <div class="column" style="background-color:#bbb;">
    <center><h2>Paid Users</h2></center>
      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Name FROM wealthtax WHERE status= 'paid' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "Name: ". $row["Name"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
  </div>
  <div class="column" style="background-color:#ccc;">
    <center><h2>Unpaid Users</h2></center>
    
      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Name FROM wealthtax WHERE status= 'unpaid' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "Name: ". $row["Name"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
  </div>
</div>


<br><br><br>


<center><h1>Water Tax</h1></center>
<div class="row">
  <div class="column" style="background-color:#aaa;">
    <center><h2>Total Users</h2></center>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username FROM registration WHERE role= 'user' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "Name: ". $row["username"]. "<br>";
    }
}
 else {
    echo "0 results";
}

$conn->close();
?>
  </div>
  <div class="column" style="background-color:#bbb;">
    <center><h2>Paid Users</h2></center>
    <!-- <p>Some text..</p> -->
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name FROM watertax WHERE status= 'paid' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "Name: ". $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
  </div>
  <div class="column" style="background-color:#ccc;">
    <center><h2>Unpaid Users</h2></center>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name FROM watertax WHERE status= 'unpaid' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "Name: ". $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
  </div>
</div>

<button type="back" onclick="goBack()"><i class="fa fa-arrow-left" style="color: #FFFFFF;" aria-hidden="true"></i>  </a>BACK</button>


<script>
function goBack() {
  window.history.back();
}
</script>


</body>
</html>
