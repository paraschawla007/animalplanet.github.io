<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".but").click(function(){
				$(this).next().slideToggle();
			});
		});
	</script>
</head>
<body  style="background-image: url('15.jpg'); background-size: cover">
<div><button type="button" onclick="history.back();" class="btn btn-lg btn-primary">BACK</button></div>
<?php

		$con=mysql_connect("localhost","root","");
		if(!$con)
			die("<h1>DataBase Connection Error</h1>");

		mysql_select_db("AnimalPlanet");

		$uid=$_GET["uid"];
		$q="select * from videolikes where LikeByUserId='$uid'";
		$rs=mysql_query($q,$con);
		$rec=mysql_fetch_array($rs,MYSQL_ASSOC);
		$vid=$rec["VideoId"];

		$q1="select * from videos where videoid='$vid'";
		$rs1=mysql_query($q1,$con);
		while($rec=mysql_fetch_array($rs1,MYSQL_ASSOC))
		{
		$vfname=$rec["VideoFileName"];
		$UploadDate=$rec["UploadDate"];
		$vhead=$rec["VideoHeading"];
		$vfname=$rec["VideoFileName"];
		$VideoSize=$rec["VideoSize"];

		print("<video width=320 height=280 controls>");
		print("<source src='$vfname' type='video/mp4' >");
		print("</video><br>");	
		print("<div>");
		print("<button type=button class='but'>Info</button>");	
		print("<div style='display:none'>");
		print("<h3>$vhead</h3>By: $uid ($UploadDate)");
		print("</div>");
		print("</div>");
		
}
mysql_close($con);
?>
</body>
</html>
