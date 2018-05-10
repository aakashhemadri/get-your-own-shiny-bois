<?php
	$brandname = $_GET['tag'];
	require '../php/connect.php';
	$sql = 'SELECT * from product WHERE pname="'.$brandname.'"';
	$result = $db->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<?php include '../php/header.php';?>
</head>
<body>
	<?php include '../php/navbar.php';?>
	<?php 
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc())
		{
			echo '<ul>';
			echo "<li>" . $row['pname']. " " . $row['pmodel'] . "</li><br>";
			echo "</ul>";
		}
	}
	?>
	<?php include '../php/footer.php';?>
</body>
</html>