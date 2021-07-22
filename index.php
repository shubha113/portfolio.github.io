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
	<title>portfolio</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="styleportfolio.css">
	</head>
<body>
	<section class="banner">
		<header>
			<a href="#" class="logo"><b style="color: yellow; font-size: 2em;">P</b><b style="font-size: 1.5em; color: #ed325f;">ort</b><b style="color: yellow; font-size: 2em;">f</b><b style="font-size: 1.5em; color: #ed325f;">olio</b></a>
			<div class="toggle"></div>
		</header>
		<img src="shubham1.jpeg" class="men">
		<div class="content">
			<div class="contentbx">
				<h3>Hello,</h3>
				<h2>I'm Shubham</h2>
				<h4>B.tech CSE student</h4>
				<p>Am 19 years old and am 3rd year B.tech student in Lovely Professional University. I wanted to be a web developer.</p>
				<a href="#">MY CV</a>
				<a href="#">FOR WORK</a>
			</div>
		</div>
		<ul class="sci">
			<li><a href="https://www.facebook.com/shubhamkumar.rai.5811/" target="blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Facebook_icon.svg/1024px-Facebook_icon.svg.png"></a></li>
			<li><a href="https://www.instagram.com/shubhamkumarrai8" target="blank"><img src="https://statesborodowntown.com/wp-content/uploads/2016/01/instagram-Logo-PNG-Transparent-Background-download.png"></a></li>
			<li><a href="https://in.linkedin.com/in/shubham-kumar-rai-516464193" target="blank"><img src="https://cdn3.iconfinder.com/data/icons/cute-flat-social-media-icons-3/512/linkedin.png" style="height: 7vh;"></a></li>
		</ul>
		<ul class="menu">
			<li><a href="#">Home</a></li>
			<li><a href="aboutme.php">About Me</a></li>
			<li><a href="#">Work</a></li>
			<li><a href="#">Resume</a></li>
			<li><a href="pcontactme.php">Contact</a></li>
		</ul>
		<img src="">
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