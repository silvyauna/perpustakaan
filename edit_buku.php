<html>
<head><title>Data Buku</title>
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


end --></head>
<body>
<br><br>
<div class="container">
		<div class="card border-primary text-black mb-3 mx-auto" style="max-width: 850px; justify-content: center;">
		<div class="card-header">
			<h2>Edit Data Buku</h2>
		</div>
<form action="proses_buku.php?aksi=edit_buku" method="post">
<?php
include "koneksi.php";
$db = new database();
$idbuku = $_GET['idbuku'];
if(!is_null($idbuku)){
	$data_buku = $db->ambil_data_buku($idbuku);
}else{
	header("Location:tampil_buku.php");
}
?>
<div class="container">
	<div class="row">
	<div class="col-sm">
	<br>
	
		<input type="hidden" id="idbuku" class="form-control read-only" value="<?php echo $data_buku['idbuku']; ?>" name="idbuku" required>
		
		<div class="form-group row justify-content-md-center">
		<label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
		<div class="col-sm-4">
		<input type="text" id="judul" class="form-control" value="<?php echo $data_buku['judul']; ?>" name="judul" required>
		</div>
		</div>

		<div class="form-group row justify-content-md-center">
		<label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
		<div class="col-sm-4">
		<input type="text" id="pengarang" class="form-control" value="<?php echo $data_buku['pengarang']; ?>" name="pengarang" required>
		</div>
		</div>	
	
		<div class="form-group row justify-content-md-center">
		<label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
		<div class="col-sm-4">
		<input type="text" id="penerbit" class="form-control" value="<?php echo $data_buku['penerbit']; ?>" name="penerbit" required>
		</div>
		</div>
	
		<div class="form-group row justify-content-md-center">
		<label for="jumlahbuku" class="col-sm-2 col-form-label">Jumlah Buku</label>
		<div class="col-sm-4">
		<input type="text" id="jumlahbuku" class="form-control" value="<?php echo $data_buku['jumlahbuku']; ?>" name="jumlahbuku" required>
		</div>
		</div>
	
	<tr>
		<div class="row justify-content-md-center">
		<input type="submit" value="Update" class="btn btn-info">
	</tr>
</form>
</table>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</center>
</body>
</html>