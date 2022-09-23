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
    <link rel="stylesheet" href="css/dashstyle.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- header -->
            <div class="header">
                            <div class="header-content">
                            <div class="sidebar-menu-collapse">
                <a href="#" id="menu-collapse"><i class="fa-solid fa-bars"></i></a>
            </div>

            <div class="sidebar-top">
                <a href="index.php" class="main-icon"> <i class="fa-solid fa-book-open"></i>
                    <span class="logo"><b>e</b>Library</span></a>


            </div>
                                <div class="searchbar">
                                    <div class="row">
                                        <div class="searchbar-content">
                                            <div class="search">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </div>
                                            <div class="search-box">
                                                <input type="text" placeholder="Type here for search">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="user">
                                    <?php
                                    $username = $_SESSION['email'];
                                    $query = "select * from users WHERE email = '$username'";
                                    $run = mysqli_query($conn, $query);
                                    if ($a = mysqli_fetch_array($run)) { ?>
                                        Hey!<?php
                                            echo $a['fullName'];
                                        }
                                            ?>
                                        <a href="logout.php">Logout</a>
                                </div>

                            </div>
                        </div>
                        <?php include"dash_sidebar.php"; ?>
            
            

            <!-- main block header or dashboard -->
            <div class="main-dash">
                
                <div class="row">
                    <div class="main-dash-content">
                        

                        <div class="dashboard">
                            <div class="row">
                                <div class="dashboard-content">
                                    <a href="students.php">
                                    <div class="block1">
                                        <div class="row">
                                            <div class="block1-content">
                                                <div class="text">
                                                    <h2>TOTAL STUDENT'S</h2>
                                                    <?php
                                                    $query = "select * from users WHERE role=3";
                                                    $result = mysqli_query($conn, $query);
                                                    $check = mysqli_num_rows($result); ?>
                                                    <h1><?php echo $check; ?></h1>
                                                </div>
                                                <div class="block1-icon">
                                                <i class="fa-solid fa-users"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                    
                                    <a href="teachers.php">
                                    <div class="block2">
                                        <div class="row">
                                            <div class="block2-content">
                                                <div class="text">
                                                    <h2>TOTAL TEACHER'S</h2>
                                                    <?php
                                                    $query = "select * from users WHERE role=2";
                                                    $result = mysqli_query($conn, $query);
                                                    $check = mysqli_num_rows($result); ?>
                                                    <h1><?php echo $check; ?></h1>
                                                </div>
                                                <div class="block1-icon">
                                                <i class="fa-solid fa-users"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                   
                                   <a href="book_display.php">
                                   <div class="block3">
                                        <div class="row">
                                            <div class="block3-content">
                                                <div class="text">
                                                    <h2>TOTAL BOOK'S</h2>
                                                    <?php
                                                    $query = "select * from books";
                                                    $result = mysqli_query($conn, $query);
                                                    $check = mysqli_num_rows($result); ?>
                                                    <h1><?php echo $check; ?></h1>
                                                </div>
                                                <div class="block1-icon">
                                                <i class="fa-solid fa-swatchbook"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   </a>
                                    
                    

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