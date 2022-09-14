<?php
include('config.php');
    $id = $_GET['srno']; 
    $query = "DELETE FROM books WHERE srno = '$id'";
    $data = mysqli_query($conn,$query);
     if($data)
     {
        header("location:book_display.php");
     }
     else
     {
      echo "failed to delete";
     }

 
?>