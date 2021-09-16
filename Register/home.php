<?php
 include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width , initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="style.css">
  <h2 class="h">Welcome to my Home page</h2>
</head>
<body id="b">

<div id="d">





<form  action="reg.php"   method="post"  >

<img src="/web/images/home.jpg"  class="img"  alt="registration page" >
<input name="logout" type="submit" id="button"value="Log-Out"> </input>







</form>
<?php
  if(isset($_POST['logout'])){
	  
	  echo"
				<script>
				alert('You are Successfully  Logged out');
				window.location.href='login.php';
				</script>
				";
				
	  
	  
  }else{}





?>



</div>
  
</body>
</html>

 
   






