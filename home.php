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
		<nav>
			<div id="upperNav">
				<a><img src="images/fb.jpg" alt="search" height="17px" width="17px"></a>
				<a><img src="images/twitter.jpg" alt="search" height="17px" width="17px"></a>
				<a><img src="images/gplus.jpg" alt="search" height="13px" width="13px"></a>
				<a><img src="images/insta.jpg" alt="search" height="13px" width="13px"></a>
				<div style="float:right;margin-right: 10px;">
					<a><img src="images/login.jpg" alt="search" height="12px" width="12px" href="pages/login.html"></a>
					<a><img src="images/cart.jpg" alt="search" height="14" width="14px"></a>
					<a><img src="images/search.jpg" alt="search" height="12px" width="12px"></a>
					<input type="text" name="" placeholder="Product name">
				</div>
			</div>
		</nav>
		<nav>
			<div id="lowerNav">
				<a href="pages/brands.html">BRANDS</a>
				<a href="#pPremium">PREMIUM</a>
				<a href="#pLatest">LATEST</a>
				<a href="#pBudget">BUDGET</a>
				<a href="pCamera">CAMERA</a>
				<a href="pDev">DEV</a>
				<a href="pPrice">PRICE</a>
				<div style="float:right;margin-right: 10px;">
					<a href="pContact">CONTACT</a>
					<a href="pService">SERVICE</a>
					<a href="pages\about.html">ABOUT</a>
				</div>
			</div>
		</nav>
		<div><!--Pictures needs replacing! This is not redundant code-->
			<img id='img' src="images/slide1.jpg" alt="image" width="100%">
			<center>
			<button type="button" onclick="displayPreviousImage()">Previous</button>&nbsp;&nbsp;&nbsp;
			<button type="button" onclick="displayNextImage()">Next</button>
			</center>
		</div>
		<div id="#pBrands">
		
		</div>
		<div id="#pPremium">
			
		</div>
		<footer>
			<p>
				Owned and Founded by gadgets4you<br>
				&copy;2018 gadgets4you.com<br>
			</p>
		</footer>
	</body>
</html>