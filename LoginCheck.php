<?php
session_start();

if(isset($_POST["sb"]))
	{
		$con=mysqli_connect("localhost","root","","AnimalPlanet");
		if(!$con)
			die("<h1>DataBase Connection Error</h1>");

		$uid=$_POST["uid"];
		$pwd=$_POST["pwd"];

		$q="select * from Users WHERE id='$uid' and password='$pwd'";
		
			$rs=mysqli_query($con,$q);
			$rec=$rs->fetch_assoc();
			$UserID=$rec["id"];
			$Password=$rec["password"];
			if($UserID==$uid && $Password==$pwd)
			{
				$_SESSION["uid"]=$UserID;
				$_SESSION["pwd"]=$pwd;
				header("Location:UserHome.php");

			}
			else
				die("ID does not exist.PLEASE REGISTER FIRST");
			mysqli_close($con);
		}
		/*	{
				$q="select * from admin where UserID='$uid' and Password=$pwd";
				$rs=mysql_query($q,$con);
				$rec=mysql_fetch_array($rs,MYSQL_ASSOC);
				$UserID=$rec["UserID"];
				$Password=$rec["Password"];
				if($UserID==$uid && $Password==$pwd)
				{
					$_SESSION["uid"]=$UserID;
					$_SESSION["pwd"]=$pwd;
					header("Location:AdminHome.php");
				}	
			}*/
			if(isset($_POST["sb1"]))
	{
		$con=mysqli_connect("localhost","root","","AnimalPlanet");
		if(!$con)
			die("<h1>DataBase Connection Error</h1>");
		$uid=$_POST["uid"];
		$pwd=$_POST["pwd"];

		$q="select * from admin where id='$uid' and password=$pwd";
		
			$rs=mysqli_query($con,$q);
			$rec=$rs->fetch_assoc();
			$UserID=$rec["id"];
			$Password=$rec["password"];
			if($UserID==$uid && $Password==$pwd)
			{
				$_SESSION["uid"]=$UserID;
				$_SESSION["pwd"]=$pwd;
				header("Location:AdminHome.php");

			}
			else
				die("INVALID ENTRY");
		mysqli_close($con);
	}


?>	