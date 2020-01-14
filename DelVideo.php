<?php
session_start();
$uid=$_SESSION["uid"];
$vid=$_GET["vid"];
$con=mysql_connect("localhost","root","");
if(!$con)
	die("Database Connection Error");
mysql_select_db("animalplanet");
$q="delete from favvideo where VideoId='$vid' ";
mysql_query($q,$con);
$q="delete from videolikes where VideoId='$vid'";
mysql_query($q,$con);
$q="delete from videos where VideoId='$vid';";
//print($q.mysql_error());
mysql_query($q,$con);
//print($q);
print("<h1 style='font-size:25pt;padding:40px'>Deleted</h1>");
mysql_close($con);
?>