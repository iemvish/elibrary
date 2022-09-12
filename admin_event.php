<?php
//session_start();
/*
// Check do the person logged in
if ($_SESSION['email'] == NULL) {
    // Haven't log in
    header("location:admin.php");
}*/
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
  
</head>

<body>
    <div class="container">
    <div class="header-block">
    <?php include('header.php');?>
    </div>

        <div class="mainblock">
            <?php include('sidebar.php') ?>
         <!--   <div class="dashleft">
                <div class="user">

                </div>
               <ul class="dmenu">
                <a href=""><li><h3>Dashboard</h3></li></a>
                <a href=""><li><h3>My Account</h3></li></a>
                <a href=""><li><h3>Books</h3></li></a>
                <a href=""><li><h3>Issue/Return</h3></li></a>
                <a href=""><li><h3>E-books</h3></li></a>
                <a href="logout.php"><li id="logout"><h3>Logout</h3></li></a>
                

               </ul>
            </div> -->

            <div class="dashright">
                <p>Dashboard</p>
                <div class="block1">
                    <div class="b1"></div>
                    <div class="b2"></div>
                    <div class="b3"></div>
                    <div class="b4"></div>
                </div>
           


            </div>
        </div>
    </div>
</body>

</html>