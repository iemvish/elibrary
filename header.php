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
</head>

<body>
    <div class="header">
        <a href="index.php">
            <div class="hleft">
                <div class="logo">
                <p><b class="white_c">e</b>Library</p>
                <span class="white_c">Library Management System</span>
                </div>
               
            </div>
        </a>
        <div class="hright">
        <div class="navbar">
           <ul class="menu">
            <a href="index.php"><li>HOME</li></a>
            <?php 
            error_reporting(0);
            session_start();
            
            if($_SESSION['email'])
            {
            }
            else
            { ?>
                <a href="form.php"><li>REGISTER</li></a>
          <?php  }?>
            
             
            <?php
               
               if(isset($_SESSION['email']))
            {  ?>
                <a href="logout.php"><li>LOGOUT</li></a> 
                <a href="event.php"><li>dashboard</li></a>
         <?php  
          }
            else
            {   ?>
        
                    <a href="login.php"><li>LOGIN </li>
               <?php  }?>  
            <a href=""><li></li></a>
               </ul>
        </div>
        
        
        </div>
    </div>


</body>

</html>