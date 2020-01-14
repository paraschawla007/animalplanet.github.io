<?php
	session_start();
	$uid=$_SESSION["uid"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	
	<!--<div class="container">	
	<div class="jumbotron"><h1>New Videos</h1></div>
	<form method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="video">Video File</label>
			<input type="file" id="vfname" name="vfname" class="form-control">
		</div>
		<div class="form-group">
			<label for="vhead">Video Heading</label>
			<input type="text" id="vhead" name="vhead" class="form-control">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success" name="sb">SAVE</button>
			<button class="btn btn-primary" name="Back">BACK</button>
		</div>
	</form>
</div>	
</div>-->
<div class="container">
  <!--<h2>Upload Video</h2>
   Trigger the modal with a button--> 
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Upload Video</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Upload Video</h4>
        </div>
        <div class="modal-body">
        <!--  <p>Some text in the modal.</p>-->
        <form method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="video">Video File</label>
			<input type="file" id="vfname" name="vfname" class="form-control">
		</div>
		<div class="form-group">
			<label for="vhead">Video Heading</label>
			<input type="text" id="vhead" name="vhead" class="form-control">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success" name="sb">SAVE</button>
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
  
</div>

</body>
</html>

