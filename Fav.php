<?php 
session_start();
$vid=$_POST["vid"];
$uid=$_SESSION["uid"];
$fd=date("Y-m-d");
$con=mysql_connect("localhost","root","");
if(!$con)
	die("<h1>Database Ni milas</h1>");
mysql_select_db("AnimalPlanet");
$q="insert into FavVideo values($vid,'$uid','$fd')";
mysql_query($q,$con);

//$q1="select count(*) as likecount from FavVideo where favotUserId=$vid";

//$rs=mysql_query($q1,$con);
//$rec=mysql_fetch_array($rs,MYSQL_ASSOC);
//$lc=$rec["likecount"];
mysql_close($con);
//print($lc);

?>