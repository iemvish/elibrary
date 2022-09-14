<?php
session_start();
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $files = $_FILES['file'];
    $filename = $files['name'];
    $fileerror = $files['error'];
    $filetmp = $files['tmp_name'];
    $fileext = explode('.',$filename);
    $filecheck = strtolower(end($fileext));
    $fileextstored = array('png','jpg','jpeg');

    if(in_array($filecheck,$fileextstored))
    {
        $destinationfile = 'upload/'.$filename;
        move_uploaded_file($filetmp,$destinationfile);
    }
    $name = $_POST['name'];
    $details = $_POST['details'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $branch = $_POST['branch'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];


    $query = "INSERT into books(book_pic,book_name,book_details,book_author,book_pub,branch,price,quantity) VALUES('$destinationfile','$name','$details','$author','$publisher','$branch','$price','$quantity')";
    $result = mysqli_query($conn, $query) or die('Error querying database.');


    if ($result) {
        echo "add book succesfully";
        header("location:book_display.php");
    } else {
        echo "failed to add book";
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
    <link rel="stylesheet" href="css/mystyle1.css">
    <style>
        form {
            margin: auto 45%;
        }

        dashright {
            float: right;
            width: 85%;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php include('header.php'); ?>
        <div class="mainblock">
            <?php include('sidebar.php'); ?>
            <div class="dashright">
                <form action="" method="post" enctype="multipart/form-data">
                    <h2>Add Book</h2>
                    <div class="textname">
                        Book picture <br>
                        <input type="file" name="file" id="file">
                    </div>

                    <div class="textname">
                        Book Name <br>
                        <input type="text" name="name">
                    </div>

                    <div class="textname">
                        Book Details <br>
                        <textarea name="details" id="" cols="30" rows="5"></textarea>
                    </div>
                    <div class="textname">
                        Book Author <br>
                        <input type="text" name="author">
                    </div>
                    <div class="textname">
                        Book Publisher <br>
                        <input type="text" name="publisher">
                    </div>
                    <div class="textname">
                        Branch<br>
                        <input type="text" name="branch">
                    </div>
                    <div class="textname">
                        Book Price <br>
                        <input type="text" name="price">
                    </div>
                    <div class="textname">
                        Book Quantity <br>
                        <input type="text" name="quantity">
                    </div>
                    <input type="submit" value="Add" name="add">
                </form>
            </div>
        </div>
    </div>
</body>

</html>