<?php
include "koneksi.php";
$db = new database();

$aksi = $_GET['aksi'];
	if($aksi == "tambah_detailbuku"){
		$db->input_detailbuku($_POST['nobuku'],$_POST['idbuku'],$_POST['status']);
			header("location:detailbuku.php");
	}else if($aksi == "edit_detailbuku"){
		$db->edit_detailbuku($_POST['nobuku'],$_POST['idbuku'],$_POST['status']);
			header("location:detailbuku.php");
	}else if($aksi == "hapus_detailbuku"){
		$db->hapus_detailbuku($_GET['nobuku']);
			header("location:detailbuku.php");
	}else if($aksi == "cek_detailbuku"){
		$db->cek_detailbuku($_POST['nobuku']);
	}
?>