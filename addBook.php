<?php
include './database/config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddBook</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>

<body class="bg-dark">
    <div class="container bg-warning my-5 rounded">
        <p class="fs-1 text-center py-5"> Book store | Sell </p>
    </div><br><br>

    <?php
    include './component/nav.php';
    ?>
    <br><br><br><br><br>
<div class="container text-warning">
    <form action="./action/book/addbook.php" method="post">
    <label class="form-label">Book Title :</label>
    <input type="text" name="bookTitle" class="form-control" required><br>
    <label class="form-label">Numbers of books :</label>
    <input type="number" name="bookNum" class="form-control" required><br><br>
    <button class="btn btn-warning" type="submit">Add Book</button>
    </form>
</div>




    <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>l