<?php
$con=mysql_connect("localhost","root","root");
if(!$con)
die("<h1>database connection error</h1>");
mysql_select_db("dbs");
$q="select * from person";
$rs=mysql_query($q,$con);
print("<table border=2><tr><th>Name</th><th>City</th><th>Phone</th></tr>");
while($rec=mysql_fetch_array($rs,MYSQL_ASSOC))
{
	$nm=$rec["name"];
	$ct=$rec["city"];
	$ph=$rec["phone"];
	print("<tr>");	
	print("<td>$nm</td>");
	print("<td>$ct</td>");
	print("<td>$ph</td>");
	print("</tr>");
	print("</table>");
}
mysql_close($con);
?>
