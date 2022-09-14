<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<style>
    .left{
        width: 50%;
        float: left;
    }
    .left img{
        width: 100%;
    }
    .right{
        padding: 300px;
        padding-bottom: 0;
    padding-top: 75px;      
         float: left;
         position: absolute;
    }
    body{
        margin: 0;
      
    }
</style>

<body>
    <div class="container">
    <?php   include('header.php');?>
        <div class="main_block">
            <div class="row">
            <div class="main">
            
                <div class="main-block-content">
                <div class="left-block">
                    <img src="images/img.jpg" alt="">
                </div>
                <div class="right-block">
                    <div class="form">
                        <div class="form-content">
                            <h1 class="text-center"><b>Registration</b></h1>
                            <form action="" method="post">
                                <div class="form-text">
                                    <div class="text1">
                                        Full Name: <br>
                                        <input type="text"><br>
                                    </div>

                                    <span>
                                        Email Id: <br>
                                        <input type="email"> <br>
                                    </span>
                                </div>
                                <div class="form-text">
                                    <div class="text1">
                                        Phone number: <br>
                                        <input type="text"><br>
                                    </div>

                                    <span>
                                        Branch: <br>
                                        <input type="text"> <br>
                                    </span>
                                </div>

                                <div class="form-text">
                                    <div class="text1">
                                        Password: <br>
                                        <input type="text"><br>
                                    </div>

                                    <span>
                                        Confirm Password: <br>
                                        <input type="text"> <br>
                                    </span>
                                </div>
                                <div class="form-text">
                                <label for="gender">Gender:</label> <br>
                                  <select name="gender" id="">
                                    <option value="">--Select Gender--</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                  </select>
                                    <br>
                                </div>
                                <div class="form-btn2">
                            <input type="submit" value="SIGN UP">
                        </div>

                            </form>
                        </div>
                    </div>

                </div>
                </div>
                
           
            </div>
        </div>
        </div>
    </div>
</body>

</html>