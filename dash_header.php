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
    <title>Dash_header</title>
    <style>
        /* header */
        .header {
            /* background-color: white; */
            width: 100%;
            float: left;
            border-radius: 10px;
            font-family: 'Poppins', sans-serif;
        }

        .header-content {
            width: 100%;
            float: left;
            /* box-sizing: border-box;
    padding: 20px; */
        }



        .sidebar-content {
            width: 100%;
            float: left;
        }

        .search {

            float: left;
        }

        .search-box input[type="text"] {
            border: none;
        }

        .user i {
            color: white;
        }
    </style>
</head>

<body>
    <!-- header -->
    <div class="header">
        <div class="header-content">
            <?php if (isset($_SESSION["email"])) { ?>
                <div class="sidebar-menu-collapse">
                    <a href="#" id="menu-collapse"><i class="fa-solid fa-bars"></i></a>
                </div>
            <?php  } ?>


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


            <?php if (isset($_SESSION["email"])) { ?>
                <div class="user">
                    <a href="" id="userp"><i class="fa-solid fa-circle-user"></i></a>

                    <!-- <a href="logout.php">Logout</a> -->
                </div>

                <div class="profile" style="display:none;">
                    <div class="pic">
                        <i class="fa-solid fa-circle-user"></i>
                    </div>
                    <div class="profile-text">
                        <?php
                        $username = $_SESSION['email'];
                        $query = "select * from users WHERE email = '$username'";
                        $run = mysqli_query($conn, $query);
                        if ($a = mysqli_fetch_array($run)) {
                        ?>
                            <h3> <?php echo $a['fullName']; ?> </h3> <?php  } ?>

                        <p><?php echo $a['email']; ?> </p>
                    </div>
                    <div class="manage">
                        <div class="manage-content">
                            <button>Manage your Account</button>
                        </div>
                    </div>
                    <div class="btn">
                        <a href="logout.php"><input type="submit" value="Sign Out"></a>
                    </div>

                </div>
            <?php } ?>


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