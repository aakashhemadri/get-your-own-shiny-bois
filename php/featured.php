<?php
/**********************PRODUCTS*************************/
	//Preparing select statement
	$sql = "SELECT * from `product` WHERE ptag='FEATURED'";
	//Preparing statement for query!
	$fproduct = $db->query($sql);
	if($fproduct->num_rows > 0){
	$i = 0;
	while($row = $fproduct->fetch_assoc()){
	if($i < 3){
		echo '<div id="product-image"><img src="data:image/jpeg;base64,'.base64_encode($row["pimage"]).'"/></div>' ;
		echo "<h2>".$row['pname'].$row['pmodel']." (RAM " . $row['pram'] . ")"."</h2>";
		echo "<h1>".$row['pprice']."</h1><br><br>";
		$i++;
		}
	}
}
?>