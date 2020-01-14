<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('15.jpg'); background-size: cover">
	<div>
  <button class="btn btn-lg" type="button" onclick="history.back();">BACK</button>
</div>
</body>
</html>


<?php
session_start();
$uid=$_SESSION["uid"];

$con=mysql_connect("localhost","root","");
if(!$con)
	die("<h1>Database Connection Error</h1>");

mysql_select_db("AnimalPlanet");

$q="select * from videos where UploadByUserID='$uid'";
$rs=mysql_query($q,$con);
$i=1;
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
		print("<source src='$vfname' type=video/mp4 >");
		print("</video>");
		print("<h1>".$rec1["VideoHeading"]."</h1><br>");
		$i=$i+1;
		print("</td>");

		if($rec=mysql_fetch_array($rs,MYSQL_ASSOC))
		{
			$vid=$rec["VideoId"];
			$q1="select * from videos where VideoId='$vid'";
			$rs1=mysql_query($q1,$con);
			$rec1=mysql_fetch_array($rs1,MYSQL_ASSOC);
			$vfname=$rec1["VideoFileName"];
			print("<td><video width=320 height=280 controls>");
			print("<source src='$vfname' type=video/mp4 >");
			print("</video>");
			print("<h1>".$rec1["VideoHeading"]."</h1>");
			$i=$i+1;
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
/*while($rec=mysql_fetch_array($rs,MYSQL_ASSOC))
{
	$vid=$rec["VideoId"];
	$q1="select * from videos where VideoId=$vid";
	$rs1=mysql_query($q1,$con);
	$rec1=mysql_fetch_array($rs1,MYSQL_ASSOC);
	print("<video width=320 height=280 controls>");
	print("<source src=".$rec1["VideoFileName"]." type=video/mp4 />");
	print("</video><br>");

	print($rec1["VideoHeading"]."<br>");
	$i=$i+1;

}*/
mysql_close($con);
?>