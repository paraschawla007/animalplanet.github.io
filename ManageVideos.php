<?php
session_start();
$uid=$_SESSION["uid"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('15.jpg'); background-size: cover">

	<!--<button class="btn btn-success" name="but" ><a href="UploadVideo.php">Upload Video</a></button>-->
  <!--<h2>Upload Video</h2>
   Trigger the modal with a button-->
  <div>
  <!--<button type="button" class="btn btn-info btn-lg"><a href="UploadImage.php">Upload Image</a></button>--> 
  <button style="color: white;font-size: 17pt;height: 40px" type="button" class="btn btn-info form-control" data-toggle="modal" data-target="#myModal1">Upload Video</button></div>

  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="background-image: url('9.jpg'); background-size: cover; color:green;font-weight: bold;font-size: 14pt; ">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Upload Video</h4>
        </div>
        <div class="modal-body">
        <!--  <p>Some text in the modal.</p>-->
        <form method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="AnimalCategory" style="background-color: inherit;">Animal Category</label>
			<select name="AnimalCategory" class="form-control" style="background-color: inherit;">
				<option>Amphibians</option>
      			<option>Fish</option>
      			<option>Birds</option>
				<option>Reptiles</option>
				<option>Arthropods</option>
				<option>Mammals</option>
			</select>	
		</div>
		<div class="form-group">
			<label for="video">Video File</label>
			<input type="file" id="vfname" name="vfname" class="form-control" style="background-color: inherit;">
		</div>
		<div class="form-group">
			<label for="vhead">Video Heading</label>
			<input type="text" id="vhead" name="vhead" class="form-control" style="background-color: inherit;">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success" name="sb1">SAVE</button>
			<button class="btn btn-primary" name="Back">BACK</button>
		</div>
	</form>
	        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>

  
</div>
</body>
</html>


<?php

$con=mysql_connect("localhost","root","");
if(isset($_POST["sb1"]))
{ 
  if(!$con)
    die("<h1>Database Connection Error</h1>");

  mysql_select_db("AnimalPlanet");
  $UploadByUserID=$_SESSION["uid"];
  $UploadDate=date("Y-m-d");
  $vhead=$_POST["vhead"];
  $vfname=$_FILES["vfname"]["name"];
  $VideoSize=$_FILES["vfname"]["size"];
  $LikeCount=0;
  $AnimalCategory=$_POST["AnimalCategory"]; 

  $q="insert into Videos(UploadByUserID,UploadDate,VideoHeading,VideoFileName,Videosize,LikeCount,AnimalCategory) values('$UploadByUserID','$UploadDate','$vhead','$vfname',$VideoSize,$LikeCount,'$AnimalCategory')";
  $rs=mysql_query($q,$con); 
  //print("One");
  //$vfname="AnimalVideos/"+$vfname;
  move_uploaded_file($_FILES["vfname"]["tmp_name"], $vfname);
  print("<h1>Data Entered Successfully</h1>");  

  
} 
mysql_close($con);
  
?>

<?php
  $con=mysql_connect("localhost","root","");
  if(!$con)
    die("Database Connection Error");

  mysql_select_db("AnimalPlanet");
  $q="select * from videos";
  $rs=mysql_query($q,$con);
  print("<hr>");
  print("<center><table class='table table-striped table-bordered' style='width:80%;font-size:20pt;text-align:center'></center>");
  print("<tr><th>UploadDate</th><th>UploadByUserId</th><th>AnimalCategory</th><th>Video Heading</th><th>Video</th></tr>");
  
  while($rec=mysql_fetch_array($rs,MYSQL_ASSOC))
  {
    $vid=$rec["VideoId"];
    $AnimalCategory=$rec["AnimalCategory"];
    $vhead=$rec["VideoHeading"];
  $Video=$rec["VideoFileName"];
  $date=$rec["UploadDate"];
  $UploadByUserId=$rec["UploadByUserId"];
    print("<tr><td  style='font-size:22pt;padding:40px'>$date</td>");
    print("<td  style='font-size:22pt;padding:40px'>$UploadByUserId</td>");
    print("<td  style='font-size:22pt;padding:40px'>$AnimalCategory</td>");
    print("<td  style='font-size:22pt;padding:40px'>$vhead</td>");
    print("<td><video width=100 height=100 controls>");
    print("<source src='$Video' type=video/mp4 >");
    print("</video>");
    print("<a href='DelVideo.php?vid=$vid'>DELETE</a></td></tr>");
  }
  print("</table>");
mysql_close();
?>