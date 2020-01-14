<!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">
		th
		{
			font-weight: bold;
			font-size: 20px;
		}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
</head>
<body  style="background-image: url('15.jpg'); background-size: cover">
<div class="page-header" align="center">
	<h2>My Activities</h2>
</div>
</body>
</html>	
<?php
session_start();
$uid=$_SESSION["uid"];

$con=mysql_connect("localhost","root","");
if(!$con)
	die("<h1>Database Not Found</h1>");

mysql_select_db("AnimalPlanet");
print("<table class='table-striped table-bordered' style='width:50%;text-align:center' align='center'><tr>");
print("<th>Date</th><th>Operation</th><th>Video Id</th></tr>");


$q="select UploadDate,'Video Upload' as logtype, VideoId from Videos where UploadByUserId='$uid' union select LikeDate, 'Video Like' as logtype, VideoId from videolikes where LikeByUserId='$uid' union select FavDate,'Favourite Video' as logtype, VideoId from favvideo where FavOfUserId='$uid' ";
//print($q);
$rs=mysql_query($q,$con);

while($rec=mysql_fetch_array($rs))
{
	$dt=$rec[0];
	$lt=$rec[1];
	$vid=$rec[2];
	print("<tr>");
	print("<td>$dt</td><td>$lt</td>");
	print("<td><a href='ShowVideo.php?vid=$vid' font-size=14px>$vid</a></td></tr>");
}
print("</table>");
mysql_close($con);

?>