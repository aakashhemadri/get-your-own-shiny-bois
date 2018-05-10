 <?php
session_start();
if(isset($_SESSION['uname'])){
		$username = $_SESSION['uname'];
	}
else
		$username = "Guest";
require '../php/connect.php';
$product = $_GET['prod'];
$sql = "SELECT * FROM `product` WHERE pid='$product'";
$result = $db->query($sql);
?>

<html>

<head>
	<?php require "../php/header.php";?>
	<?php 
	if(isset($_GET['atc'])){
		$message = $_GET['atc'];
			echo "<script type='text/javascript'>alert('".$message."');</script>";
	}
	?>
	<style>
		body{
			font-family: 'Verdana';
			width: 100%;
			overflow: hidden;
		}
		div#product-image img{
			float:left;
			padding-right: 10px;
			margin-top: 25px;
			margin-left: 20px;
			width: 400px;
			height: 390px;
			padding-right: 5em;
		}	
		#top{
			margin-left: 40%;
		}
		#list{
			list-style-type: square;
		}
		#Buy,#Cart,#More{
			width: 15%;
			height: 7%;
			background-color: #E8943A;
			outline: none;
			border: none;
			border-radius: 1cm;
		}

		#Buy{
			background-color: #E5491F;
		}

		#More{
			background-color: 059840;
		}
	
		#page1{
			width: 100%;
			float: left;
		}
		
		#page2{
			width: 100%;
		}
		
		#list1,#list2,#list3,#list4{
			float:left;
			width:40%;
			margin-left: 10%;
		}

	</style>
</head>

<body>
	<?php
	require "../php/navbar.php";

		if ($result->num_rows > 0) 
		{
			while ($row = $result->fetch_assoc())
			{		
					echo '
					<div id="page1">
							<div id="product-image"><img  src="data:image/jpeg;base64,' .base64_encode($row["pimage"]).'"/>
							</div>' ;
						
						echo "<h2>" . $row['pname']."  ".$row['pmodel'] . " (RAM " . $row['pram'] . ")"."</h2> <h3>" . $row['pprice'] . "</h3>";

						echo '<h4>Highlights</h4>

						<ul id="top">
							<li>' . $row['pstorage'] . '</li><br>
							<li>' . $row['pdisplay'] . '</li><br>
							<li>' . $row['pcamera']  . '</li><br>
							<li>' . $row['pbattery'] . '</li><br>
							<li>' . $row['pram']   . '</li>
						</ul>';

						echo '<input type="button" id="Buy" value="Buy">'."&nbsp;&nbsp;&nbsp;&nbsp;" .
						 '<a href="../php/addtocart.php?pid='.$product.'"><input type="button" id="Cart" value="Add to cart"></a>&nbsp;&nbsp;&nbsp;&nbsp;

						 <a href="#list1" style="text-decoration:none;">
						  	<input type="button" id="More" value="More">
						 </a>

						 <br><br><br><br><br><br>
						
							<h1 style="margin-left:40%;">Description
							</h1>

						<div id="list1">
					 		<h2>Basics</h2>
	
							<ul>
								<li>' . $row['pstorage'] . '</li><br>
								<li>' . $row['pdisplay'] . '</li><br>
								<li>' . $row['pcamera']  . '</li><br>
								<li>' . $row['pbattery'] . '</li>	
							</ul>
						</div>
		
						<div id="list2">
							<h2>Technical</h2>
		
							<ul>
								<li>' . $row['pgpu'] . '</li><br>
								<li>' . $row['pos']  . '</li><br>
								<li>' . $row['pram'] . '</li><br>
								<li>' . $row['psoc'] . '</li>
							</ul>
						</div>

						<div id="list3">
							<h2>Device Info</h2>
	
							<ul>
								<li>' . $row['pos'] . '</li><br>
								<li>' . $row['pweight'] . '</li><br>
								<li>' . $row['pdimension']  . '</li><br>
								<li>' . $row['psim'] . '</li><br>
							</ul>
						</div>
				
						<div id="list4">
							<h2>Additional Info</h2>
	
							<ul>
								<li>' . $row['pbluetooth'] . '</li><br>
								<li>' . $row['pusb']  . '</li><br>
								<li>' . $row['pprice'] . '</li><br>
							</ul>
						</div>

	
					</div>';
			}	
		}

		else 
		{
    		echo "0 results";
    	}
				$db->close();
		?>
	</div>
	</body>

</html>