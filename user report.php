<?php include("database.php"); ?>
 
<html>
<head>
 
</head>
<body>
 
 
		<h1>Record register user</h1>
 
		<table border="1" width="650px">
			<tr>
				<th>Customer Id</th>
				<th>Customer Name</th>							
				<th>Customer Password</th>
				<th>Customer Email</th>
				<th>Customer PhoneNumber</th>
			</tr>
			
			<?php
			
			$result = mysqli_query($connect, "select cusId,cusName,cusPass,cusEmail,cusPhone FROM customer");	
			$count = mysqli_num_rows($result);
			if ($count < 1)
			{
			?>
				<tr>
					<td colspan="6">No Records Found</td>
				</tr>
			
			<?php
			}
			else
			{
				while($row = mysqli_fetch_assoc($result))
				{
					// $pay = $row["purchase_product_price"] * $row["purchase_quantity"];
				?>			
 
				<tr>
					<td><?php echo $row["cusId"]; ?></td>
					<td><?php echo $row["cusName"]; ?></td>							
					<td><?php echo $row["cusPass"]; ?></td>
                    <td><?php echo $row["cusEmail"]; ?></td>
					<td><?php echo $row["cusPhone"]; ?></td>
					
				</tr>
				
				<?php
				
				}
			}
			
			?>
		</table>
 
	
</body>
</html>