<?php

session_start();
include "config.php";
$emaill = $_SESSION['email'];
$query = "SELECT * from users where email = '$emaill'";
$results = mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($results);
$role = $data['role'];


// image uploading
if ($_FILES['img']['name']) {
    move_uploaded_file($_FILES['img']['tmp_name'], "image/" . $_FILES['img']['name']);
    $img = "image/" . $_FILES['img']['name'];

}
    
$insert = "INSERT INTO users (user_pic) VALUES('$img') WHERE role = '$role'";
// $sql = "UPDATE users SET user_pic = '$img' WHERE role = 1 ";
$result = mysqli_query($conn, $insert); 



?>