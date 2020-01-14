<?php
session_start();

if(isset($_POST["sb"]))
	{
		$con=mysql_connect("localhost","root","");
		if(!$con)
			die("<h1>DataBase Connection Error</h1>");

		mysql_select_db("AnimalPlanet");

		$uid=$_POST["uid"];
		$pwd=$_POST["pwd"];

		$q="select * from Users where UserID='$uid' and Password='$pwd'";
		
			$rs=mysql_query($q,$con);
			$rec=mysql_fetch_array($rs,MYSQL_ASSOC);
			$UserID=$rec["UserID"];
			$Password=$rec["Password"];
			if($UserID==$uid && $Password==$pwd)
			{
				$_SESSION["uid"]=$UserID;
				$_SESSION["pwd"]=$pwd;
				header("Location:UserHome.php");

			}
			else
				die("ID does not exist.PLEASE REGISTER FIRST");
			mysql_close($con);
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
		$con=mysql_connect("localhost","root","");
		if(!$con)
			die("<h1>DataBase Connection Error</h1>");

		mysql_select_db("AnimalPlanet");

		$uid=$_POST["uid"];
		$pwd=$_POST["pwd"];

		$q="select * from admin where UserId='$uid' and Password=$pwd";
		
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
			else
				die("INVALID ENTRY");
		mysql_close($con);
	}


?>	