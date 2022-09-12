<?php
session_start();


$password = "";
$passErr = "";
if (isset($_POST["submit"])) {
    $valid = true;

    if (empty($_POST["admin_pass"])) {
        $passErr = "Password is required";
        $valid = false;
    } else {
        $pass = test_input($_POST["admin_pass"]);
    }

    if ($valid) {
        include "config.php";
       
        $admin = $_POST["admin"];
        $pass = $_POST["admin_pass"];
       
              
      

      $query = "select * from admin_details where admin_ = '$admin' and admin_pass = '$pass'";
        $results = mysqli_query($conn, $query);
        $num = mysqli_num_rows($results);
        if ($num == 1) 
        
        {
            $_SESSION['admin'] = $admin;
            $_SESSION['admin_pass'] = $pass;
            header('location:admin_event.php');

        }
         else
          {
          echo "Incorrect email or password!";
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
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/mystyle1.css">
</head>

<body>
  <div class="container">
    <?php include('header.php'); ?>
    <div class="frm">

      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="f">
        <h2>eLibrary ADMIN</h2>
        <div class="textname">
          Admin <br>
          <input type="text" name="admin">
          <br>
        </div>
        <div class="textname">
          Password <br>
          <input type="password" name="admin_pass">
          <br>
        </div>
        <div class="btn">
        <button type="submit" name="submit">Login</button>
        </div>
        <a href="#">Forget Password!</a>

      </form>
    </div>
  </div>



</body>

</html>