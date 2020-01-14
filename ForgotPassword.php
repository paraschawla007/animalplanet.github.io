<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('15.jpg'); background-size: cover"></body>
</html>

<?php
if(isset($_POST["sb2"]))
{
$con=mysql_connect("localhost","root","");
if(!$con)
  die("<h1>Database Connection Error</h1>");

mysql_select_db("AnimalPlanet");
$uid=$_POST["uid"];
$q="select * from users where UserID='$uid'";
$rs=mysql_query($q,$con);
$rec=mysql_fetch_array($rs,MYSQL_ASSOC);
$Password=$rec["Password"];
$UserID=$rec["UserID"];
$eid=$rec["EMailID"];
$sques=$rec["Securityquestion"];
$secans=$rec["SecurityAnswere"];
$sque=$_POST["sque"];
$sans=$_POST["sans"];
	if($sque==$sques && $sans==$secans && $uid==$UserID)
	{
		//print($UserID);
		//print($sques);
		print("<div><h1>Your Password Is : $Password</h1> <h3><a href='index2.php'><button class='btn btn-info btn-lg'>Login Here</button></a></h3></div>");	
	}
	else
		print("<h1>Record not found! check details again</h1><h3><a href='index2.php'><button class='btn btn-info btn-lg'>Login Here</button></a></h3>");
mysql_close();
}

?>