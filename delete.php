<?php
include('config.php');
include('functions.php');
    $id = $_GET['srno']; 
    $role = get_role($conn,$id);
    $query = "DELETE FROM users WHERE srno = '$id'";
    $data = mysqli_query($conn,$query);
     if($data)
     {
      switch($role)
      {
         case 2:
            header("location:teachers.php");
            break;
         case 3:
            header("location:students.php");
            break;
      }
     }
     else
     {
      echo "failed to delete";
     }

 
?>