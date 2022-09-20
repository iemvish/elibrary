<?php
session_start();
error_reporting(0);

if (isset($_SESSION['email'])) {
    header("location:dashboard.php");
}
$email = $password = $msg = $emsg = "";
$emailErr = $passErr = "";
if (isset($_POST["sb"])) {
    $valid = true;
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $valid = false;
    } else {
        $email = test_input($_POST["email"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid format";
            $valid = false;
        }
    }

    if (empty($_POST["pass"])) {
        $passErr = "Password is required";
        $valid = false;
    } else {
        $pass = test_input($_POST["pass"]);
    }

    if ($valid) {
        include "config.php";
        $email = $_POST["email"];
        $pass = $_POST["pass"];

        $query = "select * from users where email = '$email' and pass = '$pass'";
        $results = mysqli_query($conn, $query);
        $num = mysqli_num_rows($results);
        if ($num == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $pass;
            header('location:dashboard.php');
        } else {
            $emsg = "Incorrect email or password!";
        }
    }
}

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
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/mystyle1.css">
    <style>
        input[type="submit"] {
            padding: 18px 75px 18px 75px;
            /* border: 3px solid white; */
            border: none;
            border-radius: 30px;
            background: none;
            /* background: linear-gradient(to right, #e23826  50%, #f3701d 50%) no-repeat scroll right bottom/210% 100% #f3701d; */
            background-color: #F3701D;
            font-size: 15px;
            color: white;
            margin-bottom: 10px;
        }

        .textname {
            position: relative;
        }

        .btn {
            padding-left: 80px;
            padding-top: 30px;
        }

        .btn :hover {
            background-color: #e23826;
            /* padding: 19px 75px 19px 75px; */
            border-radius: 30px;
            border: none;
            color: white;
        }

        .msg {
            color: red;
            text-align: center;
            padding-top: 20px;
        }

        .frmblock {
            background: linear-gradient(0, rgba(255, 255, 255, 0) -190%, rgba(0, 0, 0, .8) 110%), url("images/lb2.jpg");
            background-size: cover;
            width: 100%;
            height: 100vh;
        }

        .frm {
            background-color: rgba(0, 0, 0, 0.45);
            backdrop-filter: blur(3px);
        }

        /* form p {
            text-align: end;
            padding-right: 14px;
            margin: 0;
        } */

        .user i,
        .pass i {
            font-size: 28px;
            float: left;
            position: absolute;
            left: 30px;
            color: black;
            top: 24%;
            left: 15px;

        }

        .user,
        .pass {
            float: left;
            padding: 6px;
            padding-right: 12px;
            width: 100%;
            padding-bottom: 0;
        }
        
    </style>
</head>

<body>
    <div class="container">
        <?php include('header.php'); ?>
        <div class="frmblock">
            <div class="frm">

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="f">
                    <h2>Login to eLibrary</h2>
                    
                    <div class="textname">
                        <!-- Email Address <br> -->
                        <div class="user">
                            <i id='user' class="fa-solid fa-user"></i>
                            <input type="email" name="email" placeholder="Username"><br>
                        </div>
                         <span class="error">*<?php echo $emailErr; ?></span>
                   
                    </div>
                    <div class="textname">
                        <!-- Password <br> -->
                        <div class="pass">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="pass" placeholder="Password"><br>
                        </div>
                         <span class="error">*<?php echo $passErr; ?></span>
                    
                    </div>
                    <div class="btn">
                        <a href=""><input type="submit" name="sb" value="Log In"></a>
                    </div>
                    <div class="foot">
                        <div class="forget">
                        <a href="#">Forget Password!</a>
                        </div>
                        <div class="create">
                        <a href="">Create an account</a>
                        </div>
                    
                    
                    </div>
              
                    <div class="msg">
                        <?php echo "$msg" ?>
                    </div>
                    <div class="msg">
                        <?php echo "$emsg" ?>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/6070b0cce0.js" crossorigin="anonymous"></script>

</body>

</html>