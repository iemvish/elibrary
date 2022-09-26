<?php
session_start();
// Check do the person logged in
if ($_SESSION['email'] == NULL) {
    // Haven't log in
    header("location:login.php");
}
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/dashstyle.css">
    <link rel="stylesheet" href="css/event_style.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/student_dashboard.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- header -->
            <?php include('dash_header.php'); ?>
            <!-- sidebar -->
            <?php include('dash_sidebar.php'); ?>

            <!-- main dashboard -->
            <div class="main-dash">
                <div class="row">
                    <div class="main-dash-content">

                        <div class="row">
                            <div class="dashboard-content">
                                <h1>WELCOME <?php $username = $_SESSION['email'];
                                            $query = "select * from users WHERE email = '$username'";
                                            $run = mysqli_query($conn, $query);
                                            if ($a = mysqli_fetch_array($run)) {
                                                echo $a['fullName'];
                                            } ?>
                                </h1>
                                <div class="main-blocks">
                                    <div class="row">
                                        <div class="block-a">
                                            <div class="main-block1">
                                                <div class="block1-content">
                                                    <div class="main-block1-text">
                                                        <h2>BOOK'S</h2>
                                                        <?php
                                                        $query = "select * from books";
                                                        $result = mysqli_query($conn, $query);
                                                        $check = mysqli_num_rows($result); ?>
                                                        <h1><?php echo $check; ?></h1>
                                                    </div>
                                                    <div class="main-block1-icon">
                                                    <i class="fa-solid fa-book"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="main-block2">
                                                <div class="block2-content">
                                                    <div class="main-block2-text">
                                                        <h2>QUESTION PAPER'S</h2>
                                                        <?php
                                                        $query = "select * from users WHERE role=3";
                                                        $result = mysqli_query($conn, $query);
                                                        $check = mysqli_num_rows($result); ?>
                                                        <h1><?php echo $check; ?></h1>
                                                    </div>
                                                    <div class="main-block2-icon">
                                                    <i class="fa-solid fa-file-lines"></i>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="main-block3">
                                                <div class="block3-content">
                                                    <div class="main-block3-text">
                                                        <h2>E-Book's</h2>
                                                        <?php
                                                        // $query = "select * from users WHERE role=3";
                                                        // $result = mysqli_query($conn, $query);
                                                        // $check = mysqli_num_rows($result); ?>
                                                         <h1><?php 
                                                        // echo $check;
                                                         ?></h1>
                                                    </div>
                                                    <div class="main-block3-icon">
                                                    <i class="fa-solid fa-book"></i>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="block-b">
                                        <div class="main-block1">
                                                <div class="block1-content">
                                                    <div class="main-block1-text">
                                                        <h2>BOOK'S</h2>
                                                        <?php
                                                        $query = "select * from books";
                                                        $result = mysqli_query($conn, $query);
                                                        $check = mysqli_num_rows($result); ?>
                                                        <h1><?php echo $check; ?></h1>
                                                    </div>
                                                    <div class="main-block1-icon">
                                                    <i class="fa-solid fa-book"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="main-block2">
                                                <div class="block2-content">
                                                    <div class="main-block2-text">
                                                        <h2>QUESTION PAPER'S</h2>
                                                        <?php
                                                        $query = "select * from users WHERE role=3";
                                                        $result = mysqli_query($conn, $query);
                                                        $check = mysqli_num_rows($result); ?>
                                                        <h1><?php echo $check; ?></h1>
                                                    </div>
                                                    <div class="main-block2-icon">
                                                    <i class="fa-solid fa-file-lines"></i>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="main-block3">
                                                <div class="block3-content">
                                                    <div class="main-block3-text">
                                                        <h2>E-Book's</h2>
                                                        <?php
                                                        // $query = "select * from users WHERE role=3";
                                                        // $result = mysqli_query($conn, $query);
                                                        // $check = mysqli_num_rows($result); ?>
                                                         <h1><?php 
                                                        // echo $check;
                                                         ?></h1>
                                                    </div>
                                                    <div class="main-block3-icon">
                                                    <i class="fa-solid fa-book"></i>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>





                                    </div>

                                </div>



                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/6070b0cce0.js" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')
    </script>

</body>

</html>