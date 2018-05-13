<?php
	if(basename($_SERVER['PHP_SELF']) == "home.php")
		$dir="";
	else 
		$dir = "../";
	$sql = "SELECT * from `product` WHERE ptag='FEATURED'";
	$fproduct = $db->query($sql);
	echo "<br><br>";
	if($fproduct->num_rows > 0){
	
	while($row = $fproduct->fetch_assoc()){
	
		echo '<div id="over">
				<div id="product-image">
					<a href="'.$dir.'pages/product.php?prod='.$row['pid'].'">
						<img src="data:image/jpeg;base64,'.base64_encode($row["pimage"]).'"/>
					</a>
				</div>';
		echo "<h4>".$row['pname'].$row['pmodel']."</h4>";
		echo "<h3>".$row['pprice']."</h3><br><br>
			</div>
		";
		
	}
}
?>