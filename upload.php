
<?php include("connection.php"); ?>
<html>
    <head>

    </head>


<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
   
    <label for="categoryImage">Select Image File: <input type="file" name="categoryImage"></label>
     <p>Category Name:<input type="text"	name="categoryName">

    <input type="submit" name="submit" value="Upload">

    <a href="view.php">View picture</a>
</form>

</body>
    </html>


<?php 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"]))
{ 





    $status = 'error'; 
    if(!empty($_FILES["categoryImage"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["categoryImage"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['categoryImage']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $result = mysqli_query($connect,"INSERT INTO `category`(`categoryImage`)  VALUES ('$imgContent')"); 
             
            if($result){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>