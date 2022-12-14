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
</head>
<style>
    .error {
        color: red;
    }

    body {
        margin: 0;
    }

    .container {
        width: 100%;
        float: left;
        font-family: 'Poppins', sans-serif;
    }

    .main {
        width: 100%;
        float: left;
    }

    .main-block {
        background: linear-gradient(0, rgba(255, 255, 255, 0) -170%, rgba(0, 0, 0, .8) 110%), url("images/signup.jpg");
        width: 100%;
        float: left;
        background-size: cover;
        height: 100vh;
    }

    .mainblock-content {
        position: absolute;
        /* top: 20%; */
        left: 35%;
        float: left;
    margin-top: 70px;
        
    }

    form {
        /* width: 100%; */
        color: white;
        float: left;
        background-color: rgba(0, 0, 0, -0.39);
        backdrop-filter: blur(1px); 
        margin-top: 30px;
    }

    .form-text {
        width: 100%;
        padding-bottom: 80px;
    }

    .text1 {
        float: left;
        margin-right: 29px;
    }

    form .text2 {
        float: left;
    }

    .gender {
        padding: 12px;
        border: none;
        width: 257px;
        border-radius: 9px;
        float: left;
        margin-right: 16px;
    }

    .sem select {
        padding: 12px;
        border: none;
        border-radius: 10px;
        width: 260px;
        float: left;
        margin-right: 29px;
    }

    form input[type='text'],
    form input[type='password'] {
        padding: 12px;
        border-radius: 10px;
        border: 0;
        width: 235px;
    }

    form input[type='email'] {
        padding: 12px;
        border-radius: 10px;
        border: 0;
        width: 235px;
        float: left;

    }

    form input[type='submit'] {
        padding: 19px 75px 19px 75px;
        /* border: 3px solid white; */
        border: none;
        border-radius: 30px;
        background: none;
        /* background: linear-gradient(to right, #e23826  50%, #f3701d 50%) no-repeat scroll right bottom/210% 100% #f3701d; */
        background-color: #F3701D;
       font-size: 15px;
        color: white;

    }




    .form-btn2 {
        float: left;
        margin-top: 80px;
        width: 100%;
        text-align: center;
       
    }
    .form-btn2 :hover{
        background-color:#e23826;
        
        /* background :linear-gradient(to right, #e23826 50%, #f3701d 50%) no-repeat scroll right bottom/210% 100% #f3701d; */
        padding: 19px 75px 19px 75px;
        border: none;
        color: white;
    }
    .text-center {
        text-align: center;
        border-bottom: 3px solid;
        width: 100%;
        margin-bottom: 60px;
    }

    form a {
        color: white;
        text-decoration: none;

    }

    .f {
        text-align: center;
        margin-top: 25px;
        float: left;
        width: 100%;
    }
</style>

<body>
    <?php
    //  session_start();
    //  @$_SESSION['email'] = $_POST['email'];
    // define variables and set to empty values
    $fnameErr = $emailErr = $pnumErr = $passErr = $cpassErr = $p = "";
    $fname = $email = $pnum = $pass = $confirmpass = "";



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fullName"])) {
            $fnameErr = "Name is required!";
        } 
        else {
            $fname = test_input($_POST["fullName"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required!";
        } 
        else {
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
    @$fullname = $_POST['fullName'];
    @$email = $_POST['email'];
    @$gender = $_POST['gender'];
    @$branch = $_POST['branch'];
    @$sem = $_POST['sem'];
    @$phone = $_POST['phone'];
    @$pass = $_POST['pass'];
    @$confirm_pass = $_POST['cpass'];

    $check = mysqli_query($conn, "select * from users where fullname='$fullname' and email='$email'");
    $checkrows = mysqli_num_rows($check);

    if ($checkrows > 0) {
        echo "student exists\n";
    } else {
        if ($pass == $confirm_pass) {           
            if (!empty($_POST["fullName"]) && !empty($_POST["email"]) && !empty($_POST["gender"]) 
            && !empty($_POST["branch"]) && !empty($_POST["phone"]) && !empty($_POST["pass"])) {
                //insert results from the form input
                
                $query = "INSERT INTO users(fullName,email,gender,branch,sem,phone,pass,role) VALUES ('$fullname', '$email','$gender','$branch','$sem','$phone','$pass','3')";
                //  dd($query);
                $result = mysqli_query($conn,$query);
                // mysqli_close($conn);
                
                echo "Student Added";
                if($result)
                {
                header('location:dashboard.php');
                }
            }
        } else {
            $p = "Password Mismatch!";
        }
    }


    ?>
    <div class="container">
        <div class="main">
            <div class="main-block">
            <?php include('header.php') ?>
                <div class="mainblock-content">
                   
                    <div class="form">
                        <div class="form-content">

                            <form action="" method="post">
                                <h1 class="text-center"><b>Register Here!</b></h1>
                                <div class="form-text">
                                    <div class="text1">
                                        <!-- Full Name: <br> -->
                                        <input type="text" placeholder="Full Name" name="fullName" value="<?php echo $fname; ?>"><br>
                                        <span class="error">*<?php echo $fnameErr; ?></span><br>
                                    </div>

                                    <div class="text2">
                                        <!-- Email Id: <br> -->
                                        <select class="gender" name="gender" id="">
                                            <option value="">Select Gender</option>
                                            <option value="2" <?php if(isset($_POST['gender']) &&  $_POST['gender'] == 2){echo "selected";}?>>Male</option>
                                            <option value="1" <?php  if(isset($_POST['gender']) &&  $_POST['gender'] == 1){echo "selected";}?>>Female</option>
                                            <option value="3" <?php  if(isset($_POST['gender']) &&  $_POST['gender'] == 3){echo "selected";}?>>Other</option>
                                        </select>
                                        <br>
                                    </div>
                                </div>
                                <div class="form-text">
                                    <div class="text1">
                                        <!-- Phone number: <br> -->
                                        <input type="text" placeholder="Phone number" name="phone" value="<?php echo $phone ?>"><br>
                                        <span class="error">*<?php echo $pnumErr; ?></span><br>
                                    </div>

                                    <div class="text2">
                                        <!-- Branch: <br> -->
                                        <input type="email" placeholder="Email Id" name="email" value="<?php echo $email ?>"><br>
                                        <span class="error">*<?php echo $emailErr; ?></span>
                                        <br>
                                    </div>
                                </div>

                                <div class="form-text">
                                    <div class="text1">
                                        <!-- Password: <br> -->
                                        <input type="password" placeholder="Password" name="pass" value="<?php echo $pass ?>"><br>
                                        <span class="error">*<?php echo $passErr; ?></span><br>
                                    </div>
                                    <div class="text2">
                                        <!-- Confirm Password: <br> -->
                                        <input type="password" placeholder="Confirm Password" name="cpass" value="<?php echo $confirm_pass ?>"><br>
                                        <span class="error">*<?php echo $cpassErr; ?></span><span class="error"><?php echo $p; ?></span> <br>
                                    </div>
                                </div>
                                <div class="form-text1">
                                    <!-- <label for="gender">Gender:</label> <br> -->

                                    <div class=" text2 sem">
                                        <select name="sem" id="" name="sem">
                                            <option value="">Select Semester</option>
                                            <option value="1"  <?php if(isset($_POST['sem']) &&  $_POST['sem'] == 1) {echo "selected";}?>>First</option>
                                            <option value="2"  <?php if(isset($_POST['sem']) &&  $_POST['sem'] == 2) {echo "selected";}?>>Second</option>
                                            <option value="3" <?php if(isset($_POST['sem']) &&  $_POST['sem'] == 3) {echo "selected";}?>>Third</option>
                                            <option value="4" <?php if(isset($_POST['sem']) &&  $_POST['sem'] == 4) {echo "selected";}?>>Fourth</option>
                                            <option value="5" <?php if(isset($_POST['sem']) &&  $_POST['sem'] == 5) {echo "selected";}?>>Fifth</option>
                                            <option value="6" <?php if(isset($_POST['sem']) &&  $_POST['sem'] == 6) {echo "selected";}?>>Six</option>
                                            <option value="7" <?php if(isset($_POST['sem']) &&  $_POST['sem'] == 7) {echo "selected";}?>>Seventh</option>
                                            <option value="8" <?php if(isset($_POST['sem']) &&  $_POST['sem'] == 8) {echo "selected";}?>>Eighth</option>
                                        </select>
                                    </div>
                                    <div class="text2"><select class="gender" id="" name="branch">
                                            <option value="">Select Branch</option>
                                            <option value="1" <?php if(isset($_POST['branch']) &&  $_POST['branch'] == 1){echo "selected";}?>>CSE</option>
                                            <option value="2" <?php if(isset($_POST['branch']) &&  $_POST['branch'] == 2){echo "selected";}?>>EEE</option>
                                            <option value="3" <?php if(isset($_POST['sem']) &&  $_POST['branch'] == 3){echo "selected";}?>>CE</option>
                                            <option value="4" <?php if(isset($_POST['branch']) &&  $_POST['branch'] == 4){echo "selected";}?>>ECE</option>
                                        </select></div>

                                </div>
                                <div class="form-btn2">
                                    <input id="btn2" type="submit" value="SIGN UP">
                                </div>
                                <p class="f">Already Registered! <a href="">SIGN IN</a></p>

                            </form>


                        </div>
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