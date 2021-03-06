<?php
require_once '../../../BusinessServiceLayer/controller/runnerController.php';

$runner = new runnerController();

if(isset($_POST['login-submit']))
{
	$runner = $runner->loginRun();
}
?>

<!DOCTYPE html>
<html>

<head>
<title> Log-in Runner</title>
<link rel="stylesheet"  href="../../../assets/css/style.css">
<script src="https://kit.fontawesome.com/a81368914c.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>
	<img class="wave" src="../../../uploads/deliver.png">

	<form action="#" method="POST">
	<div class="loginbox">
	<img class="img" src="../../../uploads/avatar.svg">
	<h2>LOGIN RUNNER</h2>
	
	<div class="containar">
	<div class="fillbox">
		<i class="fas fa-user"></i>
		<input type="email" placeholder="Email" name="RunnerEmail">
	</div>

	<div class="fillbox">
		<i class="fas fa-lock"></i>
		<input type="password" placeholder="Password" name="RunnerPassword">
	</div>
	</div>

	<div class="link-register">
		<a href="../../../ApplicationLayer/view/Runner/registerRunner.php">Click to register</a>
	</div>


	<div class="button">
    	<input class="btn" type="submit"  name="login-submit"  value="Login">
	</div>
	

	

	</form>
</div>



</body>
</html>