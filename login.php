<?php
session_start();
error_reporting(0);
/*
if(isset($_SESSION['email']))
{
    header("location:event.php");
}*/
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
            header('location:event.php');
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
        .msg {
            color: red;
            text-align: center;
            padding-top: 20px;
        }

        .frmblock {
            background: linear-gradient(0, rgba(255, 255, 255, 0) -190%, rgba(0, 0, 0, .8) 110%), url("images/lb2.jpg");
            background-size: cover;
            width: 100%;
            height: 610px;
        }

        .frm{
            background-color: rgba(0, 0, 0, 0.45);
            backdrop-filter: blur(3px);
        }
        form p {
            text-align: end;
            padding-right: 14px;
            margin: 0;
        }
       .user i,.pass i{
        font-size: 28px;
        float: left;
 
        
       }
       .user,.pass{
        float: left;
        padding: 6px;
    padding-right: 12px;
    padding-top: 17px;
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
                    <p><a href="">Create an account</a></p>
                    <div class="textname">
                        <!-- Email Address <br> -->
                        <div class="user">
                        <i id='user'class="fa-solid fa-user"></i>
                        </div>
                        
                        <input type="email" name="email" placeholder="Username"><br>  
                        <span class="error">*<?php echo $emailErr; ?></span>
                        <br>
                    </div>
                    <div class="textname">
                        <!-- Password <br> -->
                        <div class="pass">
                        <i class="fa-solid fa-lock"></i>
                        </div>
                        
                        <input type="password" name="pass" placeholder="Password"><br>
                        <span class="error">*<?php echo $passErr; ?></span>
                        <br>
                    </div>
                    <div class="btn">
                        <a href=""><input type="Submit" name="sb" value="Log In"></a>
                    </div>
                    <a href="#">Forget Password!</a>
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

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/6070b0cce0.js" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')
    </script>

</body>

</html>