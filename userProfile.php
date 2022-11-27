<?php
session_start();
include 'config.php';
// Check do the person logged in
if ($_SESSION['email'] == NULL) {
    // Haven't log in
    header("location:login.php");
} 
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
$id = $data['srno'];

$fnameErr = $emailErr = $pnumErr = $passErr = $cpassErr = $p = "";
$fname = $email = $pnum = $pass = $confirmpass = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fullName"])) {
        // $fnameErr = "Name is required!";
    } else {
            $fname = test_input($_POST["fullName"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
                $nameErr = "Only letters and white space allowed";
            }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required!";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["pass"])) {
        $passErr = "Password is required!";
    }


    if (empty($_POST['phone'])) {
        // $pnumErr = "Phone Number Required!";
    } else {
        $pnum = test_input($_POST["phone"]);

        if (preg_match('/^[0-9]{10}+$/', $pnum)) {
            // echo "Valid Phone Number";
        } else {
            $pnumErr = "Invalid Phone Number";
        }
    }
}

@$fullName = $_POST['fullName'];
@$email = $_POST['email'];
@$gender = $_POST['gender'];
@$branch = $_POST['branch'];
@$sem = $_POST['sem'];
@$phone = $_POST['phone'];
@$pass = $_POST['pass'];

// include "functions.php";
// $role = get_role($conn,$id);

$update = "UPDATE users SET fullName = '$fullName' WHERE role = '1' ";
$run = mysqli_query($conn,$update);

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
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
            display: none;
            float: left;
        }

        .dash-main-block {
            width: 100%;
            float: left;
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

        /* form css */
        .form {
            float: left;
            width: 100%;
        }

        .form-content {
            width: 100%;
            float: left;
        }

        .form-content form {
            padding: 100px 300px 100px 300px;
        }

        .form-text {
            width: 100%;
            float: left;
        }

        .text1 {
            float: left;
            width: 50%;
        }

        form .text2 {
            float: left;
            width: 50%;
        }

        .gender {
            border-radius: 9px;
            float: left;
            padding: 10px;
            margin-right: 16px;
            width: 92%;
        }

        .sem select {
            border-radius: 10px;
            padding: 10px;
            float: left;
            margin-right: 29px;
            width: 92%;
        }

        form input[type='text'],
        form input[type='password'] {
            width: 85%;
            border-radius: 10px;
            padding: 10px;

        }

        form input[type='email'] {
            width: 85%;
            border-radius: 10px;
            padding: 10px;

            float: left;

        }

        .form-text1 {
            float: left;
            width: 100%;
        }

        .form-btn2 {
            width: 100%;
            float: left;
            text-align: center;
            padding-top: 20px;
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

                <?php include "dash_sidebar.php"; ?>

                <div class="main-dashboard">
                    <div class="row">
                        <div class="main-dash-header">
                            <div class="row">
                                <div class="header-blocks">
                                    <div class="header-block">
                                        <h4>Proflie</h4>
                                        <!-- <p>Welcome
                                            <?php
                                            // $email = $_SESSION["email"];
                                            // $pass = $_SESSION["pass"];
                                            // $query = "select * from users where email = '$email' and pass = '$pass'";
                                            // $results = mysqli_query($conn, $query);
                                            // $data = mysqli_fetch_assoc($results);
                                            // echo $data['fullName'];

                                            ?> to eLibrary
                                        </p> -->
                                        <p>Edit your Details here...</p>
                                    </div>

                                </div>
                                <div class="header-block2">
                                    <ul>
                                        <li><a href=""><i class="fa-solid fa-house-chimney"></i></a></li>
                                        <li><a href="logout.php">Logout</a></li>
                                    </ul>
                                </div>

                            </div>

                        </div>

                        <div class="dash-main-block">
                            <div class="row">
                                <!-- <div class="form">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                      Profile: <br>
                                      <input type="file" name="file">   <br>
                                      Full Name: <br>
                                      <input type="text"> <br>
                                      Email Address: <br>
                                      <input type="text"> <br>
                                      Gender: <br>  
                                      <select name="" id="">
                                        <option value="">Select Gender</option>
                                        <option value="">Male</option>
                                        <option value="">Female</option>
                                        <option value="">Other</option>
                                      </select>
                                    </form>
                                </div> -->

                                <div class="form">
                                    <div class="form-content">

                                        <form action="" method="post">
                                            <div class="form-text">
                                                <div class="text1">
                                                    <!-- Full Name: <br> -->
                                                    <input type="text" placeholder="Full Name" name="fullName" value="<?php echo $data['fullName']; ?>"><br>
                                                    <span class="error"><?php echo $fnameErr; ?></span><br>
                                                </div>

                                                <div class="text2">
                                                    <input type="file" name="file">
                                                </div>


                                            </div>
                                            <div class="form-text">
                                                <div class="text1">
                                                    <!-- Phone number: <br> -->
                                                    <input type="text" placeholder="Phone number" name="phone" value="<?php echo $data['phone']; ?>"><br>
                                                    <span class="error"><?php echo $pnumErr; ?></span><br>
                                                </div>
                                                <div class="text2">
                                                    <!-- Email Id: <br> -->
                                                    <select class="gender" name="gender" id="">
                                                        <option value="">Select Gender</option>
                                                        <option value="2" <?php if($data['gender'] == 2){echo "selected";}?>>Male</option>
                                                        <option value="1" <?php if($data['gender'] == 1){echo "selected";}?>>Female</option>
                                                        <option value="3" <?php if($data['gender'] == 3){echo "selected";}?>>Other</option>
                                                    </select>
                                                    <br>
                                                </div>


                                            </div>

                                            <div class="form-text">
                                                <div class="text1">
                                                    <!-- Password: <br> -->
                                                    <input type="password" placeholder="Password" name="pass" value="<?php echo $data['pass']; ?>"><br>
                                                    <span class="error"><?php echo $passErr; ?></span><br>
                                                </div>
                                                <div class="text2">
                                                    <!-- Branch: <br> -->
                                                    <input type="email" placeholder="Email Id" name="email" value="<?php echo $data['email']; ?>"><br>
                                                    <span class="error"><?php echo $emailErr; ?></span>
                                                    <br>
                                                </div>

                                            </div>
                                            <div class="form-text1">
                                                <!-- <label for="gender">Gender:</label> <br> -->

                                                <div class=" text2 sem">
                                                    <select name="sem" id="" name="sem">
                                                        <option value="">Select Semester</option>
                                                        <option value="1" <?php if($data['sem'] == 1){echo "selected";}?>>First</option>
                                                        <option value="2" <?php if($data['sem'] == 2){echo "selected";}?>>Second</option>
                                                        <option value="3" <?php if($data['sem'] == 3){echo "selected";}?>>Third</option>
                                                        <option value="4" <?php if($data['sem'] == 4){echo "selected";}?>>Fourth</option>
                                                        <option value="5" <?php if($data['sem'] == 5){echo "selected";}?>>Fifth</option>
                                                        <option value="6" <?php if($data['sem'] == 6){echo "selected";}?>>Six</option>
                                                        <option value="7" <?php if($data['sem'] == 7){echo "selected";}?>>Seventh</option>
                                                        <option value="8" <?php if($data['sem'] == 8){echo "selected";}?>>Eighth</option>
                                                    </select>
                                                </div>
                                                <div class="text2"><select class="gender" id="" name="branch">
                                                        <option value="">Select Branch</option>
                                                        <option value="1" <?php if($data['branch'] == 1){echo "selected";}?>>CSE</option>
                                                        <option value="2" <?php if($data['branch'] == 2){echo "selected";}?>>EEE</option>
                                                        <option value="3" <?php if($data['branch'] == 3){echo "selected";}?>>CE</option>
                                                        <option value="4" <?php if($data['branch'] == 4){echo "selected";}?>>ECE</option>
                                                    </select></div>

                                            </div>
                                            <div class="form-btn2">
                                                <input id="btn2" type="submit" value="SUBMIT">
                                            </div>

                                        </form>


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