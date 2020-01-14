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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		label
  		{
  			font-weight: bold;
  			font-size: 20px;
  		}
  	</style>
</head>
<body style="background-image: url('15.jpg'); background-size: cover">
<div class="container-fluid">	
<form method="POST" style="padding-top: 2%">
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
	$con=mysql_connect("localhost","root","");
	if(!$con)
		die("<h1>DataBase Connection Error</h1>");

	mysql_select_db("AnimalPlanet");
	$q1="select * from Admin";
	$rs1=mysql_query($q1,$con);
	$rec1=mysql_fetch_array($rs1,MYSQL_ASSOC);
	$pwd=$rec1["Password"];
	$UserID=$_SESSION["uid"];
	$npsw=$_POST["npsw"];
	$cpsw=$_POST["cpsw"];

	if($pwd==$npsw)
		print("Current Password and New Password must be different");

	if($npsw!=$cpsw)
		print("New Password and Confirm Password must Match");

	$q="update Admin set Password='$npsw' where UserID='$UserID' ";
	$rs=mysql_query($q,$con);
	print("Password Changed Successfully");

	mysql_close($con);
}

?>