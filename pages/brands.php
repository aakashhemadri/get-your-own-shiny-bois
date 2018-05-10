<?php
	session_start();
	$username = $_SESSION['uname'];
	$brandname = $_GET['tag'];
	require '../php/connect.php';
	$sql = 'SELECT * from product WHERE pname="'.$brandname.'"';
	$result = $db->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<?php include '../php/header.php';?>
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
		hr{
			width: 75%;
			color: white;
			height:0.5%;
			background-color: white;
		}
	</style>
</head>
<body>
	<?php include '../php/navbar.php';?>
	<?php 
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc())
		{
			
			echo'  

				<div id="main">

				<div id="product-image">
					<a href="">
						<img  src="data:image/jpeg;base64,' .base64_encode($row["pimage"]).'"/>
					</a>
				</div> 

				<h1>' . $row['pname']."  ".$row['pmodel'] ."</h1> <h2>" . $row['pprice'] . "</h2>";

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
	<?php include '../php/footer.php';?>
</body>
</html>