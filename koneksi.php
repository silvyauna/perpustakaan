<?php

date_default_timezone_set("Asia/Jakarta");

	class database{
		var $host 	= "localhost";
		var $uname	= "root";
		var $passw	= "";
		var $db 	= "perpus";
	
		function __construct(){
			$this->koneksi = mysqli_connect(
				$this->host,
				$this->uname,
				$this->passw,
				$this->db);
				
			if(!$this->koneksi){
				echo "koneksi database gagal";
			}
		}
	
		function input_user($username,$password,$tipe){
				mysqli_query($this->koneksi,
				"insert into users (username,password,type)
				values ('$username','$password','$tipe')");
		}
		
		function tampil_user(){
			$query = mysqli_query($this->koneksi,"select * from users");
			$data = $query->num_rows;
			return $data;
		}
		
		function edit_user($iduser,$username,$password,$tipe){
			mysqli_query($this->koneksi,
			"update users set username='$username',password='$password',type='$tipe' where iduser='$iduser'");
		}
		
		function ambil_data_user($iduser){
			$data = mysqli_query($this->koneksi,"select * from users where iduser='$iduser'");
			return $data->fetch_array();
		}
		
		function hapus_user($iduser){
				mysqli_query($this->koneksi,"delete from users where iduser='$iduser'");
		}
		
		function login($username,$password){
			$query = mysqli_query($this->koneksi,"select * from users where username='$username' and password='$password'");
			$data_user = $query->fetch_array();
			$jml = $query->num_rows;
			if($jml == 1){
				setcookie('username', $username, time() + (60*60*24*5),'/');
				setcookie('iduser', $data_user['iduser'], time() + (60*60*24*5),'/');
				$_SESSION['username'] = $username;
				$_SESSION['iduser'] = $data_user['iduser'];
				$_SESSION['type'] = $data_user['type'];
				$_SESSION['is_login'] = TRUE;
				$this->update_lastlogin($data_user['iduser']);
				return TRUE;
			}else{
				return FALSE;
			}
			
		}
		
		function update_lastlogin($iduser){
			$hariini = date("Y-m-d H:i:s");
			$query = mysqli_query($this->koneksi,"update users set lastlogin='$hariini' where iduser='$iduser'");
			return $query;
		}
		
		function logout(){
			$_SESSION[is_login] = FALSE;
			session_start();
			session_unset();
			session_destroy();
			setcookie('username', '', 0, '/');
			setcookie('iduser', '', 0, '/');
			session_destroy();
		}
		
		function tampil_user_paging($awal,$batas){
			$data = mysqli_query($this->koneksi,"select * from users order by lastlogin desc limit $awal,$batas");
			while($row = mysqli_fetch_array($data)){
				$hasil[] = $row;
			}
			$jml = $data->num_rows;
			if ($jml != 0){
				return $hasil;
			}
		}
		
		function input_anggota($nis,$nama,$kelas,$jurusan){
				mysqli_query($this->koneksi,
				"insert into anggota (nis,nama,kelas,jurusan)
				values ('$nis','$nama','$kelas','$jurusan')");
		}
		
		function tampil_anggota(){
			$query = mysqli_query($this->koneksi,"select * from anggota");
			$data = $query->num_rows;
			return $data;
		}
		
		function edit_anggota($idanggota,$nis,$nama,$kelas,$jurusan){
			mysqli_query($this->koneksi,
			"update anggota set nis='$nis',nama='$nama',kelas='$kelas',jurusan='$jurusan' where idanggota='$idanggota'");
		}
		
		function ambil_data_anggota($idanggota){
			$data = mysqli_query($this->koneksi,"select * from anggota where idanggota='$idanggota'");
			return $data->fetch_array();
		}
		
		function hapus_anggota($idanggota){
				mysqli_query($this->koneksi,"delete from anggota where idanggota='$idanggota'");
		}
		
		function tampil_anggota_paging($awal,$batas){
			$data = mysqli_query($this->koneksi,"select * from anggota order by idanggota asc limit $awal,$batas");
			while($row = mysqli_fetch_array($data)){
				$hasil[] = $row;
			}
			$jml = $data->num_rows;
			if ($jml != 0){
				return $hasil;
			}
		}
		
		
		function input_buku($idbuku,$judul,$pengarang,$penerbit,$jumlahbuku){
				mysqli_query($this->koneksi,
				"insert into buku (idbuku,judul,pengarang,penerbit,jumlahbuku)
				values ('$idbuku','$judul','$pengarang','$penerbit','$jumlahbuku')");
		}
		
		function tampil_buku(){
			$query = mysqli_query($this->koneksi,"select * from buku");
			$data = $query->num_rows;
			return $data;
		}
		
		
		function edit_buku($idbuku,$judul,$pengarang,$penerbit,$jumlahbuku){
			mysqli_query($this->koneksi,
			"update buku set idbuku='$idbuku',judul='$judul',pengarang='$pengarang',penerbit='$penerbit',jumlahbuku='$jumlahbuku' where idbuku='$idbuku'");
		}
		
		function ambil_data_buku($idbuku){
			$data = mysqli_query($this->koneksi,"select * from buku where idbuku='$idbuku'");
			return $data->fetch_array();
		}
		
		function hapus_buku($idbuku){
				mysqli_query($this->koneksi,"delete from buku where idbuku='$idbuku'");
		}
		
		function tampil_buku_paging($awal,$batas){
			$data = mysqli_query($this->koneksi,"select * from buku order by idbuku asc limit $awal,$batas");
			while($row = mysqli_fetch_array($data)){
				$hasil[] = $row;
			}
			$jml = $data->num_rows;
			if ($jml != 0){
				return $hasil;
			}
		}
		
		function input_detailbuku($nobuku,$idbuku,$status){
				mysqli_query($this->koneksi,
				"insert into detailbuku (nobuku,idbuku,status)
				values ('$nobuku','$idbuku','$status')");
		}
		
		function tampil_detailbuku(){
			$query = mysqli_query($this->koneksi,"select * from detailbuku");
			$data = $query->num_rows;
			return $data;
		}
		
		function edit_detailbuku($nobuku,$idbuku,$status){
			mysqli_query($this->koneksi,
			"update detailbuku set nobuku='$nobuku',idbuku='$idbuku',status='$status' where nobuku='$nobuku'");
		}
		
		function ambil_data_detailbuku($nobuku){
			$data = mysqli_query($this->koneksi,"select * from detailbuku where nobuku='$nobuku'");
			return $data->fetch_array();
		}
		
		function hapus_detailbuku($nobuku){
				mysqli_query($this->koneksi,"delete from detailbuku where nobuku='$nobuku'");
		}
		
		function tampil_detailbuku_paging($awal,$batas){
			$data = mysqli_query($this->koneksi,"select * from detailbuku order by nobuku asc limit $awal,$batas");
			while($row = mysqli_fetch_array($data)){
				$hasil[] = $row;
			}
			$jml = $data->num_rows;
			if ($jml != 0){
				return $hasil;
			}
		}
		
		function input_pinjam($idpinjam,$nis,$nama,$nobuku,$status){
			$haripinjam = date("Y-m-d");
			mysqli_query($this->koneksi,
				"insert into peminjaman (idpinjam,nis,nama,nobuku,tglpinjam,status)
				values ('$idpinjam','$nis','$nama','$nobuku','$haripinjam','$status')");
		}
		
		function tampil_pinjam(){
			$query = mysqli_query($this->koneksi,"select * from peminjaman");
			$data = $query->num_rows;
			return $data;
		}
		
		function edit_pinjam($idpinjam,$nis,$nama,$nobuku,$status){
			mysqli_query($this->koneksi,
			"update peminjaman set idpinjam='$idpinjam',nis='$nis',nama='$nama',nobuku='$nobuku',status='$status' where idpinjam='$idpinjam'");
		}
		
		function ambil_data_pinjam($idpinjam){
			$data = mysqli_query($this->koneksi,"select * from peminjaman where idpinjam='$idpinjam'");
			return $data->fetch_array();
		}
		
		function hapus_pinjam($idpinjam){
				mysqli_query($this->koneksi,"delete from peminjaman where idpinjam='$idpinjam'");
		}
		
		function tampil_pinjam_paging($awal,$batas){
			$data = mysqli_query($this->koneksi,"select * from peminjaman order by tglpinjam desc limit $awal,$batas");
			while($row = mysqli_fetch_array($data)){
				$hasil[] = $row;
			}
			$jml = $data->num_rows;
			if ($jml != 0){
				return $hasil;
			}
		}
		
		function input_kembali($idkembali,$idpinjam,$nama,$nobuku){
			$hariini = date("Y-m-d H:i:s");
				$tglpinjam = $_POST['tglpinjam'];
				$tglkembali = strtotime("+7 day", strtotime($tglpinjam));
				$tglkembali = date('Y-m-d', $tglkembali);
				
				$t = date_create("2021-02-13");
				$n = date_create(date('Y-m-d'));
				$terlambat = date_diff($t, $n);
				$hari = $terlambat->format("%a");
			
				$denda = $hari * 1000;
				
				mysqli_query($this->koneksi,
				"insert into pengembalian (idkembali,idpinjam,nama,nobuku,tglkembali,denda)
				values ('$idkembali','$idpinjam','$nama','$nobuku','$hariini','$denda')");
		}
		
		function tampil_kembali(){
			
			// untuk menghitung selisih hari terlambat
			$t = date_create("2021-02-13");
			$n = date_create(date('Y-m-d'));
			$terlambat = date_diff($t, $n);
			$hari = $terlambat->format("%a");
			// menghitung denda
			$denda = $hari * 1000;
			
			//$query = mysqli_query($this->koneksi,"select peminjaman.tglpinjam,pengembalian.idkembali,pengembalian.nama,pengembalian.nobuku,pengembalian.tglkembali,pengembalian.denda from peminjaman, pengembalian where peminjaman.idpinjam=pengembalian.idpinjam");
			$query = mysqli_query($this->koneksi,"select * from peminjaman, pengembalian where peminjaman.idpinjam=pengembalian.idpinjam");
			$data = $query->num_rows;
			return $data;
		}
		
		function data_kembali_(){
			$query = mysqli_query($this->koneksi,"select p.idpinjam, p.nis, p.nama, p.nobuku, p.tglpinjam, p.status, k.idkembali, k.idpinjam, k.tglkembali, k.denda from peminjaman p, pengembalian k where p.idpinjam=k.idpinjam");
			while($row = mysqli_fetch_array($query)){
				$hasil[] = $row;
			}
			return $hasil;
		}
		function ambil_nobuku(){
			
			$data = mysqli_query($this->koneksi,"select * from peminjaman order by nobuku");
			while($row = mysqli_fetch_array($data)){
				$hasil[] = $row;
			}
			$jml = $data->num_rows;
			if ($jml != 0){
				return $hasil;
			}
		}

		function nama_pinjam(){
			
			$data = mysqli_query($this->koneksi,"select * from peminjaman order by nama");
			while($row = mysqli_fetch_array($data)){
				$hasil[] = $row;
			}
			$jml = $data->num_rows;
			if ($jml != 0){
				return $hasil;
			}
		}
		
		function hapus_kembali($idkembali){
				mysqli_query($this->koneksi,"delete from pengembalian where idkembali='$idkembali'");
		}
		
		function tampil_kembali_paging($awal,$batas){
			$data = mysqli_query($this->koneksi,"select p.idpinjam, p.nis, p.nama, p.nobuku, p.tglpinjam, p.status, k.idkembali, k.idpinjam, k.tglkembali, k.denda from peminjaman p, pengembalian k where p.idpinjam=k.idpinjam order by k.tglkembali desc limit $awal,$batas");
			while($row = mysqli_fetch_array($data)){
				$hasil[] = $row;
			}
			$jml = $data->num_rows;
			if ($jml != 0){
				return $hasil;
			}
		}
	}	
	
?>