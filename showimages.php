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
  <button class="btn btn-lg" type="button" onclick="history.back();">BACK</button>
</body>
</html>
<?php

session_start();
$uid=$_SESSION["uid"];

  $con=mysql_connect("localhost","root","");
  if(!$con)
    die("Database Connection Error");

  mysql_select_db("AnimalPlanet");
  $q="select * from gallery where UploadByUserId='$uid'";
  $rs=mysql_query($q,$con);
  print("<center><table class='table table-striped' style='width:80%;font-size:20pt;text-align:center'></center>");
  print("<tr><th>UploadDate</th><th>UploadByUserId</th><th>AnimalCategory</th><th>Picture</th></tr>");
  
  while($rec=mysql_fetch_array($rs,MYSQL_ASSOC))
  {
    $AnimalCategory=$rec["AnimalCategory"];
  $Picture=$rec["Picture"];
  $date=$rec["UploadDate"];
  $id=$rec["ID"];
  
  $UploadDate=$date;
    print("<tr><td>$UploadDate</td>");
    print("<td>$uid</td>");
    print("<td>$AnimalCategory</td>");
    print("<td><img src='$Picture' style='height:80px;width:80px'><br><a href='DelImg.php?id=$id'>Delete</a></td></tr>");
  }
  print("</table>");
  mysql_close($con);
 

 ?>
