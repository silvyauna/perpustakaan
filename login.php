<?php
session_start();
include "koneksi.php";
$db = new database();

if(isset($_SESSION['is_login'])){
	if($_SESSION['type'] == 'U'){
		header('location:halaman_user.php');
	}else{
		header("location:halaman_admin.php");
	}
}

if(isset($_REQUEST['login'])){
	extract($_REQUEST);
	$login = $db->login($username,$password);
	if($login){
		if($_SESSION['type'] == 'U'){
			header("location: halaman_user.php");
		}else{
			header("location: halaman_admin.php");
		}
	}else{
		header("location:login.php?pesan=gagal");
	}
}
?>
<html>
<head><title>Login</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- versi offline -->
<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
<script type="text/javascript" src="asset/js/bootstrap.js"></script>
<!-- end -->
<!-- versi web

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet"><link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


end -->
</head>

<body>
<div class="container" style="margin-top:5%">
	<div class="card text-center border-danger mb-3 mx-auto" style="max-width: 620px;">
	<div class="card-header bg-info">
		<h2>Perpustakaan</h2>
	</div>
<div class="card-body">
	<?php
		if(isset($_GET['pesan'])){
			if($_GET['pesan']=="gagal"){
				echo "<div class='alert alert-danger'>Username dan Password tidak sesuai !</div>";
			}
		}
	?>
		<div class="row">
			<div class="col-sm">
<form id="login_form">
<h4></h4>
	<div class="form-group row justify-content-md-center">
	
	<label for="username" class="col-sm-2 col-form-label">Username</label>
	<div class="col-6 col-sm-4">
	<div id="error_msg" align="center"></div>
		<input type="text" class="form-control" id="username" value="" name="username" autocomplete="off" required>
	</div>
	</div>
	
	<div class="form-group row justify-content-md-center">
	
	<label for="password" class="col-sm-2 col-form-label">Password</label>
	<div class="col-6 col-sm-4">
	<div id="error_msg_pass" align="center"></div>
		<input type="password" class="form-control" id="password" value="" name="password" required>
	</div>
	</div>
	
	<div class="form-group row justify-content-md-center">
		<input class="btn btn-success" style="margin-right:2%;" action="action" onclick="window.history.go(-1); return false;" type="submit" value="&lt;&lt; Kembali">
		<button class="btn btn-primary" type="submit" name="login">Login</button>	
	</div>
</form>

</div></div></div>
</div>
</div>
<footer class="footer mt-auto py-3">
  <div class="container">
  <center>
    <span class="text-muted">Silvya Una  &copy; 2020</span>
  </center>
  </div>
</footer>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
	
		