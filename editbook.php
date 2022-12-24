<?php
include './database/config.php';
session_start();        

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $bookId = $_GET['bookId'];
    $sql = "SELECT * FROM book WHERE bookId = $bookId";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editbook</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container bg-warning my-5 rounded">
        <p class="fs-1 text-center py-5"> Book store | Edit </p>
    </div><br><br>

    <?php
    include './component/nav.php';
    ?>
    <br><br>
<div class="container">
    <form action="./action/book/update.php" method="GET">
    <label class="form-label">Book Title</label>
    <input type="text" name="bookTitle" class="form-control" value="<?php echo $row['bookTitle']; ?>" ><br>
    <label class="form-label">Book Numbers</label>
    <input type="number" name="bookNum" class="form-control" value="<?php echo $row['bookNum']; ?>"><br>
    <input type="number" name="bookId" class="form-control" value="<?php echo $row['bookId']; ?>" hidden><br>
    <button class="btn btn-primary" type="submit">Edit</button>
    </form>
</div>




    <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>