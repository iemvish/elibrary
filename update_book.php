<?php
if (isset($_REQUEST['srno']) && !empty($_REQUEST['srno'])) {
    include('config.php');
    $id = $_GET['srno'];
    $query = "SELECT book_pic, book_name, book_details, book_author, book_pub, branch, price, quantity FROM books WHERE srno = '$id'";
    $result = mysqli_query($conn, $query);

    if (isset($_REQUEST['submit'])) {
        $files = $_FILES['file'];
        $name = $_POST['name'];
        $details = $_POST['details'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        $branch = $_POST['branch'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];


        $update = "UPDATE books SET book_pic='$files', book_name='$name',book_details='$details',book_author='$author', book_pub='$publisher',branch='$branch', price='$price', quantity='$quantity' WHERE srno='$id'";

        try {
            $result = mysqli_query($conn, $update);
            header("location:book_display.php?msg=Record Updated Successfully.");
        }

        //catch exception
        catch (Exception $e) {
            header("location:book_display.php?error=!OOPs Some Technical Error.");
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
                        <div class="text-name">
                            Book pic <br>
                            <input type="file" name="file" id="file" value="<?php echo $data['book_pic']; ?>"> <br>
                        </div>

                        <div class="textname">
                            Book Name <br>
                            <input type="text" name="name" value="<?php echo $data['book_name']; ?>">
                        </div>

                        <div class="textname">
                            Book Details <br>
                            <textarea name="details" id="" cols="30" rows="5" ><?php echo ($data['book_details']); ?></textarea>
                            
                        </div>
                        <div class="textname">
                            Book Author <br>
                            <input type="text" name="author" value="<?php echo $data['book_author']; ?>">
                        </div>
                        <div class="textname">
                            Book Publisher <br>
                            <input type="text" name="publisher" value="<?php echo $data['book_pub']; ?>">
                        </div>
                        <div class="textname">
                            Branch<br>
                            <input type="text" name="branch" value="<?php echo $data['branch']; ?>">
                        </div>
                        <div class="textname">
                            Book Price <br>
                            <input type="text" name="price" value="<?php echo $data['price']; ?>">
                        </div>
                        <div class="textname">
                            Book Quantity <br>
                            <input type="text" name="quantity" value="<?php echo $data['quantity']; ?>">
                        </div>
                <?php }
                } ?>
                <input type="submit" name="submit" value="Update Details">
        </form>
    </body>

    </html>
<?php
} else {
    header("location:book_display.php?error=!Some Missing Information.");
}
?>