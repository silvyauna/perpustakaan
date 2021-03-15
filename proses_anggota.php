<?php
include "koneksi.php";
$db = new database();

$aksi = $_GET['aksi'];
	if($aksi == "tambah_anggota"){
		$db->input_anggota($_POST['nis'],$_POST['nama'],$_POST['kelas'],$_POST['jurusan']);
			header("location:anggota.php");
	}else if($aksi == "edit_anggota"){
			$db->edit_anggota($_POST['idanggota'],$_POST['nis'],$_POST['nama'],$_POST['kelas'],$_POST['jurusan']);
				header("location:anggota.php");
		}else if($aksi == "hapus_anggota"){
			$db->hapus_anggota($_GET['idanggota']);
				header("location:anggota.php");
		}else if($aksi == "cek_anggota"){
			$db->cek_anggota($_POST['nama']);
		}
?>