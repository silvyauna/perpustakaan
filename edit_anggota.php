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


end --></head>
<body>
<br><br>
<div class="container">
		<div class="card border-primary text-black mb-3 mx-auto" style="max-width: 850px; justify-content: center;">
		<div class="card-header">
			<h2>Edit Data Anggota</h2>
		</div>
<form action="proses_anggota.php?aksi=edit_anggota" method="post">
<?php
include "koneksi.php";
$db = new database();
$idanggota = $_GET['idanggota'];
if(!is_null($idanggota)){
	$data_anggota = $db->ambil_data_anggota($idanggota);
}else{
	header("Location:tampil_anggota.php");
}
?>
<div class="container">
	<div class="row">
	<div class="col-sm">
	<br>
	<input type="hidden" name="idanggota" value="<?php echo $idanggota; ?>">
		<div class="form-group row justify-content-md-center">
		<label for="nis" class="col-sm-2 col-form-label">NIS</label>
		<div class="col-sm-4">
		<input type="text" id="nis" class="form-control" value="<?php echo $data_anggota['nis']; ?>" name="nis" required>
		</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
		<label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
		<div class="col-sm-4">
		<input type="text" id="nama" class="form-control" value="<?php echo $data_anggota['nama']; ?>" name="nama" required>
		</div>
		</div>

		<div class="form-group row justify-content-md-center">
			<label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
				<div class="col-sm-4">
					<select name="kelas" class="custom-select custom-select-sm">
						<?php $kelas = $data_anggota['kelas']; ?>
							<option value="1" <?php if($kelas=="1"){echo "selected";} ?>>X</option>
							<option value="2" <?php if($kelas=="2"){echo "selected";} ?>>XI</option>
							<option value="3" <?php if($kelas=="3"){echo "selected";} ?>>XII</option>
					</select>
		</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
			<label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
				<div class="col-sm-4">
					<select name="jurusan" class="custom-select custom-select-sm">
						<?php $jurusan = $data_anggota['jurusan']; ?>
							<option value="AK" <?php if($jurusan=="AK"){echo "selected";} ?>>Akutansi</option>
							<option value="AP" <?php if($jurusan=="AP"){echo "selected";} ?>>Administrasi Perkantoran</option>
							<option value="PM" <?php if($jurusan=="PM"){echo "selected";} ?>>Pemasaran</option>
							<option value="UPW" <?php if($jurusan=="UPW"){echo "selected";} ?>>Usaha Perjalanan Wisata</option>
							<option value="MM" <?php if($jurusan=="MM"){echo "selected";} ?>>Multimedia</option>
							<option value="RPL" <?php if($jurusan=="RPL"){echo "selected";} ?>>Rekayasa Perangkat Lunak</option>
							<option value="BC" <?php if($jurusan=="BC"){echo "selected";} ?>>Broadcasting</option>
					</select>
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