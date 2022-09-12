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
        if ($num == 1) 
        {
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $pass;
           header('location:event.php');

        }
         else
          {
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
    </style>
</head>

<body>
    <div class="container">
       <?php include('header.php');?>
        <div class="frmblock">
        <div class="frm">
            
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="f">
            <h2>Login to eLibrary</h2>
                <div class="textname">
                    Email Address <br>
                    <input type="email" name="email">
                    <span class="error">*<?php echo $emailErr; ?></span>
                    <br>
                </div>
                <div class="textname">
                    Password <br>
                    <input type="password" name="pass">
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



</body>

</html>

