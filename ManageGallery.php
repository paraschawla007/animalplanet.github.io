<?php
session_start();
$uid=$_SESSION["uid"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body style="background-image: url('15.jpg'); background-size: cover">
  <div align="center" style="padding-top: 10%">
    <a href="showimages.php"><input type="button" class="btn btn-lg btn-primary" value="IMAGES"></a>
     <a href="MyVideos.php"><input type="button" class="btn btn-lg btn-primary" value="VIDEOS"></a>
  </div>

</body>
</html>
