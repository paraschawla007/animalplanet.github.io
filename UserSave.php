<?php
if(isset($_POST["sb"]))
{
	$con=mysqli_connect("localhost","root","","AnimalPlanet");
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySql:" . mysqli_connect_error();
	}

	$uid=$_POST["uid"];
	$pwd=$_POST["pwd"];
	$username=$_POST["username"];
	$eid=$_POST["eid"];
	$gn=$_POST["gn"];

	

	$sql = "INSERT INTO Users (id, password, username, email, gender) VALUES('$uid','$pwd','$username','$eid','$gn')";

	if (mysqli_query($con, $sql)) {
	echo "New record created successfully, please go back and login";
	?>
	<a href="index.html">Back</a>
	<?php

	} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($con);
}

?>
