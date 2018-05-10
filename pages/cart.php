<?php
	session_start();
	$username = $_SESSION['uname'];
	require '../php/connect.php';
	$sql = "SELECT * from cart WHERE username=$username";
	$result = $db->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<?php require '../php/header.php';?>
</head>
<body>
	<?php require '../php/navbar.php';?>

	<?php require '../php/footer.php';?>
</body>
</html>