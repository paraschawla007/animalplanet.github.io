<?php
if(isset($_POST["sb"]))
{
	$con=mysql_connect("localhost","root","");
	if(!$con)
		die("<h1>DataBase Connection Error</h1>");

	mysql_select_db("AnimalPlanet");

	$uid=$_POST["uid"];
	$pwd=$_POST["pwd"];
	$username=$_POST["username"];
	$eid=$_POST["eid"];
	$gn=$_POST["gn"];
	$sque=$_POST["sque"];
	$sans=$_POST["sans"];

	$pic="UserPics/".$_FILES["pic"]["name"];
	move_uploaded_file($_FILES["pic"]["tmp_name"],$pic);

	$q="insert into Users values('$uid',$pwd,'$username','$eid','$gn','$pic','$sque','$sans')";
	$rs=mysql_query($q,$con);
		print("Data Entered Successfully");
	mysql_close($con);
}

?>