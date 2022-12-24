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
    <title>HOME</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>

<body class="bg-dark">
    <div class="container bg-warning my-5 rounded">
        <p class="fs-1 text-center py-5"> Book store </p>
    </div><br><br>

    <?php
    include './component/nav.php';
    ?>
    <br><br><br><br>
    <div class="container">
        <p class="fs-1 text-warning">All Books :    </p>
    </div>

    <?php

    include './component/booklists.php';

    ?>



    <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>