<?php

require_once "includes\header.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Document</title>
</head>
<body>
    <form method="POST" action="addProductsAdmin.php">

        <p>
             <input type="text" name="name"  >
        </p>
             <input type="text" name="description">
        <p>
            <input type="number" name="price">
        </p>
            <input type="submit" value="add">
    </form>


    <?php
//        session_start();
        print_r(($_SESSION['var']) ?? '');
        unset($_SESSION['var']);
    ?>
</body>
</html>

