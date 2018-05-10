<body>
<head>
	<style type="text/css">
		#product-image img{
			padding:1em;
			width: 110px;
			height: 110px;
		}
		#over{
			float:left;
			padding-right: 1px;
		}
	</style>
</head>
<body>
<?php
/**********************PRODUCTS*************************/
	//Preparing select statement
	$sql = "SELECT * from `product` WHERE ptag='FEATURED'";
	//Preparing statement for query!
	$fproduct = $db->query($sql);
	echo "<br><br>";
	if($fproduct->num_rows > 0){
	while($row = $fproduct->fetch_assoc()){
		echo "<div id='product-image'><img src='data:image/jpeg;base64,".base64_encode($row['pimage'])."'/></div>";
		echo "<h2>".$row['pname'].$row['pmodel']." (RAM " . $row['pram'] . ")"."</h2>";
		echo "<h1>".$row['pprice']."</h1><br><br>";
	}
}
?>
</body>
</html>