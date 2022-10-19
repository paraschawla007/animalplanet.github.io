<?php
session_start();
$uid=$_SESSION["uid"];
$con=mysqli_connect("localhost","root","","AnimalPlanet");
if(!$con)
  die("<h1>Database Connection Error</h1>");

$q="select * from users where id='$uid'";
$rs=mysqli_query($con,$q);
$rec=$rs->fetch_assoc();
$name=$rec["username"];
//$ContactNo=$rec["ContactNo"];
$EmailId=$rec["email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    ul
    {
      font-weight:bold;
    }
</style>

</script>
</head>
<body style="background-image: url('15.jpg'); background-size: cover">
  <div class="well" style="background-image: url('15.jpg'); background-size: cover;padding: 0px"><table width="70%" style="padding: 0px"><tr style="padding: 0px"><td style="padding: 0px"><img src="logo1.jpg" style="width:200px;height:100px"></td><td><h1 style="text-align:center;color:green"><i><u>WELCOME</u></i></h1></td></tr></table></div>
<?php
print("<div style='padding: 0px'><table style='padding: 0px'><tr style='padding: 0px'><td style='padding: 0px'></td><td><h3>User Name:<b> $name</b></h3><h5>$EmailId</h5></td></tr></table></div>");
  ?>  

<!--<div class="well" style="background-image: url('15.jpg'); background-size: cover"><h1 style="text-align:center;color:blue"><i><u>Animal Planet</u></i></h1></div>-->
<div class="container-fluid" style="width:100%"> 
<nav class="navbar navbar-default">
  <div class="container-fluid" style="background-image: url('15.jpg'); background-size: cover">
    
    <ul class="nav navbar-nav">
      <li><a href="Upload.php" style="color:black" target=animalwork >Upload</a></li>
      <li><a href="MyVideos.php" style="color:black" target=animalwork>My Videos</a></li>
      <li><a href="favvideo.php" style="color:black" target=animalwork>My Fav</a></li>
      <li><a href="MyLikes.php" style="color:black" target=animalwork>My Likes</a></li>
      <li><a href="ManageGallery.php" style="color:black" target=animalwork>Gallery</a></li>
      <li><a href="Log.php" style="color:black" target=animalwork>Log</a></li>
      <li><a href="ChangeUserPassword.php" style="color:black" target=animalwork>Change Password</a></li>
      <li><a href="SignOut.php" style="color:black" target=_parent >Sign-Out</a></li>
      <li><a href="contact.php" style="color:black" target=animalwork>Contact Us</a></li>
      <li>
      	<form method=post action=search.php target=animalwork >
      		<input type="text" name=srch id=srch size=50 placeholder="SEARCH" style="background-image:url('srch.png'); background-repeat: no-repeat;padding-left: 25px;margin-top:15px; " >
          <div class="btn-group">
           <button type="submit" name="sb" id="sb" class="btn btn-primary" ><span class="glyphicon glyphicon-search">Videos</span></button>
           <button type="submit" name="sb1" id="sb1" class="btn btn-primary"><span class="glyphicon glyphicon-search">Images</span></button>
            </button>
          </div>
        </form>
      </li>
    </ul>
  </div>
</nav>    
<!-- <div class="jumbotron" style="background-image:url(fish.gif);background-position:center;background-size: cover; height:450px">  
<h1 style="text-align:center;">WELCOME</h1>


</div>
-->
<iframe name=animalwork width=100% height=700 ></iframe>
</div>
</body>
</html>