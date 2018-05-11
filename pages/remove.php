<?php

	require '../php/connect.php';
	session_start();
	if(isset($_SESSION['uname'])){
		$username = $_SESSION['uname'];
	}
	else
		$username = "Guest";
	
	$product = $_GET['prod'];

	$sql = 'DELETE  FROM `cart` WHERE pid='.$product.'';

	$db->query($sql);
	
	/*if($db->query($sql))
		echo 'Deleted';
	else
		echo 'Error';
	*/
	header("Location: ../pages/cart.php");
?>