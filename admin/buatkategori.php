<?php
require 'sistem/buatkategori.php';

if( isset($_POST['create']) ) {
    if(buatkategori($_POST) > 0 ) {
        echo"
        <script>
        alert('kategori berhasil dibuat');
        document.location.href = 'daftarkategori.php';
        </script>
        ";
    }else {
        echo"
        <script>
        alert('gagal dibuat');
        document.location.href = 'daftarkategori.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Kategori</title>
    <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <!-- header -->
    <?php include 'include/header.php' ?>
    <br>
    <h1 class="mt-5" style="text-decoration:underline;">Create kategori</h1>
    <!-- end header -->

    <!-- form -->
    <br>
    <?php include 'include/inputkategori.php' ?>
    <!-- end form -->
    </div>
    


<script src="../asset/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../asset/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script>
    const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})
</script>
</body>
</html>