<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>

	<style type="text/css">
		body{
			text-align:center;
		}
	</style>
</head>
<body style="background-image: url('15.jpg'); background-size: cover">
	
	<?php
		$uid=$_GET["uid"];
		
	?>
	<center><h1>User Details</h1></center>
	<?php

	print("<form action='getUploadedVideos.php' >");
	print("<input type=hidden name=uid value=$uid />");
	?>
		<button class="btn btn-lg btn-primary" type='submit' name='sb' target="animalwork">Uploaded Videos</button>
	<?php
		print("<form action='getLikedVideos.php'>");
		print("<input type=hidden name=uid value=$uid />");
		?>
		<button class="btn btn-lg btn-primary" type='submit' name='sb1' target="animalwork">Liked Videos</button>
	<br><br>
<div><button type="button" onclick="history.back();" class="btn btn-lg btn-primary">BACK</button></div>
</body>
</html>

