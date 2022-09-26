<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/dashstyle.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/all_books.css">
    <style>
        .main-dash {
            height: 90.5vh;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- header -->
            <?php if (isset($_SESSION['email'])) {
                include('dash_header.php');
            } else {
                include('header.php');
            } ?>
            <?php if (isset($_SESSION['email'])) {
                include('dash_sidebar.php');
            } ?>
            <!-- main dashboard -->
            <div class="main-dash" <?php if(!isset($_SESSION['email'])){  echo "style='height:100vh;'";}?>>
                <div class="row">
                    <h1>BOOKS</h1>
                    <table>
                        <tr>
                            <th>Sr.no.</th>
                            <th>Book</th>
                            <th>Book Name</th>
                            <th>Book Details</th>
                            <th>Book Author</th>
                            <th>Book Publisher</th>
                            <th>Branch</th>
                            <th>Price</th>
                            <?php if (isset($_SESSION["email"])) { ?>
                                <th>Status</th>
                                <th>Notified</th>
                            <?php } ?>
                        </tr>
                        <?php
                        include('config.php');
                        $query = "SELECT srno,book_pic, book_name, book_details, book_author, book_pub, branch, price, quantity FROM books";
                        $result = mysqli_query($conn, $query);
                        if (mysqli_num_rows($result) > 0) {
                            $sn = 1;
                            while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <td><?php echo $sn; ?></td>
                                    <td><img src=" <?php echo $data['book_pic']; ?>" height="100px" width="100px"></td>
                                    <td><?php echo $data['book_name']; ?> </td>
                                    <td><?php echo $data['book_details']; ?></td>
                                    <td><?php echo $data['book_author']; ?></td>
                                    <td><?php echo $data['book_pub']; ?></td>
                                    <td><?php echo $data['branch']; ?></td>
                                    <td><?php echo $data['price']; ?></td>
                                    <?php
                                    if (isset($_SESSION["email"])) { ?>
                                        <td>
                                            <h4>Not Available</h4>
                                        </td>
                                        <td>
                                            <button>Get me notify</button>
                                        </td>
                                    <?php  }
                                    ?>

                                </tr>
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