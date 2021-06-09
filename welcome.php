<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
		div.a{text-align: left}
    </style>
</head>
<body>
	<br>
	
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
	
	
	<div class="">
		<a href="" class="btn btn-warning">ADD Data</a>
		<a href="view.php" class="btn btn-warning ml-4">VIEW</a>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	<div class="a">
        <a href="reset-password.php" class="btn btn-warning btn-sm">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3 btn-sm">Sign Out of Your Account</a>
    </div>
</body>
</html>