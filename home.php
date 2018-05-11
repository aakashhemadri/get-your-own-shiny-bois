<?php
	//error_reporting(0);S
	session_start();
	if(isset($_SESSION['uname'])){
		$username = $_SESSION['uname'];
	}
	else
		$username = "Guest";

	require 'php/connect.php';
	$hot_product = array("SAMSUNG","APPLE","VIVO","XIAOMI","OPPO","LG");//NEEDS TO PULL FROM DATABASE -- A FEATURE FOR LATER
    /**********************CART ADDITION*********************

	//Preparing select statement
	$sql = "SELECT * from cart WHERE ";
	//Preparing statement for query!
	if($stmt = mysqli_prepare($db, $sql)){
		//Binding variables to the prepared statement as parameters!
		mysqli_stmt_bind_param($stmt, "s");
	}
	$username = $_SESSION['username'];
	/*
	$g4u_cart = $db->query("SELECT * FROM cart");

	//SETTING CURRENT USER
		if(isset($_POST['uid']))
			$username = $_POST['uid'];//After validation
		else
			$username = "Guest";
	//SETTING CART DETAILS BY FETCHING DATABASE INFO
		$conn = new mysqli("localhost","root","","g4u");
		$USER_ = $conn->query("SELECT * from 'user' where '$username'");
		$CART_ = $conn->query("SELECT * from 'cart'");
	//	$LIST_ = $conn->query("SELECT * from 'list'")*/
?>


<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>The Smartphone Destination!</title>
		<!--<link rel="stylesheet" type="text/css" href="css/font-face.css">-->
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<link rel="stylesheet" type="text/css" href="css/nav.css"/>
		<link href="https://fonts.googleapis.com/css?family=Do+Hyeon|East+Sea+Dokdo" rel="stylesheet">
		<script src="scripts/slide.js"></script>
	</head>
	<body onload="startTimer();">
	<div id="container">
		<?php require 'php/navbar.php'; ?>
		<div><!--Pictures needs replacing! This is not redundant code-->
			<img id='img' src="images/slide1.jpg" alt="image" width="100%">
		</div>
		<div id="side">
			<a id="title">BRANDS</a><br>
			<hr style="color:orange;">
			
			<?php echo '<a href="pages/brands.php?tag=' . $hot_product[0] . '">'.$hot_product[0].'</a>';?><br><br>
			<?php echo '<a href="pages/brands.php?tag=' . $hot_product[1] . '">'.$hot_product[1].'</a>';?><br><br>
			<?php echo '<a href="pages/brands.php?tag=' . $hot_product[2] . '">'.$hot_product[2].'</a>';?><br><br>
			<?php echo '<a href="pages/brands.php?tag=' . $hot_product[3] . '">'.$hot_product[3].'</a>';?><br><br>
			<?php echo '<a href="pages/brands.php?tag=' . $hot_product[4] . '">'.$hot_product[4].'</a>';?><br><br>
			<?php echo '<a href="pages/brands.php?tag=' . $hot_product[5] . '">'.$hot_product[5].'</a>';?><br>
			
			<hr style="color:orange;">
		</div>
		<div id="products">
			<a>Featured products</a>
			<?php require "php/featured.php"; ?>
		</div>
	</div>
		<div>
		<?php include 'php/footer.php';?>
		</div>
	<div>
	</body>
</html>