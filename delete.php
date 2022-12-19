https://www.w3schools.com/sql/sql_delete.asp

DELETE FROM Admin WHERE adminID=$aid;

<?php
  include('database.php');
  session_start();
  $id=$_SESSION['id'];
  $query=mysqli_query($connect,"SELECT * FROM customer where cusId='$id'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
?>

<?php
      if(isset($_POST['editbtn'])){
        $Username = $_POST['username'];
        $Nickname = $_POST['nickname'];
        $Password = $_POST['password'];
        $Email = $_POST['email'];
        $Phone = $_POST['phone'];
      $query = "UPDATE customer SET cusName = '$Username',
                      cusNickName = '$Nickname', cusPass = $Password, cusEmail = '$Email',cusPhone = '$Phone'
                      WHERE cusId = '$id'";
                    $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "Index.php";
        </script>
        <?php
             }               
?>  