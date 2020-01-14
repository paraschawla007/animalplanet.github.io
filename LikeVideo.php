<?php 
session_start();
$vid=$_POST["vid"];
$uid=$_SESSION["uid"];
$ld=date("Y-m-d");
$con=mysql_connect("localhost","root","");
if(!$con)
	die("<h1>Database Ni milas</h1>");
mysql_select_db("AnimalPlanet");
$q="insert into videolikes values($vid,'$uid','$ld')";
mysql_query($q,$con);

$q3="update videos set likecount=likecount+1 where videoid=$vid";
		mysql_query($q3,$con);

$q1="select count(*) as likecount from Videolikes where Videoid=$vid";

$rs=mysql_query($q1,$con);
$rec=mysql_fetch_array($rs,MYSQL_ASSOC);
$lc=$rec["likecount"];
mysql_close($con);
//print($lc);

?>