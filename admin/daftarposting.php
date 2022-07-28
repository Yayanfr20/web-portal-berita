<?php
require 'sistem/query.php';
$allposting = query("SELECT * FROM postingan"); 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Postingan</title>
    <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <!-- header -->
    <?php include 'include/header.php'; ?>
    <!-- end header -->
<br><br>
    <!-- postingan -->
    <?php include 'include/tableposting.php' ?>
    <!-- end postingan -->


<script src="../asset/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../asset/sweetalert2/dist/sweetalert2.all.min.js"></script>
</body>
</html>