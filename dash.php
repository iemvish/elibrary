<?php
session_start();
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
        .sidebar{
            height: 90.5vh;
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
            float: left;
        }

        .main-dash-header {
            width: 100%;
            float: left;
        }

        .header-block {
            width: 66%;
            float: left;

        }

        .header-block h4 {
            margin-bottom: 10px;
        }

        .header-block p {
            margin: 0;
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
            color: black;
        }

        .header-blocks {
            width: 66%;
            float: left;
            padding: 35px 40px;
            box-sizing: border-box;
        }
        .slide-search{
            width: 20px;
            float: left;
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
                            <li><a href=""> <i id="search" class="fa-solid fa-magnifying-glass"></i></a></li>
                        </ul>
                        <span class="slide-search">
                        <input type="text">
                        </span>
                        <ul class="right-nav">
                            <li><a href=""><i class="fa-regular fa-bell"></i></a></li>
                            <li>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="sidebar">
                    <?php include "dash_sidebar.php"; ?>
                </div>
                <div class="main-dashboard">
                    <div class="row">
                        <div class="main-dash-header">
                            <div class="row">
                                <div class="header-blocks">
                                    <div class="header-block">
                                        <h4>Dashboard</h4>
                                        <p>Welcome to eLibrary</p>
                                    </div>

                                </div>
                                <div class="header-block2">
                                    <ul>
                                        <li><a href=""><i class="fa-solid fa-house-chimney"></i></a></li>
                                    </ul>
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