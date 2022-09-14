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

</head>

<body>
  <?php
  error_reporting(0);
  // define variables and set to empty values
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


    if (empty($_POST['phone'])) {
      $pnumErr = "Phone Number Required!";
    } else {
      $pnum = test_input($_POST["phone"]);

      if (preg_match('/^[0-9]{10}+$/', $pnum)) {
        // echo "Valid Phone Number";
      } else {
        $pnumErr = "Invalid Phone Number";
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

  include "config.php";
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $branch = $_POST['branch'];
  $phone = $_POST['phone'];
  $pass = $_POST['pass'];
  $confirm_pass = $_POST['cpass'];

  $check = mysqli_query($conn, "select * from users where fullname='$fullname' and email='$email'");
  $checkrows = mysqli_num_rows($check);

  if ($checkrows > 0) {
    echo "student exists\n";
  } else {
    if ($pass == $confirm_pass) {
      if (!empty($_POST["fullname"]) && !empty($_POST["email"]) && !empty($_POST["gender"]) && !empty($_POST["branch"]) && !empty($_POST["phone"]) && !empty($_POST["pass"])) {
        //insert results from the form input
        $query = "INSERT INTO users(fullName, email, gender, branch,phone, pass) VALUES ('$fullname', '$email','$gender','$branch', '$phone', '$pass')";

        $result = mysqli_query($conn, $query) or die('Error querying database.');
        mysqli_close($conn);
        echo "Student Added";
      }
    } else {
      $p = "Password Mismatch!";
    }
  }


  ?>
  <div class="container">
    <?php include('header.php')  ?>
    <div class="frmblock">
      <div class="frm">

        <form action="" method="post" class="f">
          <h2>Sign Up</h2>
          <div class="textname">
            <div class="left">
            Full Name <br>
            <input type="text" name="fullname" value="<?php echo $fullname; ?>">
            <span class="error">*<?php echo $fnameErr; ?></span>
            <br>
            </div>
            <div class="right">
            Email Address <br>
            <input type="email" name="email" value="<?php echo $email; ?>">
            <span class="error">*<?php echo $emailErr; ?></span>
            <br>
          </div>

          </div>
          
          <div class="text-name3">
            <label for="branch">Branch:</label> <br>
            <select name="branch" id="branch" value="<?php echo $branch; ?>">
              <option value="CSE">CSE</option>
              <option value="EEE">EEE</option>
              <option value="LAW">LAW</option>
              <option value="ME">ME</option>
              <option value="PHARMACY">PHARMACY</option>
              <option value="CE">CE</option>
              <option value="EE">CE</option>
            </select>
          </div>

          <div class="textname4">
            Gender <br>
            <input type="radio" id="male" name="gender" value="male">
              <label for="male">male</label><br>
              <input type="radio" id="female" name="gender" value="female">
              <label for="female">female</label><br>
              <input type="radio" id="other" name="gender" value="other">
              <label for="other">other</label>
            <br>
          </div>
          <div class="textname5">
            Phone Number <br>
            <input type="text" name="phone" value="<?php echo $pnum; ?>">
            <span class="error">*<?php echo $pnumErr; ?></span>
            <br>
          </div>
          <div class="textname6">
            Password <br>
            <input type="password" name="pass" value="<?php echo $pass; ?>">
            <span class="error">*<?php echo $passErr; ?></span>
            <br>
          </div>
          <div class="textname7">
            Confirm Password <br>
            <input type="password" name="cpass" value="<?php echo $confirm_pass; ?>">
            <span class="error">*<?php echo $p; ?></span>

            <br>
          </div>
          <div class="btn">
            <a href=""><input type="submit" name="sb"></a>
          </div class="lh">
          <h4>Already Registered <a href="">Login here</a></h4>


        </form>
      </div>
    </div>
  </div>
</body>

</html>