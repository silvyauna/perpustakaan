<?php
include "koneksi.php";
$db = new database();

$aksi = $_GET['aksi'];
	if($aksi == "tambah_buku"){
		$db->input_buku($_POST['idbuku'],$_POST['judul'],$_POST['pengarang'],$_POST['penerbit'],$_POST['jumlahbuku']);
			header("location:buku.php");
	}else if($aksi == "edit_buku"){
			$db->edit_buku($_POST['idbuku'],$_POST['judul'],$_POST['pengarang'],$_POST['penerbit'],$_POST['jumlahbuku']);
				header("location:buku.php");
		}else if($aksi == "hapus_buku"){
			$db->hapus_buku($_GET['idbuku']);
				header("location:buku.php");
		}else if($aksi == "cek_buku"){
			$db->cek_buku($_POST['judul']);
		}
?>