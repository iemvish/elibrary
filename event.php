<?php
session_start();
include("config.php");

// Check do the person logged in
if(!isset($_SESSION['email'])) {
    header("location:login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/mystyle1.css">
</head>

<body>
    <div class="container">
        <?php include('header.php');?>
        <div class="mainblock">
            <?php include('sidebar.php'); ?>
            <div class="dashright">



            </div>
        </div>
    </div>
</body>

</html>