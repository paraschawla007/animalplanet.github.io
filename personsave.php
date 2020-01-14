<?php
$nm=$_POST["nm"];
$ct=$_POST["ct"];
$ph=$_POST["ph"];
$con=mysql_connect("localhost","root","root");
if(!$con)
die("<h1>database connection error</h1>");
mysql_select_db("dbs");
$q="insert into person values('$nm','$ct','$ph')";
mysql_query($q,$con);
print("<h1>data entered successfully</h1>");
mysql_close($con);
?>
