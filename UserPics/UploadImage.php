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
<body style="background-image: url('3.jpg'); background-size: cover;">
  <!--<h1>Animal Planet</h1>-->
 <button type="button" class="btn btn-success form-control" data-toggle="modal" data-target="#myModal" >Click To Upload</button>

<div class="modal fade" id="myModal" role="dialog">
 <div class="modal-dialog">
    
      <!-- Modal content-->
       	<div class="modal-content" style="background-image: url('9.jpg'); background-size: cover; color:green;font-weight: bold;font-size: 14pt;">
      		<div class="modal-header">
	 			<button type="button" class="close" data-dismiss="modal" style="color: red">&times;</button>
      			<h3 class="modal-title" style="color:red;text-align:center">UPLOAD IMAGE</h3>
      		</div>
      		<div class="modal-body">
      			<form method="POST" enctype="multipart/form-data">
      				<div class="form-group">
      					<label for="AnimalCategory">Animal Category</label>
      					<select name="AnimalCategory" id="AnimalCategory" style="background-color: inherit;">
      						<option>Amphibians</option>
      						<option>Fish</option>
      						<option>Birds</option>
      						<option>Reptiles</option>
      						<option>Arthropods</option>
      						<option>Mammals</option>
      					</select>	
      				</div>
      				<div class="form-group">
      					<label for="Picture">Image</label>
 						<input type="file" class="form-control" id="Picture" name="Picture" style="background-color: inherit;">
      				</div>
      				<div class="form-group">
      					<button type="submit" class="btn btn-success" name="sb">Upload</button>
      				</div>	
      			</form>
			</div>
        		<div class="modal-footer">
          			<button type="button" class="btn btn-success" data-dismiss="modal" style="background-color:yellow;color:black">Close</button>
				</div>
     </div>
      </div>
   			 </div>
        </div>
 </body>
 </html>


 <?php

 if(isset($_POST["sb"]))
 {
 	$con=mysql_connect("localhost","root","");
 	if(!$con)
 		die("Database Connection Error");

 	mysql_select_db("AnimalPlanet");
	$UploadByUserID=$_SESSION["uid"];
 	$AnimalCategory=$_POST["AnimalCategory"];
	$Picture=$_FILES["Picture"]["name"];
	$UploadDate=date('Y-m-d');
 	$q="insert into gallery(UploadDate,UploadByUserID,AnimalCategory,Picture) values('$UploadDate','$UploadByUserID','$AnimalCategory','$Picture')";	
  
 	mysql_query($q,$con);
 	move_uploaded_file($_FILES["Picture"]["tmp_name"],$Picture);
	print("Data Entered Successfully");
	
	mysql_close($con);
 }

 ?>

