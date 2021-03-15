<html>
<head><title>Tambah Buku</title>
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
<style>
	body
	{
		background-image: url('bg2.jpg');
		background-repeat: no-repeat;
		background-size:cover;
	}
</style>
</head>
<body>
<br><br>
<div class="container">
	<div class="card border-primary text-black mb-3 mx-auto" style="max-width: 850px; justify-content: center;">
	<div class="card-header">

<h2>Tambah Data Buku</h2>
<center>
</div>
		<div class="card-body">
		<div class="row">
		<div class="col-sm">
		
		<form action="proses_buku.php?aksi=tambah_buku" method="post">

		<div class="form-group row justify-content-md-center">
		<label for="idbuku" class="col-sm-2 col-form-label">ID Buku</label>
			<div class="col-6 col-sm-4">
			<div id="error_msg" align="center"></div>
			<input type="text" class="form-control" id="idbuku" value="" name="idbuku" autocomplete="off" required="">
			<div id="result"></div>
			<div class="invalid-feedback">
				Silakan Masukkan ID Buku Anda
			</div>
			<span></span>
			</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
		<label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
			<div class="col-6 col-sm-4">
			<div id="error_msg" align="center"></div>
			<input type="text" class="form-control" id="judul" value="" name="judul" autocomplete="off" required>
			<div class="invalid-feedback">Silahkan Masukan Judul Buku Anda</div>
			<span></span>
		</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
		<label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
			<div class="col-6 col-sm-4">
			<div id="error_msg" align="center"></div>
			<input type="text" class="form-control" id="pengarang" value="" name="pengarang" autocomplete="off" required>
			<div class="invalid-feedback">Silahkan Masukan Pengarang Buku Anda</div>
			<span></span>
		</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
		<label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
			<div class="col-6 col-sm-4">
			<div id="error_msg" align="center"></div>
			<input type="text" class="form-control" id="penerbit" value="" name="penerbit" autocomplete="off" required>
			<div class="invalid-feedback">Silahkan Masukan Penerbit Buku Anda</div>
			<span></span>
		</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
		<label for="jumlahbuku" class="col-sm-2 col-form-label">Jumlah Buku</label>
			<div class="col-6 col-sm-4">
			<div id="error_msg" align="center"></div>
			<input type="text" class="form-control" id="jumlahbuku" value="" name="jumlahbuku" autocomplete="off" required>
			<div class="invalid-feedback">Silahkan Masukan Jumlah Buku Anda</div>
			<span></span>
		</div>
		</div>
		
	<tr>
		<div class="row justify-content-md-center">
		<input class="btn btn-success" style="margin-right:2%;" action="action" onclick="window.history.go(-1); return false;" type="submit" value="&lt;&lt; Kembali">
		<input type="submit" value="Simpan" class="btn btn-info">
		</div>
	</tr>
</table>
<form>
</center>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>