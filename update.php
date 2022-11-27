<?php
if (isset($_REQUEST['srno']) && !empty($_REQUEST['srno'])) {
    include('config.php');
    $id = $_GET['srno'];
    $query = "SELECT fullName, email, gender, branch, phone, pass FROM users WHERE srno = '$id'";
    $result = mysqli_query($conn, $query);

    if (isset($_REQUEST['submit'])) {
        $tname = $_REQUEST['fullName'];
        $email = $_REQUEST['email'];
        $gender = $_REQUEST['gender'];
        $tbranch = $_REQUEST['tbranch'];
        $phone = $_REQUEST['phone'];
        $pass = $_REQUEST['pass'];
        $update = "UPDATE users SET fullName='$tname', email='$email',gender='$gender',branch='$tbranch', phone='$phone',pass='$pass' WHERE srno='$id'";

        try {
            $result = mysqli_query($conn, $update);
            include('functions.php');
            $role = get_role($conn, $id);
            $query = "UPDATE users SET fullName='$tname', email='$email',gender='$gender',branch='$tbranch', phone='$phone',pass='$pass' WHERE srno='$id'";
            $data = mysqli_query($conn, $query);
            if ($data) {
                switch ($role) {
                    case 2:
                        header("location:teachers.php?msg=Record Updated Successfully.");
                        break;
                    case 3:
                        header("location:students.php?msg=Record Updated Successfully.");
                        break;
                }
            } else {
                echo "failed to update";
            }
            // header("location:teachers.php?msg=Record Updated Successfully.");
        }

        //catch exception
        catch (Exception $e) {
            $role = get_role($conn, $id);

            switch ($role) {
                case 2:
                    header("location:teachers.php?error=!OOPs Some Technical Error.");
                    break;
                case 3:
                    header("location:students.php?error=!OOPs Some Technical Error.");
                    break;
            }
            header("location:teachers.php?error=!OOPs Some Technical Error.");
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
        <style>
            .container {
                width: 100%;
                float: left;
            }

            .main {
                width: 100%;
                float: left;
            }

            .main-content {
                width: 100%;
            }

            form {
                margin: auto 410px;
                margin-top: 100px;
            }

            .text-name {
                width: 50%;
                float: left;
                margin-bottom: 10px;

            }

            .text-name2 {
                width: 50%;
                float: left;
                margin-bottom: 10px;
            }

            input[type="text"] {
                margin-left: 12px;
                width: 60%;
            }

            input[type="email"] {
                margin-left: 12px;
                width: 60%;
            }

            input[type="password"] {
                margin-left: 12px;
                width: 60%;

            }

            select {
                margin-left: 12px;
                width: 60%;
            }

            input[type="submit"] {
                margin-left: 240px;
                margin-top: 26px;
                padding: 8px 15px 8px 15px;
                border-radius: 10px;
                border: 1px solid;
            }

            form h2 {
                text-align: center;
                border-bottom: 5px solid green;
                padding-bottom: 12px;
                margin-bottom: 30px;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="main">
                <div class="main-content">
                    <form action="" method="post">
                        <h2>Update Your Detail here</h2>
                        <div class="text-name">

                            <?php if (mysqli_num_rows($result) > 0) {
                                if ($data = mysqli_fetch_assoc($result)) { ?>

                                    Teacher Name:
                                    <input type="text" name="fullName" value="<?php echo $data['fullName']; ?>"> <br>
                        </div>

                        <div class="text-name2">
                            Email id:
                            <input type="email" name="email" value="<?php echo $data['email']; ?>"> <br>
                        </div>
                        <div class="text-name">
                            Gender:
                            <input type="radio" id="male" name="gender" value="1" <?php if ($data['gender'] == 1) {
                                                                                        echo "checked";
                                                                                    } ?>>
                              <label for="male">male</label><br>
                              <input type="radio" id="female" name="gender" value="0" <?php if ($data['gender'] == 0) {
                                                                                            echo "checked";
                                                                                        } ?>>
                              <label for="female">female</label><br>
                              <input type="radio" id="other" name="gender" value="2" <?php if ($data['gender'] == 2) {
                                                                                            echo "checked";
                                                                                        } ?>>
                             <label for="other">other</label>
                        </div>

                        <div class="text-name2">
                            <label for="tbranch">Branch:</label>

                            <select name="tbranch" id="tbranch">
                                <option value="1" <?php if ($data['branch'] == 1) {
                                                        echo "selected";
                                                    } ?>>CSE</option>
                                <option value="2" <?php if ($data['branch'] == 2) {
                                                        echo "selected";
                                                    } ?>>EEE</option>
                                <option value="3" <?php if ($data['branch'] == 3) {
                                                        echo "selected";
                                                    } ?>>LAW</option>
                                <option value="4" <?php if ($data['branch'] == 4) {
                                                        echo "selected";
                                                    } ?>>ME</option>
                                <option value="5" <?php if ($data['branch'] == 5) {
                                                        echo "selected";
                                                    } ?>>PHARMACY</option>
                                <option value="6" <?php if ($data['branch'] == 6) {
                                                        echo "selected";
                                                    } ?>>CE</option>
                                <option value="7" <?php if ($data['branch'] == 7) {
                                                        echo "selected";
                                                    } ?>>CE</option>


                            </select>
                        </div>


                        <div class="text-name">
                            Phone Number:
                            <input type="text" name="phone" value="<?php echo $data['phone']; ?>"> <br>
                        </div>

                        <div class="text-name2">
                            Password:
                            <input type="password" name="pass" value="<?php echo $data['pass']; ?>"> <br>
                        </div>
                <?php }
                            } ?>
                <input type="submit" name="submit" value="Update Details">
                    </form>
                </div>
            </div>
        </div>

    </body>

    </html>
<?php
} else {
    header("location:teachers.php?error=!Some Missing Information.");
}
?>