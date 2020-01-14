<?php
session_start();
$uid=$_SESSION["uid"];

$con=mysql_connect("localhost","root","");
if(!$con)
	die("<h1>Database Connection Error</h1>");

mysql_select_db("AnimalPlanet");

$q="select * from VideoLikes where LikeByUserId='$uid'";
$rs=mysql_query($q,$con);
$i=1;
print("<table width=100% border=1>");
while(true)
{
	if($rec=mysql_fetch_array($rs,MYSQL_ASSOC))
	{
		$vid=$rec["VideoId"];
		$q1="select * from videos where VideoId='$vid'";
		$rs1=mysql_query($q1,$con);
		$rec1=mysql_fetch_array($rs1,MYSQL_ASSOC);
		$vfname=$rec1["VideoFileName"];
		print("<tr><td><video width=320 height=280 controls>");
		print("<source src='$vfname' type=video/mp4 />");
		print("</video>");
		print($rec1["VideoHeading"]."<br>");
		print("</td>");

		if($rec=mysql_fetch_array($rs,MYSQL_ASSOC))
		{
			$vid=$rec["VideoId"];
			$q1="select * from videos where VideoId='$vid'";
			$rs1=mysql_query($q1,$con);
			$rec1=mysql_fetch_array($rs1,MYSQL_ASSOC);
			$vfname=$rec1["VideoFileName"];
			print("<td><video width=320 height=280 controls>");
			print("<source src='$vfname' type=video/mp4 />");
			print("</video>");
			print($rec1["VideoHeading"]);
			print("</td></tr>");
		}
		else
		{
			print("</tr>");
			break;
		}
	}
	else
		break;
	$i=$i+1;

}
	print("</table>");

mysql_close($con);

?>