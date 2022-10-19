<?php
	session_start();
	//$pwd=$_SESSION["pwd"];
	$UserId=$_SESSION["uid"];
?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
</head>
<body style="background-image: url('15.jpg'); background-size: cover">
<div class="container-fluid">	
<form method="POST">
	<div class="form-group">
		<label for="pwd">Current Password</label>
		<input type="text" name="pwd" id="psw" class="form-control" required>
	</div>
	<div class="form-group">
		<label for="npsw">New Password</label>
		<input type="text" name="npsw" id="npsw" class="form-control" required>
	</div>
	<div class="form-group">
		<label for="cpsw">Confirm Password</label>
		<input type="password" name="cpsw" id="cpsw" class="form-control" required>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-lg btn-success" name="sb">Update</button>
	</div>
</form>
</div>
</body>
</html>

<?php

if(isset($_POST["sb"]))
{
	$con=mysqli_connect("localhost","root","","AnimalPlanet");
	if(!$con)
		die("<h1>DataBase Connection Error</h1>");
	$q1="select * from Users";
	$rs1=mysqli_query($con,$q1);
	$rec1=$rs1->fetch_assoc();
	$pwd=$rec1["password"];
	$UserID=$_SESSION["id"];
	$npsw=$_POST["npsw"];
	$cpsw=$_POST["cpsw"];

	if($pwd==$npsw)
		print("Current Password and New Password must be different");

	if($npsw!=$cpsw)
		print("New Password and Confirm Password must Match");

	$q="update Users set password='$npsw' where id='$UserID' ";
	$rs=mysqli_query($con,$q);
	print("<h3>Password Changed Successfully</h3>");

	mysqli_close($con);
}

?>