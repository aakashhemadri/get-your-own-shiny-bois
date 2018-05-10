<?php
	//error_reporting(0);
	session_start();
	if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
		$_SESSION['username'] = "guest";
	}
	require 'php/connect.php';
	$hot_product = array("SAMSUNG","APPLE","VIVO","XIAOMI","OPPO","LG");//NEEDS TO PULL FROM DATABASE -- A FEATURE FOR LATER
	$username = "Guest"
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
		<nav>
			<div id="upperNav">
				<a><img src="images/nav/fb.jpg" alt="search" height="17px" width="17px"></a>
				<a><img src="images/nav/twitter.jpg" alt="search" height="17px" width="17px"></a>
				<a><img src="images/nav/gplus.jpg" alt="search" height="13px" width="13px"></a>
				<a><img src="images/nav/insta.jpg" alt="search" height="13px" width="13px"></a>
				<div style="float:right;margin-right: 10px;">
					<a href="#"><?php echo "Welcome!, $username "?></a>
					<a href="pages/login.php"><img src="images/nav/login.jpg" alt="search" height="12px" width="12px" href="pages/login.php"></a>
					<a href="pages/cart.php"><img src="images/nav/cart.jpg" alt="search" height="14" width="14px"></a>
					<a><img src="images/nav/search.jpg" alt="search" height="12px" width="12px"></a>
					<input type="text" name="" placeholder="Product name">
				</div>
			</div>
		</nav>
		<nav>
			<div id="lowerNav">
				<a href="#Brands">BRANDS</a>
				<a href="#pPremium">PREMIUM</a>
				<a href="#pLatest">LATEST</a>
				<a href="#pBudget">BUDGET</a>
				<a href="pCamera">CAMERA</a>
				<a href="pDev">DEV</a>
				<a href="pPrice">PRICE</a>
				<div style="float:right;margin-right: 10px;">
					<a href="pContact">CONTACT</a>
					<a href="pService">SERVICE</a>
					<a href="pages/about.php">ABOUT</a>
				</div>
			</div>
		</nav>
		<div><!--Pictures needs replacing! This is not redundant code-->
			<img id='img' src="images/slide1.jpg" alt="image" width="100%">
			<center>
			<!--<button type="button" onclick="displayPreviousImage()">Previous</button>&nbsp;&nbsp;&nbsp;
			<button type="button" onclick="displayNextImage()">Next</button>-->
			</center>
		</div>
		<div id="side">
			<a id="title">BRANDS</a><br>
			<hr style="color:orange;">
			<?php echo '<a href="pages/brands.php?tag=$hot_product[0]">'.$hot_product[0].'</a>';?><br>
			<?php echo '<a href="pages/brands.php?tag=$hot_product[1]">'.$hot_product[1].'</a>';?><br>
			<?php echo '<a href="pages/brands.php?tag=$hot_product[2]">'.$hot_product[2].'</a>';?><br>
			<?php echo '<a href="pages/brands.php?tag=$hot_product[3]">'.$hot_product[3].'</a>';?><br>
			<?php echo '<a href="pages/brands.php?tag=$hot_product[4]">'.$hot_product[4].'</a>';?><br>
			<?php echo '<a href="pages/brands.php?tag=$hot_product[5]">'.$hot_product[5].'</a>';?><br>
			<hr style="color:orange;">
		</div>
		<div id="products">
			<a>Featured products</a>
			<?php
			/*** *******************PRODUCTS*************************/
			//Preparing select statement
			$sql = "SELECT * from `product` WHERE ptag='FEATURED'";
			//Preparing statement for query!
			$fproduct = $db->query($sql);
			if($fproduct->num_rows > 0){
				$i = 0;
				while($row = $fproduct->fetch_assoc()){
					if($i < 3){
					echo '<div id="product-image"><img  src="data:image/jpeg;base64,' .base64_encode($row["pimage"]).'"/></div>' ;
					echo "<h2>" . $row['pname']."  ".$row['pmodel'] . " (RAM " . $row['pram'] . ")"."</h2>";
					echo "<h1>" . $row['pprice'] . "</h1><br><br>";
					$i++;
					}
				}
			}
			?>
		</div>
	</div>
		<div>
		<?php
			include 'php/footer.php';
		?>
		</div>
	<div>
	</body>
</html>