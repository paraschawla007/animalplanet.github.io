<?php
session_start();
$uid=$_SESSION["uid"];
$con=mysql_connect("localhost","root","");
if(!$con)
  die("<h1>Database Connection Error</h1>");

mysql_select_db("AnimalPlanet");
$q="select * from admin where UserId='$uid'";
$rs=mysql_query($q,$con);
$rec=mysql_fetch_array($rs,MYSQL_ASSOC);
$name=$rec["AdminName"];
$pic=$rec["AdminPic"];
$ContactNo=$rec["ContactNo"];
$EmailId=$rec["EmailId"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial scale=1">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    a{
      
      font-size: 12pt;
      font-weight: bolder;
    }
  </style>
</head>
<body style="background-image: url('15.jpg'); background-size: cover">
<div class="well" style="background-image: url('15.jpg'); background-size: cover;padding: 0px"><table width="70%" style="padding: 0px"><tr><td><img src="logo1.jpg" style="width:200px;height:100px"></td><td><h1 style="text-align:center;color:green"><i><u>WELCOME</u></i></h1></td></tr></table></div>
<?php
print("<div><table><tr><td><img src=$pic style='width:150px'></td><td><h3>Admin :<b> $name</b></h3><h5>$ContactNo</h5><h5>$EmailId</h5></td></tr></table></div>");
  ?>	
<div class="container-fluid" style="width:100%"> 
<nav class="navbar navbar-default" style="background-image: url('15.jpg'); background-size: cover;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color: black">Admin Home</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="ShowUsers.php" target=animalwork style="color: black" >Show Users</a></li>
      <li><a href="ManageGalary.php" target="animalwork" style="color: black">Manage Images</a></li>
      <li><a href="ManageVideos.php" target=animalwork  style="color: black">Manage Videos</a></li>
      <li><a href="ChangePassword.php" target=animalwork style="color: black">Change Password</a></li>
      <li><a href="SignOut.php" target=_parent style="color: black">Sign-Out</a></li>
      <li>
      	<form method=post action=search.php target=animalwork >
      		<input type="text" name=srch size=60 placeholder="SEARCH" style="background-image:url('srch.png'); background-repeat: no-repeat;padding-left: 25px;margin-top:15px; " >
        	<button type=submit class="btn btn-success" >SEARCH</button>
        </form>
      </li>
    </ul>
  </div>
</nav>    
<iframe name=animalwork width=100% height=500></iframe>


</div>
</body>
</html>
