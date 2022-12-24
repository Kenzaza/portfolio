<?php
include './database/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>

<body class="bg-dark">
    <div class="container bg-warning my-5 rounded">
        <p class="fs-1 text-center py-5"> Book store | Register </p>
    </div><br><br>

    <?php
    include './component/nav.php';
    ?>
    <br><br>
    <div class="container text-warning">
        <form action="./action/user/adduser.php" method="post">
            <label class="form-label">Username :</label>
            <input type="text" name="userName" class="form-control" required><br>
            <label class="form-label">Email :</label>
            <input type="email" name="userEmail" class="form-control" required><br>
            <label class="form-label">Password :</label>
            <input type="password" name="userPassword" class="form-control" required><br><br>
            <button class="btn btn-warning" type="submit">Register</button>
        </form><br><br>
        <p class="fs-5 text-secondary">Already have user? <a class="text-warning" href="./login.php">Login now</a></p>
    </div>




    <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>l