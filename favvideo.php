<?php
session_start();
//$vid=$_POST["vid"];
$uid=$_SESSION["uid"];
$con=mysql_connect("localhost","root","");
if(!$con)
	die("<h1>Database Ni mila</h1>");
mysql_select_db("AnimalPlanet");
$q="select * from favvideo where FavofUserId='$uid'";
$rs=mysql_query($q,$con);
$i=1;
while($rec=mysql_fetch_array($rs,MYSQL_ASSOC))
{
	$vid=$rec["VideoId"];
	$q1="select * from videos where VideoId=$vid";
	//print($q1);
	$rs1=mysql_query($q1,$con);
	$rec1=mysql_fetch_array($rs1,MYSQL_ASSOC);
	$vfname=$rec1["VideoFileName"];
	print("<video width=320 height=280 controls>");
	print("<source src='$vfname' type=video/mp4 >");
	print("</video><br>");

	print($rec1["VideoHeading"]."<br>");
	$i=$i+1;

}

//$q1="select count(*) as likecount from Videolikes where Videoid=$vid";

//$rs=mysql_query($q1,$con);
//$rec=mysql_fetch_array($rs,MYSQL_ASSOC);
//$lc=$rec["likecount"];
mysql_close($con);
//print($lc);

?>