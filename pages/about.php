<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Do+Hyeon|East+Sea+Dokdo" rel="stylesheet">
	<?php include '../php/header.php';?>

	<style>
	
	#center,#left,#right{
		
		padding-right:100px;
		padding-left: 50px;
		float:left;
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
			
			<center><p>Samsung</p><hr><br></center>
			<img src="../images/slide5.jpg" alt="image" width="260px" height="150px">
			<center><p>Apple</p></center>
		</div>
		
		<div id="center">
			<h1 style="color: #3B3738">Get-show-bios</h1>
			<h2 style="color:#A2AB58">What is our website</h2>
			<p style="color: #FDF3E7">Introduction to our website
				<br>
			our website is the very easy one to find out the good mobiles and acessories 
			</p>
				<br><br><br>
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
			<h1 style="color:#A2AB58;">Most Popular Brands</h1>
			<p style="color: #FDF3E7;">
				Samsung<br><br>
				Motto<br><br>
				Redmi<br><br>
				Oppo</p><br><hr>
			</p>
			<h1 style="color:#A2AB58">Contact</h1>
			<p style="color:#FDF3E7 ;">
				get-show-shiny-bois<br>
				Msc Software systems<br>
				PSG College of technology<br>
				Coimbatore
			</p>
				<br>
		</div>
	</div>'
	?>
	<?php include '../php/footer.php';?>
</body>
</html>