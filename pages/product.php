 <?php
require '../php/connect.php';

$sql = "SELECT * FROM product";
$result = $db->query($sql);
?>

<html>

<head>
	<?php require "../php/header.php";?>
	<style>
		div#desc{
			float: right;
			margin-right:300px;
		}
		body{
			font-family: 'Hydeon';
		}
		table{
			border-collapse: collapse;
			margin-right: 25px;
			border-style: solid;
		}
		div#product-image img{
			float:left;
			padding-right: 10px;
			margin-top: 25px;
			margin-left: 20px;
			width: 250px;
			height: 250px;
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
				
				if($row['pid'] == 1)
				{	echo '<div id="product-image"><img  src="data:image/jpeg;base64,' .base64_encode($row["pimage"]).'"/></div>' ;
					print('<div id="desc">
					<table cellpadding="5px" border="1px">		
					<tbody>');	
					echo "<h2>" . $row['pname']."  ".$row['pmodel'] . " (RAM " . $row['pram'] . ")"."</h2>";
					echo "<h1>" . $row['pprice'] . "</h1><br><br>";
				
					echo "<h3>Description</h3>";
					echo '<tr>'.
						'<td>'."ID:".'</td>'.
						'<td>'.$row['pid'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."NAME".'</td>'.
						'<td>'.$row['pname'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."MODEL".'</td>'.
						'<td>'.$row['pmodel'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."DIMENSION".'</td>'.
						'<td>'.$row['pdimension'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."WEIGHT".'</td>'.
						'<td>'.$row['pweight'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."CPU".'</td>'.
						'<td>'.$row['pcpu'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."GPU".'</td>'.
						'<td>'.$row['pgpu'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."RAM".'</td>'.
						'<td>'.$row['pram'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."DISPLAY".'</td>'.
						'<td>'.$row['pdisplay'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."STORAGE".'</td>'.
						'<td>'.$row['pstorage'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."MEMORY".'</td>'.
						'<td>'.$row['pmemory'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."OS".'</td>'.
						'<td>'.$row['pos'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."BATTERY".'</td>'.
						'<td>'.$row['pbattery'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."CAMERA".'</td>'.
						'<td>'.$row['pcamera'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."SIM".'</td>'.
						'<td>'.$row['psim'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."WIFI".'</td>'.
						'<td>'.$row['pwifi'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."BLUETOOTH".'</td>'.
						'<td>'.$row['pbluetooth'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."USB".'</td>'.
						'<td>'.$row['pusb'].'</td>'.
					 '</tr>'.
					 '<tr>'.
						'<td>'."PRICE".'</td>'.
						'<td>'.$row['pprice'].'</td>'.
					 '</tr>';
				}

			}
		}

		else 
		{
    		echo "0 results";
    	}
				$db->close();
		?>
		</tbody>
	</table>
	</div>
	</body>

</html>