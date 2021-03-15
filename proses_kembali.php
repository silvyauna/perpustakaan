<?php
include "koneksi.php";
$db = new database();

$aksi = $_GET['aksi'];
	if($aksi == "tambah_kembali"){
		$db->input_kembali($_POST['idkembali'],$_POST['idpinjam'],$_POST['nama'],$_POST['nobuku'],$_POST['tgl_kembali'],$_POST['denda']);
			header("location:kembali.php");
	}else if($aksi == "edit_kembali"){
			$db->edit_kembali($_POST['idkembali'],$_POST['idpinjam'],$_POST['nama'],$_POST['nobuku']);
				header("location:kembali.php");
		}else if($aksi == "hapus_kembali"){
			$db->hapus_kembali($_GET['idkembali']);
				header("location:kembali.php");
		}else if($aksi == "cek_idpinjam"){
			$db->cek_idpinjam($_POST['idpinjam']);
		}
?>