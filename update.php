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
        $tbranch = $_REQUEST['branch'];
        $phone = $_REQUEST['phone'];
        $pass = $_REQUEST['pass'];
        $update = "UPDATE users SET fullName='$tname', email='$email',gender='$gender',branch='$tbranch', phone='$phone',pass='$pass' WHERE srno='$id'";

        try {
            $result = mysqli_query($conn, $update);
            header("location:teachers.php?msg=Record Updated Successfully.");
        }

        //catch exception
        catch (Exception $e) {
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
    </head>

    <body>
        <form action="" method="post">
            <h2>Add Teacher</h2>
            <div class="text-name">

                <?php if (mysqli_num_rows($result) > 0) {
                    if ($data = mysqli_fetch_assoc($result)) { ?>

                        Teacher Name: <br>
                        <input type="text" name="fullName" value="<?php echo $data['fullName']; ?>"> <br>
            </div>

            <div class="text-name">
                Email id: <br>
                <input type="email" name="email" value="<?php echo $data['email']; ?>"> <br>
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
                <label for="tbranch">Branch:</label> <br>

                <select name="tbranch" id="tbranch" value="<?php echo $data['branch']; ?>">
                    <option value="CSE">CSE</option>
                    <option value="EEE">EEE</option>
                    <option value="LAW">LAW</option>
                    <option value="ME">ME</option>
                    <option value="PHARMACY">PHARMACY</option>
                    <option value="CE">CE</option>
                    <option value="EE">CE</option>


                </select>
            </div>


            <div class="text-name">
                Phone Number: <br>
                <input type="text" name="phone" value="<?php echo $data['phone']; ?>"> <br>
            </div>

            <div class="text-name">
                Password: <br>
                <input type="password" name="pass" value="<?php echo $data['pass']; ?>"> <br>
            </div>
    <?php }
                } ?>
    <input type="submit" name="submit" value="Update Details">
        </form>
    </body>

    </html>
<?php
} else {
    header("location:teachers.php?error=!Some Missing Information.");
}
?>