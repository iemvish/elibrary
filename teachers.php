<?php
session_start();

// Check do the person logged in
if($_SESSION['email']==NULL){
    // Haven't log in
    header("location:login.php");
}


include('config.php');
$query = "SELECT srno,fullName, email, gender, branch, phone, pass FROM users WHERE role=2";
$result = mysqli_query($conn, $query);
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
    <link rel="stylesheet" href="css/table.css">
    <style>
        .alert-success{
            background: aquamarine;
            padding: 16px;
            margin-left: 40px;
            border: 1px solid grey;
            margin-right: 40px;
            border-radius: 13px;
            color: black;
            margin-top: 26px;
        }
        .alert-danger
        {
            background: red;
            padding: 16px;
            margin-left: 40px;
            border: 1px solid grey;
            margin-right: 40px;
            border-radius: 13px;
            color: black;
            margin-top: 26px;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php include('header.php')?>
        <div class="mainblock">
        <?php include('sidebar.php'); ?>

            <div class="dashright">
            <?php if(isset($_REQUEST['msg'])){?>
            <div class="alert-success">
                <p style="margin: 0px; padding:0px"><?php echo $_REQUEST['msg']?></p>
            </div>
            <?php
            }
            elseif(isset($_REQUEST['error']))
            {
            ?>
             <div class="alert-danger">
                <p style="margin: 0px; padding:0px"><?php echo $_REQUEST['error']?></p>
            </div>
            <?php
            }
            ?>
                <p>Teachers Details</p>
                <div class="teacher_table">
                    <table>
                        <tr>
                            <th>Id</th>
                            <th>Teacher Name</th>
                            <th>Email Id</th>
                            <th>Gender</th>
                            <th>Teacher Branch</th>
                            <th>Contact</th>
                            <th>Password</th>
                            <th colspan="2">Action</th>
                        </tr>
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            $sn = 1;
                            while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <td><?php echo $sn; ?> </td>
                                    <td><?php echo $data['fullName']; ?> </td>
                                    <td><?php echo $data['email']; ?> </td>
                                    <td><?php echo $data['gender']; ?> </td>
                                    <td><?php echo $data['branch']; ?> </td>
                                    <td><?php echo $data['phone']; ?> </td>
                                    <td><?php echo $data['pass']; ?> </td>
                                    <td class="u"><a href="<?php echo 'update.php?srno='.$data['srno']?>"><button class="update">Update</button></a> </td>
                                    <td class="d"><a href="<?php echo 'delete.php?srno='.$data['srno'];?>"><button class="delete">Delete</button></a></td>
                                <tr>
                                <?php
                                $sn++;
                            }
                        } else { ?>
                                <tr>
                                    <td colspan="8">No data found</td>
                                </tr>
                            <?php } ?>
                    </table>
                </div>


            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>