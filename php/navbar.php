<?php
print('
	<body onload="startTimer();">
		<nav>
			<div id="upperNav">
				<a><img src="../images/nav/fb.jpg" alt="search" height="17px" width="17px"></a>
				<a><img src="../images/nav/twitter.jpg" alt="search" height="17px" width="17px"></a>
				<a><img src="../images/nav/gplus.jpg" alt="search" height="13px" width="13px"></a>
				<a><img src="../images/nav/insta.jpg" alt="search" height="13px" width="13px"></a>
				<div style="float:right;margin-right: 10px;">
					<a href="#"><?php echo "Welcome!, $username "?></a>
					<a href="../pages/login.php"><img src="../images/nav/login.jpg" alt="search" height="12px" width="12px" href="pages/login.php"></a>
					<a href="../pages/cart.php"><img src="../images/nav/cart.jpg" alt="search" height="14" width="14px"></a>
					<a><img src="../images/nav/search.jpg" alt="search" height="12px" width="12px"></a>
					<input type="text" name="" placeholder="Product name">
				</div>
			</div>
		</nav>
		<nav>
			<div id="lowerNav">
				<a href="../pages/brands.html">BRANDS</a>
				<a href="#pPremium">PREMIUM</a>
				<a href="#pLatest">LATEST</a>
				<a href="#pBudget">BUDGET</a>
				<a href="pCamera">CAMERA</a>
				<a href="pDev">DEV</a>
				<a href="pPrice">PRICE</a>
				<div style="float:right;margin-right: 10px;">
					<a href="pContact">CONTACT</a>
					<a href="pService">SERVICE</a>
					<a href="../pages/about.php">ABOUT</a>
				</div>
			</div>
		</nav>');
?>