<?php
session_start();
$vid=$_GET["vid"];

$con=mysql_connect("localhost","root","");
if(!$con)
	die("<h1>Database Not Found</h1>");
mysql_select_db("AnimalPlanet");

$q="select * from videos where VideoId='$vid'";
$rs=mysql_query($q,$con);
$rec=mysql_fetch_array($rs,MYSQL_ASSOC);
$vid=$rec["VideoFileName"];
print($vid);
print("<br>");
print("<video height=200px width=230px controls>");
print("<source src='$vid' type=video/mp4>");
print("</video>");


?>