<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<!--<link href="https://fonts.googleapis.com/css?family=Do+Hyeon|East+Sea+Dokdo" rel="stylesheet">-->
	<?php include '../php/header.php';
	require '../php/connect.php';
	session_start();
	if(isset($_SESSION['uname'])){
		$username = $_SESSION['uname'];
	}
	else
		$username = "Guest";
	?>
	<style>
	
	#center,#left,#right{
		padding-right:50px;
		padding-left: 50px;
		float:left;
	}
	#left{
		width:260px;
	}
	#center{
		width:30%;
	}
	#right{
		width:20%;
		margin-top: 31px;
	}
	body{
		font-family: Hydeon;
	}
	</style>
</head>
<body>
	<?php include '../php/navbar.php';?>
	<?php
	echo '
	<div>
		<div id="left">
			<br><br><br>
			<img  src="../images/slide4.jpg" alt="image" width="260px" height="150px">
			<center><p>Samsung</p></center><br>
			<hr><br>
			<img src="../images/slide5.jpg" alt="image" width="260px" height="150px">
			<center><p>Apple</p></center>
			<hr>
		</div>
		
		<div id="center">
			<h1 style="color: #3B3738">Gadgets 4 you</h1>
			<h2 style="color:#A2AB58">What is our website</h2>
			<p style="color: #FDF3E7">Introduction to our website
			Our website is the very easy one to find out the good mobiles and acessories 
			</p><br><br><br><br><br>
				<hr>
			<h1 style="color: #3B3738">Web Developers</h1>
			<ul>
				<li>Aakash Hemadri</li>
				<li>Jei Vardhan</li>
				<li>Nitesh Kumar</li>
				<li>Venkata Niteesh</li>
			</ul>
		</div>
		<div id="right">
			<h1 style="color:#A2AB58">Contact</h1>
			<p style="color:#FDF3E7 ;">
				Gadgets 4 you<br>
				Msc Software systems<br>
				PSG College of technology<br>
				Coimbatore
			</p>
				<br><br><br><br>
				<hr>
		</div>
	</div>'
	?>
	<?php include '../php/footer.php';?>
</body>
</html>