<?php include 'config.php'; ?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width , initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="style.css">
  <h2 class="h">Welcome to my page</h2>
</head>
<body id="b">

<div id="d">





<form  action="register.php"   method="post"  >

<img src="/web/images/nazmul.png"  class="img"  alt="registration page" >
<br>

  <label>User-Name</label>
  <input name="name" type="text" id="form"
placeholder="Enter your Name" required> </input>
<br>

<label>User-Email</label>
  <input name="email" type="text" id="form"
placeholder="Enter your email"  required> </input>
<br>
<label>User-Password</label>
  <input name="pass" type="text" id="form"
placeholder="Enter your password" required> </input>
<br>
<label>Confirmed-Password</label>
  <input name="cpass" type="text" id="form"
placeholder="confirmed your password"required > </input>

<input name="reg" type="submit" id="button"value="Signup"> </input>
<a href="login.php"><input name="back" type="button" id="button"
value="Back to Log in"> </input>




</form>


		
		
		
		




</div>
  
</body>
</html>

<?php
//coding 
if(empty($_POST['reg'])) die;

	
  
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];

// validation 
if( $pass != $cpass ){
  validation_message('Password does not matched', 'register.php');
  die();       
}
 

// Email validation
$sql = "SELECT `email` FROM `user` WHERE `email` = '{$email}'";
$result = $connection->query($sql);
if($result->num_rows > 0){	
  $connection->close();
  validation_message('User ALready Registered', 'login.php');    
  die();
}


// insert
$sql = "INSERT INTO `user` (`name`, `email`, `pas`) VALUES ('{$name}', '{$email}', '{$pass}')";
if ($connection->query($sql) === TRUE) {
  $connection->close();
  validation_message('New record created successfully', 'login.php');
   
}


  




 
   






