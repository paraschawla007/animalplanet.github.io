<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".but").click(function(){
				$(this).next().slideToggle();
			});

			$(".chk").click(function(){
				c=$(this);

				$.post("LikeVideo.php",
  				{
    				vid: $(c).val()
    			},
  				function(data, status){

  					$(c).next().html("Like("+data+")");
  						alert(data);
    				$(c).prop('disabled', true);
  				});
			});

			$(".chk1").click(function(){
				c=$(this);

				$.post("Fav.php",
  				{
    				vid: $(c).val()
    			},
  				function(data, status){

  					$(c).next().html("Favourite");
    				$(c).prop('disabled', true);
  				});
			});

		});
	</script>
</head>
<body style="background-image: url('15.jpg'); background-size: cover">

<?php
if(isset($_POST["sb1"]))
{
$srch=$_POST["srch"];
$uid=$_SESSION["uid"];
$con=mysql_connect("localhost","root","");
if(!$con)
	die("<h1>Database Connection Error</h1>");

mysql_select_db("AnimalPlanet");

$q="select * from gallery where Locate('$srch',AnimalCategory)>0";

$rs=mysql_query($q,$con);
//print("<table class=table ><tr><th>UploadByUserID</th><th>UploadDate</th><th>VideoHeading</th><th>VideoFileName</th><th>VideoSize</th></tr>");

while($rec=mysql_fetch_array($rs,MYSQL_ASSOC))
{
	$iid=$rec["ID"];
	$q="select count(*)as likecount from ImageLikes where IID=$iid";
	$rs1=mysql_query($q,$con);
	if($rec1=mysql_fetch_array($rs1,MYSQL_ASSOC))
		$lc=$rec1["likecount"];
	else
		$lc=0;

	$UploadByUserID=$rec["UploadByUserId"];
	$UploadDate=$rec["UploadDate"];
	$acat=$rec["AnimalCategory"];
	$picture=$rec["Picture"];
	//$VideoSize=$rec["VideoSize"];

	//print("<video width=320 height=280 controls>");
	//print("<source src='$vfname' type='video/mp4' >");
	//print("</video><br>");
	print("<img src='$picture' style='width:250px'>");
	$q1="select * from ImageLikes where LikeByUserId='$uid' and IId=$iid";
	//print($q1);
	$rs1=mysql_query($q1,$con);
	print("<div class=checkbox>");
	if($rec1=mysql_fetch_array($rs1,MYSQL_ASSOC))
	{
		print("<label><input type=checkbox class=chk value=$iid checked disabled /><span>Like($lc)</span></label>");
	}
	else
		print("<label><input type=checkbox class=chk value=$iid ><span>Like($lc)</span></label>");

	$q1="select * from favimage where FavofUserId='$uid' and IId=$iid";
	//print($q1);
	$rs1=mysql_query($q1,$con);
	if($rec1=mysql_fetch_array($rs1,MYSQL_ASSOC))
		print("<label><input type=checkbox class=chk1 value=$iid checked disabled /><span>Favourite</span></label>");
	else
		print("<label><input type=checkbox class=chk1 value=$iid ><span>Favourite</span></label>");

	print("<button type=button class='bg-success but'>Info</button>");
	
	print("<div style='display:none'>");
	print("Upload By: $UploadByUserID ($UploadDate)");
	print("</div>");
	print("</div>");

}
mysql_close($con);
}
?>
</body>
</html>