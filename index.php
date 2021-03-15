     <!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
    <title>Perpustakaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#03a6f3">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/styles.css">

  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Bootstrap core CSS -->

  <!-- Custom styles for this template -->
</head>

<body>

  

<!-- /.container -->
<!-- Page Content -->
  <div class="container">


    <!-- Page Heading/Breadcrumbs -->
    <br><br><h1 class="mt-4 mb-3">Perpustakaan</h1>
	<br>
	<br>
	
	
	
    <!-- Intro Content -->
    <div class="row">
      <div class="col-lg-6">
        <img class="img-fluid rounded mb-4" src="img/slide1.jpg" alt="">
      </div>
	  <br>
	  
      <div class="col-lg-6">
        <h2>Tentang Perpustakaan</h2>
        <p>Perpustakaan adalah tempat dimana kita mencari berbagai macam buku apapun ada,bisa untuk tempat belajar yang efektif.</p>
        <p>Perpustakaan pun memiliki tempat yang nyaman,tidak hanya untuk membaca buku saja tapi memiliki fasilitas yang begitu mewah untuk belajar,seperti tempat untuk membaca, ada komputer yang bisa dipergunakan untuk mengerjakan tugas disitu.</p>
      </div>
    </div>
    <!-- /.row -->
  </div>
    <br>
	



  
   <!-- Footer -->
  <footer>
  
  	<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand"><font color="white"></a></font>
      <a href="login.php"  type="button" class="btn btn-danger">Log In</a>
    </div>
  </nav>
  <br>
  <br>
  
    <div class="container">
	
    <div class="row">
	
                <div class="col-md-4">
                    <div class="address">
                        <h4>Our Address</h4>
                        <h6>Semanggi, JL. Banjir Kanal No.16
                        Surakarta, Indonesia</h6> 
                        <h6>Call : 800 1234 5678</h6>
                        <h6>Email : info@Perpustakaan.com</h6>
                    </div>
                </div>
				<div class="col-md-3">
                    <div class="navigation">
                        <h4>Help</h4>
                        <ul>
                            <li><a href="">Reading & Visit</a></li>
                            <li><a href="privacy-policy.html">Privacy</a></li>
                            <li><a href="faq.html">FAQ’s</a></li>
                        </ul>
                    </div>
                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <div class="copy-right">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>(C) 2020. All Rights Reserved. Perpustakaan </h5>
                    </div>
                </div>
            </div>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>


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