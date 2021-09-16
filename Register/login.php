<?php
 include 'config.php'; 
 phpinfo();
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width , initial-scale=1.0">
  <title>Log-In</title>
  <link rel="stylesheet" href="style.css">
  <h2 class="h">Welcome to my login image</h2>
</head>
<body id="b">

<div id="d">





<form  action="register.php"   method="post"  >

<img src="/web/images/login.jpg"  class="img"  alt="registration page" >
<br>
<br>



<label><b>User-Email</b</label>
  <input name="email" type="text" id="form"
placeholder="Enter your email"  required> </input>
<br>
<label>User-Password</label>
  <input name="pass" type="text" id="form"
placeholder="Enter your password" required> </input>
<br>

<br>
<br>
<input name="log-in" type="submit" id="button"value="Signup"> </input>
<a href="register.php"><input name="reg" type="button" id="button"
value="Registration"> </input>




</form>
<?php

    if(isset($_POST['login'])){
		
		$email= $_POST['email'];
		$pass=$_POST['pas'];
		
		$check = "select*from user where email='$email' AND password ='$pass'";
		$check_work= mysqli_query($con,$check);
		
		if($check_work){
			if(mysqli_num_rows($check_work) > 0 ){
				
				echo"
				<script>
				alert('You are Successfully  Logged in');
				window.location.href='home.php';
				</script>
				";
				
			}else{
				
				echo"
				<script>
				alert('Password or Email not Found ');
				window.location.href('register.php');
				</script>
				";
			}
			
			
		}else{
			
			
				echo"
				<script>
				alert('Database Error  ');
				window.location.href('register.php');
				</script>
				";
		}
		
		
		
	}else{
		
		
	}





?>


</div>
  
</body>
</html>

 
   






