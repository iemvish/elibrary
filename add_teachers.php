<?php
session_start();

// Check do the person logged in
if($_SESSION['email']==NULL){
    // Haven't log in
    header("location:login.php");
}
$tname = $email = $tbranch = $phone = $pass = "";
$tnameErr = $emailErr = $tbranchErr = $phoneErr = $passErr = "";
include ('config.php');
error_reporting(0);
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$tbranch = $_POST['tbranch'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];
$role = $_POST['role'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fullName"])) {
        $tnameErr = "Teacher name required!";
    } else {
        $tname = test_input($_POST["fullName"]);
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

    if (empty($_POST["tbranch"])) {
        $tbranchErr = "Teacher Branch required!";
    } else {
        $tbranch = test_input($_POST["tbranch"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $tbranch)) {
            $tbranchErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST['phone'])) {
        $phoneErr = "Phone Number Required!";
    } else {
        $phone = test_input($_POST["phone"]);

        if (preg_match('/^[0-9]{10}+$/', $phone)) {
            // echo "Valid Phone Number";
        } else {
            $phoneErr = "Invalid Phone Number";
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

$check = mysqli_query($conn, "select * from users WHERE role=2");
$checkrows = mysqli_num_rows($check);


    if (!empty($fullName || $email || $tbranch || $phone || $pass)) {

        if (!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', ($_POST['pass']))) {
            $passErr = 'atleast one lowercase and one uppercase character, numbers and 
            at least one special character.';
        } 
        else {
            
            // form data insert into database
            $query = "INSERT INTO users(fullName, email, gender, branch, phone, pass, role) VALUES ('$fullName', '$email', '$gender','$tbranch','$phone', '$pass','$role')";

            $result = mysqli_query($conn, $query) or die('Error querying database.');
            header("location:teachers.php");
        }
    
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
    <link rel="stylesheet" href="css/event_style.css">
    <style>
        .teacherForm form {
            margin: auto 500px;
            width: 20%;
        }

        .teacherForm form h2 {
            text-align: center;
        }
        .error {
            color: red;
        }
        .role{
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
    <?php include('header.php');?>
      <div class="mainblock">
        <?php include('sidebar.php'); ?>

            <div class="dashright">
                <p>Dashboard</p>
                <div class="teacherForm">
                    <form action="" method="post">
                        <h2>Add Teacher</h2>
                        <div class="text-name">
                            Teacher Name: <br>
                            <input type="text" name="fullName" value="<?php echo $tname; ?>"> <br>
                            <span class="error">*<?php echo $tnameErr; ?></span> <br>
                        </div>

                        <div class="text-name">
                            Email id: <br>
                            <input type="email" name="email" value="<?php echo $email; ?>"> <br>
                            <span class="error">*<?php echo $emailErr; ?></span><br>
                        </div>

                        <div class="text-name">
                            Gender: <br>
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">male</label><br>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">female</label><br>
                            <input type="radio" id="other" name="gender" value="other">
                             <label for="other">other</label>
                        </div>

                        <div class="text-name">
                            <label for="tbranch">Teacher Branch:</label> <br>
                            <select name="tbranch" id="tbranch" value="<?php echo $tbranch; ?>"> 
                                <option value="CSE">CSE</option>
                                <option value="EEE">EEE</option>
                                <option value="LAW">LAW</option>
                                <option value="ME">ME</option>
                                <option value="PHARMACY">PHARMACY</option>
                                <option value="CE">CE</option>
                                <option value="EE">CE</option>
                                <span class="error">*<?php echo $tbranchErr; ?></span>
                                

                            </select>
                        </div>


                        <div class="text-name">
                            Phone Number: <br>
                            <input type="text" name="phone" value="<?php echo $phone; ?>"> <br>
                            <span class="error">*<?php echo $phoneErr; ?></span><br>
                        </div>

                        <div class="text-name">
                            Password: <br>
                            <input type="password" name="pass" value="<?php echo $pass; ?>"> <br>
                            <span class="error">*<?php echo $passErr; ?></span><br>
                        </div>
                        <div class="role">
                        <input type="text" name="role" value="2">
                        </div>
                        
                        <button type="submit" name="btn">Add</button>
                    </form>
                </div>



            </div>
        </div>
    </div>
</body>

</html>