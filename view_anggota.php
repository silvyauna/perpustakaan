		<div class="table-responsive">
		<table class="table table-striped">
		<a href="tambah_anggota.php" class="btn btn-primary">Tambah Anggota</a>
		
		<hr><hr>
			<thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>ID Anggota</th>
				<th>NIS</th>
				<th>Nama Lengkap</th>
				<th>Kelas</th>
				<th>Jurusan</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<tbody>
			<?php
				foreach($data_anggota as $row){
			?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $row['idanggota']; ?></td>
				<td><?php echo $row['nis']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<?php
					$cekkelas = $row['kelas'];
					if($cekkelas=='1'){
						$kelas="X";
					}else if($cekkelas=='2'){
						$kelas="XI";
					}else{
						$kelas="XII";
					}
				?>
				<td><?php echo $kelas; ?></td>
				<?php
					$cekjurusan = $row['jurusan'];
					if($cekjurusan=='AK'){
						$jurusan="Akuntansi";
					}else if($cekjurusan=='AP'){
						$jurusan="Administrasi Perkantoran";
					}else if($cekjurusan=='PM'){
						$jurusan="Pemasaran";
					}else if($cekjurusan=='UPW'){
						$jurusan="Usaha Perjalanan Wisata";
					}else if($cekjurusan=='MM'){
						$jurusan="Multimedia";
					}else if($cekjurusan=='RPL'){
						$jurusan="Rekayasa Perangkat Lunak";
					}else{
						$jurusan="Broadcasting";
					}
				?>
				<td><?php echo $jurusan; ?></td>
				<td>
					<a class="btn btn-warning" a href="edit_anggota.php?idanggota=<?php echo $row['idanggota']; ?>">Edit</a>
					<a class="btn btn-danger" a href="proses_anggota.php?aksi=hapus_anggota&idanggota=
					<?php echo $row['idanggota']; ?>
					"onclick='return confirm("Apakah Yakin Ingin Menghapus?")'>Hapus</a>
				</td>
				<?php
				
					}
				?>
				</tr>
				</tbody>
			</table>
			<nav>
				<ul class="pagination justify-content-center">
					<li class="page-item">
						<a class="page-link" <?php if($halaman > 1) {echo "href='?halaman=$previous'";} ?>>Previous</a>
					</li>
					<?php
					for($x=1;$x<=$total_halaman;$x++){
						?>
						<li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
						<?php
					}
					?>
					<li class="page-item">
						<a class="page-link" <?php if($halaman < $total_halaman) {echo "href='?halaman=$next'";} ?>>Next</a>
					</li>
				</ul>
			</nav>
		</div>
	