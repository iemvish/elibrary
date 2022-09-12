<?php
include('config.php');
$query = "SELECT id,book_pic, book_name, book_details, book_author, book_pub, branch, price, quantity FROM books";
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
                <p>Books Details</p>
                <div class="books_table">
                    <table>
                        <tr>
                            <th>Id</th>
                            <th>Book Pic</th>
                            <th>Book Name</th>
                            <th>Book Details</th>
                            <th>Book Author</th>
                            <th>Book Publisher</th>
                            <th>Branch</th>
                            <th>Price</th>
                            <th>Quantity</th>
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
                                    <td><?php echo $data['book_name']; ?> </td>
                                    <td><?php echo $data['book_details']; ?> </td>
                                    <td><?php echo $data['book_pub']; ?> </td>
                                    <td><?php echo $data['branch']; ?> </td>
                                    <td><?php echo $data['price']; ?> </td>
                                    <td><?php echo $data['quantity']; ?> </td>
                                    <td class="u"><a href="<?php echo 'update.php?id='.$data['id']?>"><button class="update">Update</button></a> </td>
                                    <td class="d"><a href="<?php echo 'delete.php?id='.$data['id'];?>"><button class="delete">Delete</button></a></td>
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