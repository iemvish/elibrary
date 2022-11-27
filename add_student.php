<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add_student</title>
</head>
<style>
    body {
        margin: 0;
    }

    .container {
        width: 100%;
        float: left;
        font-family: 'Poppins', sans-serif;
        /* background: linear-gradient(0, rgba(255, 255, 255, 0) 0%, rgba(0, 0, 0, .8) 110%), url("images/add-s.jpg"); */
        background-size: cover;
        height: 100vh;
        position: relative;
    }

    .form {
        margin: 150px 380px 0px 380px;
        backdrop-filter: blur(100px);
    }

    form input[type="text"],
    form input[type="email"],
    form input[type="password"] {
        padding: 14px;
        width: 95%;
        border: none;
        border-bottom: 1px solid #727273;
        background-color: #F8F9FA;
        outline: none;

    }

    /* input:focus::-webkit-input-placeholder {
    font-size: .75em;
    position: relative;
    top: -15px; 
    transition: 0.2s ease-out;
}

input::-webkit-input-placeholder {
    transition: 0.2s ease-in;
}

input[type="text"]:focus, input[type="password"]:focus {
    height: 50px;
    padding-bottom: 0px;
    transition: 0.2s ease-in;
}

input[type="text"], input[type="password"] {
    height: 50px;
    transition: 0.2s ease-in;
} */

    form input[type="file"] {
        width: 100%;
        float: left;
        padding: 14px;
    }

    form input[type="submit"] {
        padding: 12px 35px 12px 35px;
        border: none;
        border-radius: 8px;
        color: white;
        background-color: #4CAF50;

    }

    form {
        width: 100%;
        float: left;
    }

    .form-data {
        width: 100%;
        float: left;
        box-sizing: border-box;
        padding: 20px;
    }

    form select {
        width: 100%;
        padding: 14px;
        border: none;
        border-bottom: 1px solid #727273;
        background-color: #F8F9FA;
        outline: none;
        color: #969696;

    }

    .form h1 {
        /* text-align: center; */
        border-bottom: 3px solid #026B82;
        background-color: beige;
        color: black;
        padding: 15px;
        padding-bottom: 0;
        /* box-shadow: 0px 18px 20px 0px #026B82; */

    }

    .form-text {
        width: 100%;
        float: left;
        margin-bottom: 12px;
    }

    .text1 {
        width: 45%;
        float: left;
        margin-right: 55px;
    }

    .text2 {
        width: 45%;
        float: left;
    }

    .form-btn {
        width: 100%;
        float: left;
        text-align: center;
        margin-top: 45px;
        font-weight: bold;
    }

    .error {
        color: red;
    }

    .form-btn :hover {
        background-color: #026B82;
        font-weight: bold;
    }

    .placeholder {
        color: #aaaabe;
        position: absolute;
        top: 133px;
        left: 29px;
        font-size: 14px;

    }
</style>

<body>

    <?php

    // define variables and set to empty values
    $fnameErr = $emailErr = $pnumErr = $passErr = $cpassErr = $p = "";
    $fname = $email = $pnum = $pass = $confirmpass = "";



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fullName"])) {
            $fnameErr = "Name is required!";
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

        if (
            !empty($_POST["fullName"]) && !empty($_POST["email"]) && !empty($_POST["gender"])
            && !empty($_POST["branch"]) && !empty($_POST["phone"]) && !empty($_POST["pass"])
        ) {
            //insert results from the form input

            $query = "INSERT INTO users(fullName,email,gender,branch,sem,phone,pass,role) VALUES ('$fullname', '$email','$gender','$branch','$sem','$phone','$pass','3')";

            $result = mysqli_query($conn, $query);
            // mysqli_close($conn);

            echo "Student Added";
            if ($result) {
                header('location:students.php');
            }
        }
    }


    ?>
    <div class="container">
        <div class="row">
            <div class="form">
                <form action="" method="post" enctype="multipart/form-data">
                    <h1>Add Teachers</h1>
                    <div class="form-data">
                        <div class="form-text">
                            <div class="text1">
                                <!-- Full Name: <br> -->
                                <input id="fname" type="text" name="fullName" value="<?php echo $fname; ?>"><br>
                                <span class="placeholder">Full Name <span class="star">*</span>
                                </span>
                                <span class="error">*<?php echo $fnameErr; ?></span><br>
                            </div>

                            <div class="text2">
                                <input type="file" name="file">
                            </div>
                        </div>
                        <div class="form-text">
                            <div class="text1">
                                <!-- Email Id: <br> -->
                                <select class="gender" name="gender">
                                    <option value="">Select Gender*</option>
                                    <option value="2" <?php if (isset($_POST['gender']) &&  $_POST['gender'] == 2) {
                                                            echo "selected";
                                                        } ?>>Male</option>
                                    <option value="1" <?php if (isset($_POST['gender']) &&  $_POST['gender'] == 1) {
                                                            echo "selected";
                                                        } ?>>Female</option>
                                    <option value="3" <?php if (isset($_POST['gender']) &&  $_POST['gender'] == 3) {
                                                            echo "selected";
                                                        } ?>>Other</option>
                                </select>
                                <br>
                            </div>

                            <div class="text2">
                                <!-- Branch: <br> -->
                                <input type="text" placeholder="Email Id*" name="email" value="<?php echo $email ?>"><br>
                                <span class="error">*<?php echo $emailErr; ?></span>
                                <br>
                            </div>
                        </div>

                        <div class="form-text">
                            <div class="text1">
                                <!-- Password: <br> -->
                                <input type="password" placeholder="Password*" name="pass" value="<?php echo $pass ?>"><br>
                                <span class="error">*<?php echo $passErr; ?></span><br>
                            </div>
                            <div class="text2">
                                <!-- Phone number: <br> -->
                                <input type="text" placeholder="Phone number*" name="phone" value="<?php echo $phone ?>"><br>
                                <span class="error">*<?php echo $pnumErr; ?></span><br>
                            </div>

                        </div>
                        <div class="form-text1">
                            <!-- <label for="gender">Gender:</label> <br> -->

                            <div class=" text1 sem">
                                <select name="sem"  name="sem">
                                    <option value="">Select Semester*</option>
                                    <option value="1" <?php if (isset($_POST['sem']) &&  $_POST['sem'] == 1) {
                                                            echo "selected";
                                                        } ?>>First</option>
                                    <option value="2" <?php if (isset($_POST['sem']) &&  $_POST['sem'] == 2) {
                                                            echo "selected";
                                                        } ?>>Second</option>
                                    <option value="3" <?php if (isset($_POST['sem']) &&  $_POST['sem'] == 3) {
                                                            echo "selected";
                                                        } ?>>Third</option>
                                    <option value="4" <?php if (isset($_POST['sem']) &&  $_POST['sem'] == 4) {
                                                            echo "selected";
                                                        } ?>>Fourth</option>
                                    <option value="5" <?php if (isset($_POST['sem']) &&  $_POST['sem'] == 5) {
                                                            echo "selected";
                                                        } ?>>Fifth</option>
                                    <option value="6" <?php if (isset($_POST['sem']) &&  $_POST['sem'] == 6) {
                                                            echo "selected";
                                                        } ?>>Six</option>
                                    <option value="7" <?php if (isset($_POST['sem']) &&  $_POST['sem'] == 7) {
                                                            echo "selected";
                                                        } ?>>Seventh</option>
                                    <option value="8" <?php if (isset($_POST['sem']) &&  $_POST['sem'] == 8) {
                                                            echo "selected";
                                                        } ?>>Eighth</option>
                                </select>
                            </div>
                            <div class="text2"><select class="gender"  name="branch">
                                    <option value="">Select Branch*</option>
                                    <option value="1" <?php if (isset($_POST['branch']) &&  $_POST['branch'] == 1) {
                                                            echo "selected";
                                                        } ?>>CSE</option>
                                    <option value="2" <?php if (isset($_POST['branch']) &&  $_POST['branch'] == 2) {
                                                            echo "selected";
                                                        } ?>>EEE</option>
                                    <option value="3" <?php if (isset($_POST['sem']) &&  $_POST['branch'] == 3) {
                                                            echo "selected";
                                                        } ?>>CE</option>
                                    <option value="4" <?php if (isset($_POST['branch']) &&  $_POST['branch'] == 4) {
                                                            echo "selected";
                                                        } ?>>ECE</option>
                                </select></div>

                        </div>
                        <div class="form-btn">
                            <input id="btn2" type="submit" value="ADD TEACHER">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/6070b0cce0.js" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')
    </script>
</body>

</html>