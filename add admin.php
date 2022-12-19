<?php include("database.php"); ?>
 
<html>
<head>
 
</head>
<body>
 
 
		<h1>Add New Admin</h1>
 
		<form name="addnewfrm" method="post" action="">
 
			<p>Admin Id:<input type="text" name="admin_id" >
			<p>Admin Name:<input type="text"	name="admin_name">
			<p>Admin Phone :<input type=”text” name="admin_phone">
			<p>Admin Password:<input type="text" name="admin_pass">
			<p>Admin Email :<input type=”text” name="admin_email">
		   
						
			<p><input type="submit" name="savebtn" value="Save Record">
 
		</form>
 
		<input type="button" value="View" onclick="location='admin list.php'">
		<!-- <input type="button" value="View Order" onclick="location='order_details.php'"> -->
</body>
</html>
 
<?php
 
if (isset($_POST["savebtn"])) 	
{
	$aid = $_POST["admin_id"];  	
	$aname = $_POST["admin_name"];  	
	$aphone = $_POST["admin_phone"];  
	$apass = $_POST["admin_pass"];	
	$aemail = $_POST["admin_email"];
	
	
$result = mysqli_query($connect,"SELECT * FROM `admin`" );
$count=mysqli_num_rows($result);


			mysqli_query($connect,"INSERT INTO `admin`(`adminId`, `adminName`, `adminPhone`, `adminPass`, `adminEmail`)
			VALUES('$aid','$aname','$aphone','$apass','$aemail')");
			echo "Your registration is completed..";

        
}

?>




