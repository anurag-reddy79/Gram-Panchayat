 <html>
<head>
<title>LOGIN FORM</title>
<script>
function validate()
{ 
   if( document.log.username.value == "" )
   {
     alert( "Please provide the name!" );
     document.log.name.focus() ;
     return false;
   }
   if( document.log.password.value == "" )
   {
     alert( "Please provide password!" );
     document.log.password.focus() ;
     return false;
   }
   

}
</script>
<link rel="stylesheet" type="text/css" href="style4.css">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
  .login{
 background:#EFEFEF;
 box-shadow: 5px 20px 50px #000;
  }
  body{
 background:#EFEFEF;
  }
</style>

</head>
<body background="https://backgroundcheckall.com/wp-content/uploads/2017/12/good-background-images-for-login-page.jpg">
  <!--   START OF NAVBAR    -->

   
  <div style="padding:10px">
    <img src="images/pic1.jpg" alt="image1" height="150px">
    <img src="images/header-image.png" alt="image2" height="150px" width="35%">
    <img src="images/-Pt-Jawaharlal-Nehru-logo.png" height="150px" width="35%">
    <img src="images/mopr-logo.png" style="float:right" alt="image3" height="150px" width="22%">
  </div>
  
<!--   END OF NAVBAR    -->
<br>
<br>
<div class="login">
<img src="https://achieve.lausd.net/cms/lib/CA01000043/Centricity/domain/779/welligentbuttons/login.png" class="avathar">
<h1>LOGIN </h1>
<form  action="data.php"  method="POST">
<p>Username</p>
 <input type="text" name="username1" placeholder="enter username" required>

<p>Password</p>
<input type="password" name="password" placeholder="enter password" required>
<input type="submit" value="submit" name="submit" > &nbsp;&nbsp;&nbsp;</br>

<a href="#" onclick="alert('Try to remember, I can do nothing for that!');">Forgot password ? </a>
</br></br></br></br></br>
<div class="button1">
<a href="index.php">Home</a>
</div>
</form>
<?php 
session_start();
if(isset($_POST['su']))
{
  mysqli_connect('localhost','root') or die(mysqli_error());
}
?>
</div>
</body>

</html>