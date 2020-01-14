<html>
<body>
	<marquee style="width: 100%;height:100%">
<?php
session_start();
$uid=$_SESSION["uid"];

$con=mysql_connect("localhost","root","root");
if(!$con)
	die("<h1>Database Connection Error</h1>");

mysql_select_db("AnimalPlanet");

$q="select * from VideoLikes where LikeByUserId='$uid'";
$rs=mysql_query($q,$con);
//$i=1;
//print("<table width=100% border=1>");
while(true)
{
	if($rec=mysql_fetch_array($rs,MYSQL_ASSOC))
	{
		$vid=$rec["VideoId"];
		$q1="select * from videos where VideoId='$vid'";
		$rs1=mysql_query($q1,$con);
		$rec1=mysql_fetch_array($rs1,MYSQL_ASSOC);
		print("<video width=320 height=280 controls>");
		print("<source src=".$rec1["VideoFileName"]." type=video/mp4 />");
		print("</video>");
		print($rec1["VideoHeading"]."<br>");
		//print("</td>");

	}
	else
		break;
	//$i=$i+1;

}
	

mysql_close($con);

?>
</marquee></body></html>