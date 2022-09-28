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
    <style>
        .header {
            background: linear-gradient(0, rgba(255, 255, 255, 0) -190%, rgba(0, 0, 0, .8) 110%), url(images/lb1.jpg);
            width: 100%;
            float: left;
            color: white;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, rgba(0, 0, 0, 1) 115%);
            position: fixed;
            backdrop-filter: blur(10px);
            padding-top: 10px;
            padding-left: 20px;
            padding-bottom: 10px;
            box-sizing: border-box;
        }

        .hleft {
            width: 30%;
            float: left;
            padding-left: 40px;
        }

        .hright {
            float: left;
            padding-top: 20px;
        }

        .hleft p {
            font-size: 40px;
            margin: 0;
        }

        .white_c {
            color: white;
        }

        .header a {
            color: white;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .hright .navbar ul li {
            display: inline-block;
            list-style: none;
        }

        .hright .navbar ul li a {
            display: inline-block;
            text-decoration: none;
            padding: 15px 40px;
            margin-bottom: 10px;
        }

        /* .hright .navbar ul li a:hover{
    background-color: white;
    color: black;
} */
        .hright .navbar ul li a:hover {
            /* background-color: white; */
            color: #e23826;
            font-weight: 600;
        }

        .menu {
            margin: 0;
            padding: 0;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            min-width: 160px;
            margin-top: 0px;
            margin-left: 0px;
            background-color: rgb(230, 18, 103);
            padding: 8px;


        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .logo {
            padding-left: 127px;
            padding-top: 9px;
        }

        .color-w {
            color: white;
        }

        .white_c {
            color: #f3701d;
        }

        #side i {
            padding-left: 180px;

        }
    </style>
</head>


<body>
    <div class="header">
        <a href="index.php">
            <div class="hleft">
                <div class="logo">
                    <p><b class="white_c"><span>e</span></b>Library</p>
                </div>

            </div>
        </a>
        <div class="hright">
            <div class="navbar">
                <ul class="menu">

                    <li></i><a href="index.php">HOME</a></li>
                    <li></i><a href="all_books.php">BOOKS</a></li>
                    <li><a href="">BLOG</a></li>
                    <?php

                    if (isset($_SESSION['email'])) {  ?>
                        <li><a href="dashboard.php">Dashboard</a></li>
                    <?php
                    } else {   ?>
                        <li><a href="signup.php">SIGN UP </a></li>
                    <?php  } ?>
                    <?php



                    if (isset($_SESSION['email'])) { ?>
                        <li><a href="logout.php">LOGOUT</a> </li>
                        <li><a href="">PAGES</a></li>
                    <?php  } else { ?>
                        <li><a href="login.php">SIGN IN</a></li>
                    <?php  } ?>





                    <li id="side"><i class="fa-solid fa-bars"></i></li>


                </ul>
            </div>


        </div>
    </div>


</body>

</html>