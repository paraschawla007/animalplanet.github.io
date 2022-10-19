<?php
	session_start();
	//$pwd=$_SESSION["pwd"];
	$UserId=$_SESSION["uid"];
?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
</head>
<body style="background-image: url('15.jpg'); background-size: cover">
<div class="container-fluid">	
<form method="POST">
<div class="input-row">
        <label style="padding-top: 20px;">Name</label> <span
            id="username-info" class="info"></span><br /> <input type="text"
            class="input-field" name="username" id="username" />
    </div>
    <div class="input-row">
        <label>Email</label> <span id="email" class="info"></span><br />
        <input type="text" class="input-field" name="email"
            id="email" />
    </div>
    <div class="input-row">
        <label>Subject</label> <span id="subject" class="info"></span><br />
        <input type="text" class="input-field" name="subject" id="subject" />
    </div>
    <div class="input-row">
        <label>Message</label> <span id="content" class="info"></span><br />
        <textarea name="content" id="content" class="input-field" cols="60"
            rows="6"></textarea>
    </div>
    <div>
        <input type="submit" name="sb" id="sb" class="btn-submit" value="Submit" />

        <div id="statusMessage"> 
                <?php
                if (! empty($message)) {
                    ?>
                    <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                <?php
                }
                ?>
            </div>
    </div>
</form>
</div>
</body>
</html>

<?php

if(isset($_POST["sb"]))
{
	$con=mysqli_connect("localhost","root","","AnimalPlanet");
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySql:" . mysqli_connect_error();
	}

	$uname=$_POST["username"];
	$email=$_POST["email"];
	$subject=$_POST["subject"];
	$content=$_POST["content"];

	

	$sql = "INSERT INTO Querries (username, email, subject, content) VALUES('$uname','$email','$subject','$content')";

	if (mysqli_query($con, $sql)) {
    print("<h3>Your querry submitted successfully and we will contact you shortly</h3>");

	} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
	}

	mysqli_close($con);
}

?>