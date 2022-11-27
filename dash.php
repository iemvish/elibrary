<?php
session_start();
include 'config.php';
// Check do the person logged in
if ($_SESSION['email'] == NULL) {
    // Haven't log in
    header("location:login.php");
}

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
    <title>Document</title>
    <style>
        .container {
            width: 100%;
            float: left;
            font-family: 'Poppins', sans-serif;
        }

        .sidebar {
            height: 90.5vh;
            width: 15%;
        }

        body {
            background-color: #28282C;
        }

        .row {
            width: 100%;
            float: left;
        }

        .navbar {
            float: left;
            width: 100%;
            background-color: #28282C;
            color: white;
            padding-bottom: 12px;
        }

        .navbar-logo {
            position: relative;
            float: left;
            text-align: center;
            width: 235px;
            height: 56px;
        }

        .navbar-logo a {
            color: white;
            text-decoration: none;

        }

        body {
            margin: 0;
            background-color: #28282C;
        }

        .menu {
            position: absolute;
            right: 0;
            font-size: 16px;
            line-height: 4.7;
            width: 40px;
        }

        .main-icon {
            line-height: 4;
            padding-right: 44px;

        }

        .main-icon i {
            padding-right: 6px;
            font-size: 20px;
        }

        .main-icon span {
            font-size: 18px;
        }

        .navbar-container {
            margin-right: auto;
            margin-left: auto;
            padding-right: 15px;
            padding-left: 15px;
            width: 100%;

        }

        .left-nav {
            float: left;
            margin-bottom: 0;
            list-style: none;
        }

        .left-nav a {
            color: white;

        }

        .left-nav li {
            float: left;
            line-height: 2.7;
            padding: 0 10px;
            position: relative;
        }

        .right-nav li {
            float: left;
            line-height: 2.7;
            padding: 0 10px;
            position: relative;
        }

        .right-nav a {
            color: white;

        }

        .right-nav {
            float: right;
            margin-bottom: 0;
            list-style: none;
        }

        .right-nav li img {
            border-radius: 50%;
        }

        .main-dashboard {
            width: 85%;
            float: right;
            background-color: white;

            height: 90vh;
        }

        .main-dash-header {
            width: 100%;
            float: left;
            background-color: #ff8000;
            color: white;
            color: black;

        }

        .header-block {
            width: 66%;
            float: left;


        }

        .header-block h4 {
            margin-bottom: 10px;
            color: white;
        }

        .header-block p {
            margin: 0;
            color: white;
        }

        .header-block2 {
            width: 33%;
            float: left;
            padding: 35px 40px;
            box-sizing: border-box;
        }

        .header-block2 ul {
            float: right;
            list-style: none;
        }

        .header-block2 ul li a {
            color: white;
        }

        .header-block2 ul li {
            float: left;
        }

        .header-blocks {
            width: 66%;
            float: left;
            padding: 35px 40px;
            box-sizing: border-box;
            background-color: #ff8000;

        }

        .slide-search {
            position: relative;
            float: left;
        }

        .dash-main-block {
            width: 100%;
            float: left;
        }

        .dash-main-block .col1 {
            float: left;
            width: 32%;
            margin-right: 15px;
            margin-left: 10px;
            margin-top: 15px;
            background-color: #c44dff;
            border-radius: 12px;

        }

        .dash-main-block .col1 .bottom-border {
            width: 100%;
            float: left;
            background-color: #ff8000;
            border-radius: 0px 0px 12px 12px;
        }

        .dash-main-block .col1 .bottom-border p {
            margin: 0;
            color: white;
            padding: 6px;
            padding-left: 20px;

        }

        .col-icon {
            width: 50%;
            float: left;
            color: white;
            text-align: center;
        }

        .col-icon i {
            font-size: 50px;
            padding-top: 10px;
        }

        .col-text {
            width: 50%;
            float: left;
            color: white;
            font-size: small;
            text-align: start;
        }

        .col-text p,
        h1 {
            font-weight: 600;
            font-size: 20px;
            padding-left: 10px;

        }

        .dash-main-block .col2 {
            float: left;
            width: 32%;
            margin-right: 15px;
            margin-top: 15px;
            background-color: #59CF5D;
            border-radius: 12px;


        }

        .dash-main-block .col3 {
            float: left;
            width: 32%;
            margin-top: 15px;
            background-color: #FF646C;
            border-radius: 12px;

        }

        .dash-main-col {
            float: left;
            width: 100%;

        }

        #search {
            position: absolute;
            top: 13px;

        }

        .searchbox {
            display: none;
        }

        .col-content {
            float: left;
            height: 170px;
            width: 100%;
            box-sizing: border-box;
            padding: 25px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="navbar">
                <div class="navbar-content">
                    <div class="navbar-logo">
                        <a href="index.php" class="main-icon"> <i class="fa-solid fa-book-open"></i>
                            <span class="logo"><b>e</b>Library</span></a>
                        <a href="#" class="menu" id="menu-collapse"><i class="fa-solid fa-bars"></i></a>
                    </div>
                    <div class="navbar-conatiner">
                        <ul class="left-nav">
                            <li><a href=""> <i id="search" class="fa-solid fa-magnifying-glass"></i>
                                    <div class="searchbox">
                                        <input type="text">
                                    </div>
                                </a></li>
                        </ul>

                        <ul class="right-nav">
                            <li><a href=""><i class="fa-regular fa-bell"></i></a></li>
                            <li>
                                <a href="logout.php">logout</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">

                <?php include "dash_sidebar.php"; ?>

                <div class="main-dashboard">
                    <div class="row">
                        <div class="dash-main-block">
                            <div class="row">
                                <div class="dash-main-col">
                                    <!-- Condition for the role of user -->
                                    <?php
                                    $id = $data['srno'];
                                    include_once "functions.php";
                                    $role = get_role($conn, $id);
                                    switch ($role) {
                                        case 1: ?>
                                        <a href=""> 
                                        <div class="col1">
                                                <div class="row">
                                                    <div class="col-content">
                                                        <div class="col-text">
                                                            <p>TOTAL STUDENTS</p>
                                                            <h1>3</h1>

                                                        </div>
                                                        <div class="col-icon">
                                                            <i class="fa-solid fa-book-open-reader"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> </a>
                                            <a href="">
                                            <div class="col2">
                                                <div class="row">
                                                    <div class="col-content">
                                                        <div class="col-text">
                                                            <p>TOTAL TEACHERS</p>
                                                            <h1>3</h1>

                                                        </div>
                                                        <div class="col-icon">
                                                            <i class="fa-solid fa-user-graduate"></i>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            </a>
                                            
                                            <a href="">
                                            <div class="col3">
                                                <div class="row">
                                                    <div class="col-content">
                                                        <div class="col-text">
                                                            <p>DEPARTMENTS</p>
                                                            <h1>3</h1>

                                                        </div>
                                                        <div class="col-icon">
                                                            <i class="fa-solid fa-building-user"></i>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            </a>
                                           
                                            <a href="">
                                            <div class="col1">
                                                <div class="row">
                                                    <div class="col-content">
                                                        <div class="col-text">
                                                            <p>BLOGS</p>
                                                            <h1>3</h1>

                                                        </div>
                                                        <div class="col-icon">
                                                            <i class="fa-solid fa-blog"></i>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            </a>
                                            
                                            <a href="all_books.php">
                                            <div class="col2">
                                                <div class="row">
                                                    <div class="col-content">
                                                        <div class="col-text">
                                                            <p>TOTAL BOOKS</p>
                                                            <h1>3</h1>

                                                        </div>
                                                        <div class="col-icon">
                                                            <i class="fa-solid fa-swatchbook"></i>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            </a>
                                            
                                            <a href="">
                                            <div class="col3">
                                                <div class="row">
                                                    <div class="col-content">
                                                        <div class="col-text">
                                                            <p>REQUESTS</p>
                                                            <h1>3</h1>

                                                        </div>
                                                        <div class="col-icon">
                                                            <i class="fa-solid fa-circle-exclamation"></i>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            </a>
                                            
                                            <a href="">
                                            <div class="col1">
                                                <div class="row">
                                                    <div class="col-content">
                                                        <div class="col-text">
                                                            <p>LIBRARIAN</p>
                                                            <h1>3</h1>

                                                        </div>
                                                        <div class="col-icon">
                                                            <i class="fa-solid fa-building-user"></i>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            </a>
                                            
                                            <!-- <div class="col2">
                                                <div class="row">
                                                <div class="col-text">
                                                        <p>TOTAL STUDENTS</p>
                                                        <h1>3</h1>

                                                    </div>
                                                    <div class="col-icon">
                                                        <i class="fa-solid fa-graduation-cap"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col3">
                                               <div class="row">
                                               <div class="col-text">
                                                        <p>TOTAL STUDENTS</p>
                                                        <h1>3</h1>

                                                    </div>
                                                    <div class="col-icon">
                                                        <i class="fa-solid fa-graduation-cap"></i>
                                                    </div>
                                               </div>
                                            </div> -->

                                    <?php  } ?>






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