<?php
error_reporting(0);
$insert = false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
	die("connection to this database failed due to" . mysqli_connect_error());
}

$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$message = $_POST['message'];
$sql = "INSERT INTO `shubham`.`shubham1` (`name`, `number`, `email`, `message`, `date`) VALUES ('$name', '$number', '$email', '$message', current_timestamp());";
if($con->query($sql) == true){
	//echo "succesful";
	$insert = true;
}
else{
	echo "fail $sql $con->error";
	$not_insert = true;
}
$con->close();
}
?>
<!DOCTYPE>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Contact Me</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="stylepcontactme.css">
</head>
<body>
	<section class="banner">
		<header>
			<a href="#" class="logo"><b style="color: yellow; font-size: 2em;">P</b><b style="font-size: 1.5em; color: #ed325f;">ort</b><b style="color: yellow; font-size: 2em;">f</b><b style="font-size: 1.5em; color: #ed325f;">olio</b></a>
			<div class="toggle"></div>
		</header>
		<ul class="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="aboutme.php">About Me</a></li>
			<li><a href="#">Work</a></li>
			<li><a href="#">Resume</a></li>
			<li><a href="#banner">Contact Me</a></li>
		</ul>
	
	<div class="contact">
		<div class="containar">
			<div class="contactInfo">
				<div class="bax">
					<div class="icon"><img src="destination.png"></div>
					<div class="text">
						<h3>Address</h3>
						<p>Cotton County Retail LTD,<br>Ludhiana,Punjab,India,<br>141010</p>
					</div> 
				</div>
				<div class="bax">
					<div class="icon"><img src="email.png"></div>
					<div class="text">
						<h3>Email</h3>
						<p>shubhamkumarrai212@gmail.com</p>
					</div> 
				</div>
				<div class="bax">
					<div class="icon"><img src="call-logo-png-9.jpg"></div>
					<div class="text">
						<h3>Phone Number</h3>
						<p>79867-78540</p>
					</div> 
				</div>
			</div>
			<div class="contactForm">
				<form method="post">
					<h2>Send Message</h2>
					<div class="inputBox">
						<input type="text" name="name" required="required">
						<span>Name</span>
					</div>
					<div class="inputBox">
						<input type="Number" name="number" required="required">
						<span> Mobile Number</span>
					</div>
					<div class="inputBox">
						<input type="text" name="email" required="required">
						<span>Email</span>
					</div>
					<div class="inputBox">
						<textarea required="required" name="message"></textarea>
						<span>Enter your Message...</span>
					</div>
					<div class="inputBox">
						<input type="submit" name="" value="Send">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

	<script type="text/javascript">
		const toggle=document.querySelector('.toggle');
		const banner=document.querySelector('.banner');
		toggle.onclick=function () {
			toggle.classList.toggle('active');
			banner.classList.toggle('active');
			
		}
	</script>
</body>
</html>