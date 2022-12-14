<?php
$email = $_SESSION['email'];
$pass = $_SESSION['pass'];
$query = "select * from users where email = '$email' and pass = '$pass'";
$results = mysqli_query($conn, $query);
$num = mysqli_num_rows($results);
$data = mysqli_fetch_assoc($results);
$id = $data['srno'];
$username = $data['fullName'];
include "functions.php";
$role = get_role($conn, $id);

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
            height: 100%;
        }

        /* sidebar css */
        .sidebar {
            /* width: 15%; */
            float: left;
            background-color: #28282C;
            color: white;
            height: 100%;
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
            background-color: white;
            /* height: 100%; */
            border-radius: 25px 0px 0px 0px;
        }


        .dropbtn {
            background-color: #28282C;
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            color: #28282C;
            min-width: 200px;
            padding-top: 0;
        }

        .dropdown-content a {
            color: black;
            padding: 12px;
            text-decoration: none;
            display: block;
        }

        /* .dropdown-content a:hover {
            /* background-color: white; */
        /* color: white;
        } */

        .dropdown:hover .dropdown-content {
            display: block;
            color: black;
            background-color: white;
        }

        .dropdown:hover .dropbtn {
            color: white;
        }

        .dropdown:hover .dropdown-content a {
            color: black;
        }

        .sidebar-profile {
            width: 100%;
            float: left;
        }

        .sidebar-profile .profile-img {
            width: 40%;
            float: left;
        }

        .profile-img img {
            width: 100%;
            border-radius: 50%;
        }

        .sidebar-profile .profile-name {
            width: 60%;
            float: left;
        }

        .profile {
            float: left;
            width: 100%;
            text-align: center;
        }

        .profile .image {
            width: 100%;
            float: left;
        }


        .user-upload {
            position: absolute;
            top: 157px;
            background-color: black;
            left: 101px;
            width: 30px;
            height: 30px;
            text-align: center;
            border-radius: 50%;
        }

        .user-upload i {
            padding-top: 7px;
        }

        .user-upload a {
            color: white;
        }

        .profile p {
            text-align: center;
        }

        .profile .image input[type="file"] {
            height: 110px;
            width: 110px;
            border: 1px solid white;
            border-radius: 50%;

        }

        .profile .image input[type=file]::-webkit-file-upload-button {
            visibility: hidden;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="row">
            <div class="sidebar-content">
                <!-- profile of user -->
                <div class="profile"> 
                    <div class="image">
                        <form action="" id="uploadForm" method="post" enctype="multipart/form-data">
                            <input type="file" name="file"> <br> <br>
                            <input type="submit" name="submit" value="submit">
                        </form>

                    </div>
                    <p>
                        <?php echo "$username"; ?>
                    </p>
                </div>


                <div class="sidebar-main">

                    <ul class="sidebar-menu">
                        <?php switch ($role) {

                            case 1:
                                if (isset($_SESSION["email"])) { ?>
                                    <li class="sidebar-item">
                                        <a href="dash.php">
                                            <div class="icons">
                                                <div class="icon1">
                                                    <i class="fa-solid fa-house-user"></i>
                                                    <span class="menu-text">Dashboard</span>
                                                </div>

                                            </div>
                                        </a>
                                    </li>

                                    <li class="sidebar-item">
                                        <a href="userProfile.php">
                                            <div class="icons">
                                                <div class="icon1">
                                                    <i class="fa-solid fa-user"></i>
                                                    <span class="menu-text">Profile</span>
                                                </div>

                                            </div>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="">
                                            <div class="icons">
                                                <div class="icon1">
                                                    <i id="side-icon" class="fa-solid fa-user-graduate"></i>
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
                                    <li class="sidebar-item">
                                        <a href="all_books.php">
                                            <div class="icons">
                                                <div class="icon1">
                                                    <div class="dropdown">
                                                        <i class="fa-solid fa-book-bookmark"></i>
                                                        <button class="menu-text dropbtn">Books's</button>
                                                        <div class="dropdown-content">
                                                            <a href="all_books.php">Book's</a>
                                                            <a href="ebooks.php">E-book's</a>
                                                            <a href="enotes.php">E-note's</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                <?php }
                                break;
                            case 2: ?>
                                <li class="sidebar-item">
                                    <a href="dash.php">
                                        <div class="icons">
                                            <div class="icon1">
                                                <i class="fa-solid fa-house-user"></i>
                                                <span class="menu-text">Dashboard</span>
                                            </div>

                                        </div>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="dash.php">
                                        <div class="icons">
                                            <div class="icon1">
                                                <i class="fa-solid fa-user"></i>
                                                <span class="menu-text">Profile</span>
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
                                    <a href="all_books.php">
                                        <div class="icons">
                                            <div class="icon1">
                                                <div class="dropdown">
                                                    <i class="fa-solid fa-book-bookmark"></i>
                                                    <button class="menu-text dropbtn">Books's</button>
                                                    <div class="dropdown-content">
                                                        <a href="all_books.php">Book's</a>
                                                        <a href="ebooks.php">E-book's</a>
                                                        <a href="enotes.php">E-note's</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            <?php break;
                            case 3: ?>

                                <li class="sidebar-item">
                                    <a href="dash.php">
                                        <div class="icons">
                                            <div class="icon1">
                                                <i class="fa-solid fa-house-user"></i>
                                                <span class="menu-text">Dashboard</span>
                                            </div>

                                        </div>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="userProfile.php">
                                        <div class="icons">
                                            <div class="icon1">
                                                <i class="fa-solid fa-user"></i>
                                                <span class="menu-text">Profile</span>
                                            </div>

                                        </div>
                                    </a>
                                </li>


                                <li class="sidebar-item">
                                    <a href="all_books.php">
                                        <div class="icons">
                                            <div class="icon1">

                                                <div class="dropdown">
                                                    <i class="fa-solid fa-book-bookmark"></i>
                                                    <button class="menu-text dropbtn">Books's</button>
                                                    <div class="dropdown-content">
                                                        <a href="all_books.php">Book's</a>
                                                        <a href="ebooks.php">E-book's</a>
                                                        <a href="enotes.php">E-note's</a>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </a>
                                </li>
                            <?php break;
                            case 4: ?>
                                <li class="sidebar-item">
                                    <a href="dash.php">
                                        <div class="icons">
                                            <div class="icon1">
                                                <i class="fa-solid fa-house-user"></i>
                                                <span class="menu-text">Dashboard</span>
                                            </div>

                                        </div>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="userProfile.php">
                                        <div class="icons">
                                            <div class="icon1">
                                                <i class="fa-solid fa-user"></i>
                                                <span class="menu-text">Profile</span>
                                            </div>

                                        </div>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="dash.php">
                                        <div class="icons">
                                            <div class="icon1">
                                                <i class="fa-solid fa-user"></i>
                                                <span class="menu-text">Student's</span>
                                            </div>

                                        </div>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="dash.php">
                                        <div class="icons">
                                            <div class="icon1">
                                                <div class="dropdown">
                                                    <i class="fa-solid fa-book-bookmark"></i>
                                                    <button class="menu-text dropbtn">Books's</button>
                                                    <div class="dropdown-content">
                                                        <a href="">Book's</a>
                                                        <a href="">E-book's</a>
                                                        <a href="">E-note's</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </li>
                                <li id="down" class="sidebar-item">
                                    <a href="dash.php">
                                        <div class="icons">
                                            <div class="icon1">
                                                <i class="fa-solid fa-user"></i>
                                                <span class="menu-text">Request's</span>
                                            </div>

                                        </div>
                                    </a>
                                </li>


                        <?php    } ?>

                    </ul>
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