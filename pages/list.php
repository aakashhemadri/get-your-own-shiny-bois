<?php
session_start();
if(isset($_SESSION['uname'])){
		$username = $_SESSION['uname'];
}
else
	$username = "Guest";
require '../php/connect.php';
	if(isset($_GET['tag'])){
		$productname = $_GET['tag'];
		$sql = "SELECT * FROM `product` WHERE ptag='$productname'";
	}
	else if(isset($_POST['searchbox'])){
		$query = $_POST['searchbox'];
		$sql = "SELECT * FROM `product` WHERE pname LIKE '%$query%' OR pmodel LIKE '%$query%' OR ptag LIKE '%$query%' OR pdesc LIKE '%$query%' OR pdimension LIKE '%$query%' OR pweight LIKE '%$query%' OR psoc LIKE '%$query%' OR pcpu LIKE '%$query%' OR pgpu LIKE '%$query%' OR pram LIKE '%$query%' OR pstorage LIKE '%$query%' OR pmemory LIKE '%$query%' OR pdisplay LIKE '%$query%' OR pos LIKE '%$query%' OR pcamera LIKE '%$query%' OR psim LIKE '%$query%' OR pwifi LIKE '%$query%' OR pbluetooth LIKE '%$query%' OR pusb LIKE '%$query%' OR ptag LIKE '%$query%'";
	}
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
			while($row = $result->fetch_assoc()){
				echo'  

				<div id="main">

				<div id="product-image">
					<a id="link" href="../pages/product.php?prod='.$row['pid'].'">
						<img  src="data:image/jpeg;base64,' .base64_encode($row["pimage"]).'"/>
					</a>
				</div> 

				<a id="link" href="../pages/product.php?prod='.$row['pid'].'"><h1>' . $row['pname']."  ".$row['pmodel'] ."</h1></a> <h2>" . $row['pprice'] . "</h2>";

				echo '<h3>Highlights</h3>
						<div id="List">
							<ul>
								<li>' . $row['pstorage'] . '</li><br>
								<li>' . $row['pcamera']  . '</li><br>
								<li>' . $row['pram']   . '</li><br>
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