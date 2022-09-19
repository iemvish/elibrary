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
    <link rel="stylesheet" href="css/dashboard.css">
    <title>dashboard</title>

</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="sidebar-content">
                <div class="sidebar-top">
                <i class="fa-solid fa-book-open"></i><b>e</b>Library
                </div>
                <div class="sidebar-main">
                    <ul class="sidebar-menu">
                        <li class="sidebar-item">
                            
                            <div class="dropdown">
                            <a href="">
                                <div class="icons">
                                    <div class="icon1">
                                        <i class="fa-solid fa-house-user"></i>Dashboard
                                    </div>
                                    <div class="icon2">
                                        <i id="i1" class="fa-solid fa-angle-down"></i>
                                    </div>
                                </div>
                            </a>
                            </div>
                            <div class="dropdown-content">
                                <a href="">Profile</a>
                                <a href="">Demo</a>
                            </div>
                        </li>

                        <li class="sidebar-item">
                            <a href="">
                                <div class="icons">
                                    <div class="icon1">
                                        <i class="fa-solid fa-user-graduate"></i>Librarian
                                    </div>
                                    <div class="icon2">
                                        <i class="fa-solid fa-angle-down"></i>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="">
                                <div class="icons">
                                    <div class="icon1">
                                        <i class="fa-solid fa-users"></i>Student's
                                    </div>
                                    <div class="icon2">
                                        <i class="fa-solid fa-angle-down"></i>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="">
                                <div class="icons">
                                    <div class="icon1">
                                        <i class="fa-solid fa-users"></i>Teacher's
                                    </div>
                                    <div class="icon2">
                                        <i class="fa-solid fa-angle-down"></i>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="header">
            <div class="header-content">
                <div class="searchbar">
                    <input type="text" placeholder="Search">
                </div>
                <div class="user">
                <?php
                $username = $_SESSION['email'];
                $query = "select * from users WHERE email = '$username'";
                $run = mysqli_query($conn,$query);
                if($a = mysqli_fetch_array($run)){?>
                Hey!<?php
                echo $a['fullName'];}
                ?>
                <a  href="logout.php">Logout</a>
                </div>
               

            </div>
        </div>

    </div>
    <!-- jQuery -->
    <script src="/js/custom.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/6070b0cce0.js" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')
    </script>
</body>

</html>