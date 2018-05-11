<?php
	session_start();
	if(isset($_SESSION['uname'])){
		$username = $_SESSION['uname'];
	}
	else
		$username = "Guest";
	require '../php/connect.php';
	$sql = "SELECT * from cart WHERE username='$username'";
	$result = $db->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<?php require '../php/header.php';?>
	<style>
	
		body{
			font-family: "Hydeon";
		}

		#product-image img{
			float:left;
			padding:1em;
			width: 250px;
			height: 250px;
			padding-right: 5em;
		}

		#List{
			padding-left:30%;
		}
		
		a#link{
			text-decoration: none;
			color: orange;
		}
		hr{
			width: 75%;
			color:white;
			height:0.5%;
			background-color: white;
		}
	
	</style>
</head>
<body>
	<?php require '../php/navbar.php';?>

	<?php 
		if($result->num_rows > 0){
			while($rows = $result->fetch_assoc()){
				$q = "SELECT * FROM `product` WHERE `pid`=". $rows['pid'];
				$newresult = $db->query($q);
				$newrow = $newresult->fetch_assoc();

				echo'  

				<div id="main">

				<div id="product-image">
					<a id="link" href="../pages/product.php?prod='.$newrow['pid'].'">
						<img  src="data:image/jpeg;base64,' .base64_encode($newrow["pimage"]).'"/>
					</a>
				</div> 

				<a id="link" href="../pages/product.php?prod='.$newrow['pid'].'"><h1>' . $newrow['pname']."  ".$newrow['pmodel'] ."</h1></a> <h2>" . $newrow['pprice'] . "</h2>";

				echo '<h3>Highlights</h3>
						<div id="List">
							<ul>
								<li>' . $newrow['pstorage'] . '</li><br>
								<li>' . $newrow['pcamera']  . '</li><br>
								<li>' . $newrow['pram']   . '</li><br>
							</ul>
						</div>
						<hr>
						<br>
				</div>
				';
			}
		}
	?>
	<?php require '../php/footer.php';?>
</body>
</html>