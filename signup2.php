<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container {
        width: 100%;
        float: left;
        font-family: 'Poppins', sans-serif;
       
        
    }

    .main {
        width: 100%;
        background-image: url('images/girl.jpg');
        background-size: cover;
        width: 100%;
        height: 744px;
    }

    .left {
        width: 50%;
        float: left;
       

    }

    .left img {
        height: 738px;
    }

    .right {
        width: 45%;
        float: left;
        position: absolute;
        left: 455px;
        top: 190px;


    }

    form {
        width: 80%;
        float: left;

        padding: 15px 30px 15px 30px;


    }
    body{
        margin: 0;
    }

    .form-left {
        width: 50%;
        float: left;
        background-color: white;
        height: 400px;
        padding-top: 40px;
    }

    .form-right {
        width: 50%;
        float: left;
        background-color: #467DDB;
        height: 325px;
        color: white;
        text-align: center;
        padding-top: 115px;
    }

    .form-text {
        width: 100%;
        float: left;
        margin-bottom: 15px;
    }

    .form-text input[type='email'],
    .form-text input[type='password'] {
        width: 96%;
        border: 2px solid grey;
        padding: 7px;
        border-radius: 5px;
    }

    .form-btn input[type='submit'] {
        border-radius: 9px;
        background-color: #185DD2;
        color: white;
        border: 0;
        padding: 9px 38px 9px 38px;
        font-size: 15px;
        border-radius: 20px;
        
    }
    .form-btn2 input[type='submit'] {
        background-color: #467DDB;
        color: white;
        padding: 8px 35px 8px 35px;
        font-size: 15px;
        border: 2px solid white;
        border-radius: 20px;
    }
    .form-btn {
        float: left;
        padding-left: 68px;
    }

    form .head {
        text-align: center;
    }
    form a{
        text-decoration: none;
        text-align: center;
        color: grey;
    }
</style>
<body>
<div class="container">
        <div class="main">
            <div class="main-content">
                <div class="left">
                  <!--  <img src="images/b2.jpg" alt="">-->
                </div>
                <div class="right">
                    <div class="form-left">
                        <div class="form">
                            <div class="form-content">
                                <form action="" method="post">
                                    <h1 class="head"><b>Sign In</b></h1>
                                    <div class="form-text">
                                        <input type="email" placeholder="Email"> <br>
                                    </div>
                                    <div class="form-text">
                                        <input type="password" placeholder="Passsword"><br>
                                    </div>
                                    <a href="">
                                        <p>Forget Your Password<p>
                                    </a>
                                    <div class="form-btn">
                                        <input type="submit" value="SIGN IN">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="form-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your details and start your journey with us</p>
                        <div class="form-btn2">
                            <input type="submit" value="SIGN UP">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>