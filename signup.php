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
        background: linear-gradient(0, rgba(255, 255, 255, 0) 0%, rgba(0, 0, 0, .8) 160%), url("images/signup.jpg");
        width: 100%;
        float: left;
        background-size: cover;
        height: 758px;
    }

    .mainblock-content {
        position: absolute;
        top: 5%;
        left: 62%;
    }

    form {
        width: 100%;
        color: white;
        padding-top: 25px;
    }

    .form-text {
        width: 100%;
        padding-bottom: 55px;
    }

    .text1 {
        float: left;
        margin-right: 30px;
    }

    form span {
        float: left;
    }

    .gender {
        padding: 8px;
        border: none;
        width: 191px;
        border-radius: 9px;
        float: left;
        margin-right: 16px;
    }

    .sem select {
        padding: 8px;
        border: none;
        border-radius: 10px;
        width: 193px;
        float: left;
        margin-right: 17px;
    }

    form input[type='text'],
    form input[type='password'] {
        padding: 8px;
        border-radius: 10px;
        border: 0;
        width: 100%;
    }

    form input[type='email'] {
        padding: 8px;
        border-radius: 10px;
        border: 0;
        width: 178px;
        float: left;

    }

    form input[type='submit'] {
        padding: 8px 35px 7px 35px;
        border: 3px solid white;
        border-radius: 20px;
        background: none;
        color: white;

    }




    .form-btn2 {
        float: left;
        margin-top: 30px;
        width: 100%;
        text-align: center;
    }

    .text-center {
        border-bottom: 2px solid;
        width: 95%;
        margin-bottom: 35px;
    }
    form a{
        color: white;
        text-decoration: none;
       
    }
    .f{
        text-align: center;
        margin-top: 25px;
        float: left;
        width: 100%;
    }
</style>

<body>
    <div class="container">
        <div class="main">
            <div class="main-block">
                <div class="mainblock-content">
                    <div class="form">
                        <div class="form-content">

                            <form action="" method="post">
                                <h1 class="text-center"><b>Register Here!</b></h1>
                                <div class="form-text">
                                    <div class="text1">
                                        <!-- Full Name: <br> -->
                                        <input type="text" placeholder="Full Name"><br>
                                    </div>

                                    <span>
                                        <!-- Email Id: <br> -->
                                        <select class="gender" name="gender" id="">
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <br>
                                    </span>
                                </div>
                                <div class="form-text">
                                    <div class="text1">
                                        <!-- Phone number: <br> -->
                                        <input type="text" placeholder="Phone number"><br>
                                    </div>

                                    <span>
                                        <!-- Branch: <br> -->
                                        <input type="email" placeholder="Email Id">
                                        <br>
                                    </span>
                                </div>

                                <div class="form-text">
                                    <div class="text1">
                                        <!-- Password: <br> -->
                                        <input type="text" placeholder="Password"><br>
                                    </div>
                                    <span>
                                        <!-- Confirm Password: <br> -->
                                        <input type="text" placeholder="Confirm Password"> <br>
                                    </span>
                                </div>
                                <div class="form-text1">
                                    <!-- <label for="gender">Gender:</label> <br> -->

                                    <span class="sem">
                                        <select name="sem" id="">
                                            <option value="">Select Semester</option>
                                            <option value="First">First</option>
                                            <option value="Second">Second</option>
                                            <option value="Third">Third</option>
                                            <option value="Fourth">Fourth</option>
                                            <option value="Fifth">Fifth</option>
                                            <option value="Six">Six</option>
                                        </select>
                                    </span>
                                    <span><select class="gender" id="">
                                            <option value="">Select Branch</option>
                                            <option value="CSE">CSE</option>
                                            <option value="EEE">EEE</option>
                                            <option value="CE">CE</option>
                                            <option value="ECE">ECE</option>
                                        </select></span>

                                </div>
                                <div class="form-btn2">
                                    <input type="submit" value="SIGN UP">
                                </div>
                              <p class="f">Already Registered! <a href="">SIGN IN</a></p>  

                            </form>


                        </div>
                    </div>
                </div>
            </div>
</body>

</html>