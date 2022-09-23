<?php
session_start();
// Check do the person logged in
if ($_SESSION['email'] == NULL) {
    // Haven't log in
    header("location:login.php");
}
include('config.php');
$query = "SELECT srno, fullName, email, gender, branch, phone, pass FROM users WHERE role=3";
$result = mysqli_query($conn, $query);
// 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/dashstyle.css">
    <link rel="stylesheet" href="css/event_style.css">
    <link rel="stylesheet" href="css/table.css">
    <title>Dashboard</title>
    <style>
        .dashright .top {
            width: 100%;
            float: left;
        }

        .top-header-content {
            width: 100%;
            float: left;
        }

        .dashright .search-types {
            width: 25%;
            float: left;
        }

        .dashright .search-types select {
            width: 100%;
            padding: 8px;
            /* border: none; */
            background-color: white;
        }

        .dashright .search-text {
            width: 44%;
            float: left;
        }

        .dashright .search-text input[type="text"] {
            width: 199px;
            /* border: none; */
            padding: 8px;

        }

        .dashright .search-icon {
            width: 10%;
            float: left;
            text-align: center;
            background-color: #28282C;
            color: white;
            border-radius: 0px 5px 5px 0px;
        }

        .dashright .search-icon i {
            width: 100%;
            padding: 10px;
            padding-left: 0;
        }

        .dashright .search-content {
            width: 35%;
            float: left;
            margin-bottom: 35px;
        }

        .plus {
            float: left;
            width: 65%;
        }
        .plus a{
            text-decoration: none;
        }
        .plus .add {
            background-color: #28282C;
            color: white;
            border-radius: 4px;
            width: 20%;
            margin-left: 50%;
            padding: 7px;

        }

        .add i {
            padding-left: 8px;
            padding-right: 18px;
        }

        .dashright h1 {
            color: #28282C;
            margin-top: 0;
        }

        .dashboard-content {
            padding-top: 0;
        }

        .add-btn :hover {
            background-color: #026B82;
            color: white;
            border: none;
          
        }
        .dashright .search-icon :hover{
            background-color: #026B82;
            color: white;
            border: none;
            border-radius: 0px 8px 8px 0px;

        }
       .color-red{
        color: red;
       }
    </style>
</head>

<body>
    <div class="container">
        <!-- header -->
        <div class="row">
        <?php
         include('dash_header.php')
             ?>
            <?php include('dash_sidebar.php'); ?>
            <!-- main block header or dashboard -->
            <div class="main-dash">
                <div class="row">
                    <div class="main-dash-content">
                        <div class="dashboard">
                            <div class="row">
                                <div class="dashboard-content">
                                    <div class="dashright">
                                        <div class="top">
                                            <h1>Student's</h1>
                                            <div class="top-header">
                                                <div class="row">
                                                    <div class="top-header-content">
                                                        <div class="search-content">
                                                            <div class="row">
                                                                <div class="search-types">
                                                                    <select name="" id="">
                                                                        <option value="">Name</option>
                                                                        <option value="">Email</option>
                                                                        <option value="">Branch</option>
                                                                        <option value="">Semester</option>
                                                                        <option value="">Course</option>
                                                                    </select>
                                                                </div>
                                                                <div class="search-text">
                                                                    <input type="text" placeholder="Search">
                                                                </div>
                                                                <div class="search-icon">
                                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="plus">
                                                            <div class="row">
                                                                <a href="add_student.php">
                                                                <div class="add-btn">
                                                                    <div class="add">
                                                                        <i class="fa-solid fa-plus"></i>
                                                                        <span> Add Student</span>
                                                                    </div>
                                                                </div>
                                                                </a>
                                                               



                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="student_table">
                                            <table>
                                                <tr>
                                                    <th>Sr.no</th>
                                                    <th>Profile</th>
                                                    <th>Student Name</th>
                                                    <th>Email Id</th>
                                                    <th>Gender</th>
                                                    <th>Branch</th>
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
                                                            <td><?php echo $sn; ?> </td>
                                                            <td><?php echo $data['fullName']; ?> </td>
                                                            <td><?php echo $data['email']; ?> </td>
                                                            <td><?php echo $data['gender']; ?> </td>
                                                            <td><?php echo $data['branch']; ?> </td>
                                                            <td><?php echo $data['phone']; ?> </td>
                                                            <td><?php echo $data['pass']; ?> </td>
                                                            <td class="u"><a href="<?php echo 'update.php?srno=' . $data['srno']; ?>"><i class="fa-solid fa-pen-to-square "></i></a> </td>
                                                            <td class="d"><a href="<?php echo 'delete.php?srno=' . $data['srno']; ?>"><i class="fa-solid fa-trash color-red "></i></a></td>
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
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/6070b0cce0.js" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')
    </script>

</body>

</html>