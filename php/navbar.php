<?php
if(basename($_SERVER['PHP_SELF']) == "home.php")
	$dir="";
else 
	$dir = "../";
print('<nav>
			<div id="upperNav">
				<a><img src="'.$dir.'images/nav/fb.jpg" alt="search" height="17px" width="17px"></a>
				<a><img src="'.$dir.'images/nav/twitter.jpg" alt="search" height="17px" width="17px"></a>
				<a><img src="'.$dir.'images/nav/gplus.jpg" alt="search" height="13px" width="13px"></a>
				<a><img src="'.$dir.'images/nav/insta.jpg" alt="search" height="13px" width="13px"></a>
				<div style="float:right;margin-right: 10px;">
					<a href="#">Welcome!, '.$username.'</a>
					<a href="'.$dir.'pages/login.php"><img src="'.$dir.'images/nav/login.jpg" alt="search" height="12px" width="12px" href="'.$dir.'pages/login.php"></a>
					<a href="'.$dir.'pages/cart.php"><img src="'.$dir.'images/nav/cart.jpg" alt="search" height="14" width="14px"></a>
					<a><img src="'.$dir.'images/nav/search.jpg" alt="search" height="12px" width="12px"></a>
					<input type="text" name="" placeholder="Product name">
				</div>
			</div>
		</nav>
		<nav>
			<div id="lowerNav">
				<a href="'.$dir.'home.php">HOME</a>
				<a href="'.$dir.'pages/list.php?tag=PREMIUM">PREMIUM</a>
				<a href="'.$dir.'pages/list.php?tag=LATEST">LATEST</a>
				<a href="'.$dir.'pages/list.php?tag=BUDGET">BUDGET</a>
				<a href="'.$dir.'pages/list.php?tag=CAMERA">CAMERA</a>
				<div style="float:right;margin-right: 10px;">
					<a href="'.$dir.'pages/contact.php">CONTACT</a>
					<a href="'.$dir.'pages/about.php">ABOUT</a>
				</div>
			</div>
		</nav>');
?>