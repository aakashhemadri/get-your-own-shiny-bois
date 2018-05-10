<?php
	$productname = $_GET['tag'];
	require '../php/connect.php';
	$sql = "SELECT * FROM `product` WHERE ptag='$productname'";
	$result = $db->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<?php require '../php/header.php';?>
</head>
<body>
	<?php require '../php/navbar.php';?>

	<?php 
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				
			}
		}
	?>

	<?php require '../php/footer.php';?>
</body>
</html>