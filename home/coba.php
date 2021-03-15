<?php 

$conn = mysqli_connect('localhost', 'root', '', 'pkk');
$product = mysqli_query($conn, 'SELECT * FROM product');

if(isset($_POST['submit'])){
    $keyword = mysqli_real_escape_string($conn, $_POST['search']);
    $product = mysqli_query($conn, "SELECT * FROM product WHERE product_name LIKE '%$keyword%' ");
}


?>




<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css?v=1">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
    <style>
    .navbar button.btn{
        margin-bottom: 5px;
        margin-left: 32px;
        margin-top: -10px;
    }
    </style>
    
  <title>Perpus Online</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">E-Library</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../store.php">Novel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../komik.php">Komik</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../storee.php">Pendidikan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="brand">
        <h1 class="new-prod">Novel</h1>
        <hr class="ln-prod">

        <?php while($row = mysqli_fetch_assoc($product)) : ?>

        <div class="prod">
            <a href="product.php?id=<?= $row['product_id'] ?>"><img src="football/<?= $row['product_image'] ?>"></a>
            <h5><?= $row['product_name'] ?></h5>
            <p class="price">Rp. <?= $row['product_price'] ?></p>
        </div>
        <?php endwhile; ?>
    </div>
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script src="js/jquery-slim.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.btn').click(function(){
                $('.sidebar').toggleClass('active');
            });
            $('.hide-btn').click(function(){
                $('.sidebar').removeClass('active');
                $('.login').removeClass('active');
                $('.box').removeClass('active');
            });
            $('.login-btn').click(function(){
                $('.login').toggleClass('active');
                $('.sidebar').removeClass('active');
                $('.box').addClass('active');
            });
        });

    </script>

</body>
</html>