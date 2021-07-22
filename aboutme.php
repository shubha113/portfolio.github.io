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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>About Me</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="styleaboutme.css">
</head>
<body>

	<section class="banner">
		
		<header>
			<a href="#" class="logo"><b style="color: yellow; font-size: 2em;">P</b><b style="font-size: 1.5em; color: #ed325f;">ort</b><b style="color: yellow; font-size: 2em;">f</b><b style="font-size: 1.5em; color: #ed325f;">olio</b></a>
			<div class="toggle"></div>
		</header>
		<ul class="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="#banner">About Me</a></li>
			<li><a href="#">Work</a></li>
			<li><a href="#">Resume</a></li>
			<li><a href="pcontactme.php">Contact Me</a></li>
		</ul>
		
	<div class="container">
		<div class="card">
			<div class="box">
				<div class="content">
					<h2>01</h2>
					<h3>Self Confidence</h3>
					<p>I have great self-confidence in me. I can handle any critical situation with my understanding. I can do my work perfectly in small time and with intelligence.<br></p>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="box">
				<div class="content">
					<h2>02</h2>
					<h3>Leadership Skill</h3>
					<p>I enjoy delegating tasks and taking the lead on projects, but I also like to stay involved and inspire my team by showing that I'm working hands-on to help them, too.</p>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="box">
				<div class="content">
					<h2>03</h2>
					<h3>Technical Skill</h3>
					<p>I have good technical skills. I can work both on web development and android development field. Apart from this I have good knowledge in programing languages like C++ and Java.</p>
				</div>
			</div>
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

