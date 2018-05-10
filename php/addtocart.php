<?php
session_start();
$username = $_SESSION['uname'];
$id = $_GET['pid'];
require '../php/connect.php';
$sql = "INSERT INTO `cart` (username, pid) VALUES ('".$username."','".$id."')";
if($result = $db->query($sql))
	$info="Added to cart!";
else
	$info="Sorry!, couldn't add to cart!";
header("Location: ../pages/product.php?prod=".$id."&atc=".$info);
?>