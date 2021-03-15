<?php
	include "koneksi.php";
	$db = new database();
	$data_anggota = $db->tampil_anggota();
		
?>

<html>
<head><title>Data Anggota</title>
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
		background-image: url('bg.jpg');
		background-repeat: no-repeat;
		background-size:cover;
	}
</style>
</head>
<body>
<br/>
<div class="table col-md-3">
<a href="halaman_admin.php" class="btn btn-success">Kembali</a>
</div>
	<div class="container">
	 	 <div class="card border-danger mb-3 mx-auto">
	  <div class="card-header bg-secondary">
		<div class="row">
			<div class="col-sm-11 col-xs-3">
			<br/>
			  <h2>Data Anggota</h2>
			</div>
		</div>
	 </div>
		<div class="card-body">
			<?php
				$batas = 10;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;
				$previous = $halaman - 1;
				$next = $halaman + 1;
				$data = $db->tampil_anggota();
				$jumlah_data = $data;
				$total_halaman = ceil($jumlah_data / $batas);
				$data_anggota = $db->tampil_anggota_paging($halaman_awal,$batas);
				$nomor = $halaman_awal+1;
				if($jumlah_data!=0){
					include "view_anggota.php";
				}else{
					echo "<br><br><h3>Data Anda Kosong</h3>";
				}
			?>
		</div>
	</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>