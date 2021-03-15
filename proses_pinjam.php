<?php
include "koneksi.php";
$db = new database();

$aksi = $_GET['aksi'];
	if($aksi == "tambah_pinjam"){
		$db->input_pinjam($_POST['idpinjam'],$_POST['nis'],$_POST['nama'],$_POST['nobuku'],$_POST['status']);
			header("location:pinjam.php");
	}else if($aksi == "edit_pinjam"){
			$db->edit_pinjam($_POST['idpinjam'],$_POST['nis'],$_POST['nama'],$_POST['nobuku'],$_POST['status']);
				header("location:pinjam.php");
		}else if($aksi == "hapus_pinjam"){
			$db->hapus_pinjam($_GET['idpinjam']);
				header("location:pinjam.php");
		}else if($aksi == "cek_nis"){
			$db->cek_nis($_POST['nis']);
		}
?>