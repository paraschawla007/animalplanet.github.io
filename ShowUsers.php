<?php

$con=mysql_connect("localhost","root","");
if(!$con)
	die("<h1>DataBase Connection Error</h1>");
	mysql_select_db("AnimalPlanet");
	$q="select * from users";
	$rs=mysql_query($q,$con);
	print("<center><table border=1 style='width:80%;font-size:20pt;text-align:center'></center>");
	print("<tr><th>Profile pic</th><th>User Name</th><th>User Id</th><th>Email Id</th><th>Gender</th></tr>");
	while($rec=mysql_fetch_array($rs,MYSQL_ASSOC))
	{
		$uid=$rec["UserID"];
		$name=$rec["UserName"];
		$email=$rec["EMailID"];
		$gn=$rec["Gender"];
		$pic=$rec["ProfilePic"];
		print("<tr><td><a href='UserDetail.php?uid=$uid' target='animalwork'><img src='$pic' style='height:50px;width:50px:'/></a></td><td>$name</td><td>$uid</td><td>$email</td><td>$gn</td></tr>");

	}
	print("</table>");

	mysql_close($con);

?>