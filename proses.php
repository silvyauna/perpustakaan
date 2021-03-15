<?php
include "koneksi.php";
$db = new database();

$aksi = $_GET['aksi'];
	if($aksi == "tambah_user"){
		$db->input_user($_POST['username'],$_POST['password'],$_POST['tipe']);
			header("location:users.php");
	}else if($aksi == "edit_user"){
			$db->edit_user($_POST['iduser'],$_POST['username'],$_POST['password'],$_POST['tipe']);
				header("location:users.php");
		}else if($aksi == "hapus_user"){
			$db->hapus_user($_GET['iduser']);
				header("location:users.php");
		}else if($aksi == "cek_user"){
			$db->cek_user($_POST['username']);
		}
?>