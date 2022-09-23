<?php
include "config.php";
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
        .row {
            width: 100%;
            float: left;
        }

        /* sidebar css */
        .sidebar {
            width: 15%;
            float: left;
            background-color: #28282C;
            color: white;
            height: 100vh;
            font-family: 'Poppins', sans-serif;
        }

        /* .sidebar-top {
            font-size: 25px;
            text-align: center;
            padding: 8px;
            border-bottom: 2px solid;
            margin-bottom: 45px;
        } */

        .sidebar-top a {
            color: white;
            text-decoration: none;
        }

        .sidebar-top i {
            color: white;
            padding-right: 6px;
        }

        .sidebar-top h3 {
            text-align: center;
            color: white;
            padding: 10px;
        }

        .sidebar-menu li {
            list-style: none;
            padding-bottom: 50px;
        }

        .sidebar-menu li a {
            color: white;
            text-decoration: none;

        }

        .sidebar-menu {
            padding-left: 20px;
            padding-right: 15px;
        }

        .icon1 {
            float: left;
            width: 100%;
        }

        .icon2 {
            float: right;
            width: 100%;
        }

        .icon1 i {
            color: white;
            padding-right: 8px;


        }

        #icon2 i {
            color: white;
            padding-left: 40px;
            float: right;
        }

        .dropdown-content {
            padding-top: 25px;
            position: absolute;
            width: min-content;
            display: none
        }

        .dropdown-content a {
            color: #3E3E45;
        }

        .sidebar-menu-collapse {
            position: absolute;

        }

        .sidebar-menu-collapse a {
            color: white;
            text-decoration: none;
        }

        .sidebar-main {
            width: 100%;
            float: left;

        }

        .sidebar-arrow {
            float: left;
            padding-top: 50px;
        }

        .sidebar-arrow ul {
            list-style: none;
        }

        .sidebar-arrow ul li {
            padding-bottom: 25px;
        }

        .row {
            width: 100%;
            float: left;
        }

        .main-dash {
            width: 85%;
            float: left;
            background-color: beige;
            height: 100vh;
            border-radius: 25px 0px 0px 0px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="row"></div>
        <div class="sidebar-content">
            
            <div class="sidebar-main">
                <ul class="sidebar-menu">
                    <li class="sidebar-item">

                        <a href="dashboard.php">
                            <div class="icons">
                                <div class="icon1">
                                    <i class="fa-solid fa-house-user"></i>
                                    <span class="menu-text">Dashboard</span>
                                </div>
                                <!-- <div class="icon2">
                                    <i class="fa-solid fa-angle-right"></i>
                                    </div> -->
                            </div>
                        </a>

                        <!-- <div class="dropdown-content">
                            <a href="">Profile</a>
                            <a href="">Demo</a>
                        </div> -->
                    </li>

                    <li class="sidebar-item">
                        <a href="">
                            <div class="icons">
                                <div class="icon1">
                                    <i class="fa-solid fa-user-graduate"></i>
                                    <span class="menu-text">Librarian</span>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="students.php">
                            <div class="icons">
                                <div class="icon1">
                                    <i class="fa-solid fa-users"></i>
                                    <span class="menu-text">Student's</span>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="teachers.php">
                            <div class="icons">
                                <div class="icon1">
                                    <i class="fa-solid fa-users"></i>
                                    <span class="menu-text">Teacher's</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- <div class="sidebar-arrow">
                <ul>
                    <li><i class="fa-solid fa-angle-right"></i></li>
                    <li><i class="fa-solid fa-angle-right"></i></li>
                    <li><i class="fa-solid fa-angle-right"></i></li>
                </ul>
            </div> -->
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