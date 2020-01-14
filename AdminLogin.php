<?php
session_start();

if(isset($_POST["adm"]))
{
	$con=mysql_connect("localhost","root","root");
	if(!$con)
		die("<h1>DataBase Connection Error</h1>");

	mysql_select_db("AnimalPlanet");

	$uid=$_POST["uid"];
	$pwd=$_POST["pwd"];

	$q="select * from Admin where UserID='$uid' and Password=$pwd";

	$rs=mysql_query($q,$con);
	$rec=mysql_fetch_array($rs,MYSQL_ASSOC);
	$UserID=$rec["UserID"];
	$Password=$rec["Password"];
	if ($UserID==$uid && $Password==$pwd)
	{
		$_SESSION["uid"]=$UserID;
		$_SESSION["pwd"]=$pwd;
		header("Location:AdminHome.php");

	}
	mysql_close($con);
}

?>	
