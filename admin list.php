<?php include("database.php"); ?>
 
<html>
<head></head>
 
 
<script type="text/javascript">
 
function confirmation()
{
	answer = confirm("Do you want to delete this admin?");
	return answer;
}
 
</script>
 
 
<body>
 
 
		<h1>List of Admin</h1>
 
		<table border="1" width="650px">
			<tr>
				<th>Admin Id</th>
				<th>Admin Name</th>
				<th>Admin Phone Number</th>
                <th>Admin Password</th>
                <th>Admin Email</th>
				<th colspan="5">Action</th>
			</tr>
			
			</div>
        <div class="button">
        <a href="add admin.php">Add</a>
        </div>

			<?php
			
			$result = mysqli_query($connect, "SELECT * FROM `admin`");	
	         while($row = mysqli_fetch_assoc($result))
				{
				
				?>			
 
				<tr>
					<td><?php echo $row["adminId"]; ?></td>
					<td><?php echo $row["adminName"]; ?></td>
					<td><?php echo $row["adminPhone"]; ?></td>
                    <td><?php echo $row["adminPass"]; ?></td>
                    <td><?php echo $row["adminEmail"]; ?></td>
					

					<td><a href="#?edit&adminId=<?php echo $row['adminId']; ?>">Edit</a></td>
					<!-- <td><a href="admin list.php?del&adminId=<?php echo $row['adminId']; ?>" onclick="return confirmation();">Delete</a></td> -->


					
				</tr>
				<?php
				
				}		
			
			?>
		</table>
 
 


<?php
 
//   session_start();

 
// if (isset($_GET["del"])) 
// {
// //   $aid=$_SESSION['adminId'];
// 	$aid = $_GET["adminId"]; 
//  	$query=mysqli_query($connect,"DELETE FROM admin WHERE adminId='$aid'")or die(mysqli_error());
// 	$row=mysqli_fetch_array($query);
// 	header("Location:admin list.php");
// }
 
// if($query !== FALSE)
// {
//    echo("The row has been deleted.");
// }else{
//    echo("The row has not been deleted.");
// }



?>


</body>
</html>

