<?php
session_start();
// Check do the person logged in
if ($_SESSION['email'] == NULL) {
    // Haven't log in
    header("location:login.php");
}
include('config.php');
$query = "SELECT srno, fullName, email, gender, branch, phone, pass FROM users WHERE role=3";
$result = mysqli_query($conn, $query);
// 
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
    <title>Dashboard</title>
    <style>
        .dashright .top {
            width: 100%;
            float: left;
        }
        .top-header{
            float: left;
            width: 100%;
        }

        .top-header-content {
            width: 100%;
            float: left;
        }

        .dashright .search-types {
            width: 25%;
            float: left;
        }

        .dashright .search-types select {
            width: 100%;
            padding: 8px;
            /* border: none; */
            background-color: white;
        }

        .dashright .search-text {
            width: 44%;
            float: left;
        }
        
        .dashright .search-text input[type="text"] {
            width: 199px;
            /* border: none; */
            padding: 8px;

        }

        .dashright .search-icon {
            width: 10%;
            float: left;
            text-align: center;
            background-color: #f3701d;
            color: white;
            border-radius: 0px 5px 5px 0px;
        }

        .dashright .search-icon i {
            width: 100%;
            padding: 10px;
            padding-left: 0;
        }

        .dashright .search-content {
            width: 35%;
            float: left;
            margin-bottom: 35px;
        }

        .plus {
            float: left;
            width: 65%;
        }

        .plus a {
            text-decoration: none;
        }

        .plus .add {
            background-color: #f3701d;
            color: white;
            border-radius: 4px;
            padding-left:10px;
            padding-top: 7px;
            padding-bottom: 7px;
            padding-right:10px;
            display: inline-block;
        }

        .add i {
            padding-left: 8px;
            padding-right: 18px;
        }

        .dashright h1 {
            color: #28282C;
            margin-top: 0;
        }

        .dashboard-content {
            padding-top: 0;
        }

        .add-btn :hover {
            background-color: #e23826;
            color: white;
            border: none;

        }

        .dashright .search-icon :hover {
            background-color: #e23826;
            color: white;
            border: none;
            border-radius: 0px 8px 8px 0px;

        }

        .color-red {
            color: red;
        }
        .add-btn
        {
            text-align: end;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- header -->
        <div class="row">
            <?php
            include('dash_header.php')
            ?>
            <?php include('dash_sidebar.php'); ?>
            <!-- main block header or dashboard -->
            <div class="main-dash">
                <div class="row">
                    <div class="main-dash-content">
                        <div class="dashboard">
                            <div class="row">
                                <div class="dashboard-content">
                                    <div class="dashright">
                                        <?php include 'update.php'; ?>


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