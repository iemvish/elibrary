<?php
include"config.php";
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

.searchbar {
    width: 20%;
    float: left;
}

.sidebar-content {
    width: 100%;
    float: left;
}

.search {
    width: 10%;
    float: left;
}
.search-box input[type="text"]{
    border: none;
}

    </style>
</head>

<body>
    <!-- header -->
    <div class="header">
                            <div class="header-content">
                            <div class="sidebar-menu-collapse">
                <a href="#" id="menu-collapse"><i class="fa-solid fa-bars"></i></a>
            </div>

            <div class="sidebar-top">
                 <i class="fa-solid fa-book-open"></i>
                 <a href="index.php" class="main-icon"> <span class="logo"><b>e</b>Library</span></a>


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