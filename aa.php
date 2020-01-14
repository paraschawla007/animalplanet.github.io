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
	<button type="button" class="btn btn-success form-control" data-toggle="modal" data-target="#myModal">REGISTER</button>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      	<div class="modal-content" style="background-image: url('14.jpg'); background-size: cover; color:green;font-weight: bold;font-size: 14pt; ">
      		<div class="modal-header">
      			<button type="button" class="close" data-dismiss="modal" style="color: red">&times;</button>
      			<h3 class="modal-title" style="color:black;background-color:yellow;text-align:center;">REGISTER HERE</h3>
      		</div>
      		<div class="modal-body">
      			<form method="POST" enctype="Multipart/form-data" action="UserSave.php">
					<div class="form-group">
								<label for="uid">User ID</label>
								<input type="text" id="uid" name="uid" class="form-control" placeholder="User ID" style="background-color: inherit;" />
					</div>
					<div class="form-group">
								<label for="pwd">Password</label>
								<input type="Password" id="pwd" name="pwd" placeholder="Password" class="form-control" style="background-color: inherit;" />
					</div>
					<div class="form-group">
								<label for="cpwd">Confirm Password</label>
								<input type="text" id="cpwd" name="cpwd" class="form-control" placeholder="Confirm Password" style="background-color: inherit;" />
					</div>
					<div class="form-group">
								<label for="eid">EmailId</label>
								<input type="text" id="eid" name="eid" placeholder="EmailId" class="form-control" style="background-color: inherit;" />
					</div>
					<div class="form-group">
								<label for="gn">Gender</label>
								<select id="gn" name="gn" class="form-control" style="background-color: inherit;">
									<option>Male</option>
									<option>Female</option>
								</select>
					</div>
					<div class="form-group">
								<label for="pic">Profile Pic</label>
								<input type="file" id="pic" name="pic" class="form-control" style="background-color: inherit;" />
					</div>
							<button type="submit" class="form-control" name="sb" style="background-color:yellow;color:black">Submit</button>  
			</form>

        				<div class="modal-footer">
          				<button type="button" class="btn btn-success" data-dismiss="modal" style="background-color:yellow;color:black">Close</button>
						</div>
     			 </div>
      
   			 </div>
 

</div>
</div>
</body>
</html>