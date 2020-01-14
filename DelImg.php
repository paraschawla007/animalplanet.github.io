<?php
session_start();
$uid=$_SESSION["uid"];
$id=$_GET["id"];
$con=mysql_connect("localhost","root","");
if(!$con)
	die("Database Connection Error");
mysql_select_db("animalplanet");
$q="delete from gallery where id='$id'";
mysql_query($q,$con);
//print($q);
print("<h1 style='font-size:25pt;padding:40px'>Deleted</h1>");
mysql_close($con);
?>