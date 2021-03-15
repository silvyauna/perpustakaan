<div class="table-responsive">
		<table class="table table-striped">
		<a href="tambah_kembali.php" class="btn btn-primary">Tambah Pengembalian</a>
		
		<hr>
			<thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>ID Transaksi</th>
				<th>Nama</th>
				<th>No Buku</th>
				<th>Tgl Pinjam</th>
				<th>Tgl Kembali</th>
				<th>Selisih (Hari)</th>
				<th>Denda</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<tbody>
			<?php
			
				foreach($data_kembali as $row){
			?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $row['idkembali']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['nobuku']; ?></td>
				<td><?php echo $row['tglpinjam']; ?></td>
				<td><?php echo $row['tglkembali']; ?></td>
				<?php
					//$$this->koneksi->query("SELECT * FROM pengembalian WHERE CURDATE() > tgl_kembali");
						
					
					// untuk menghitung selisih hari terlambat
					$t = date_create("2021-02-13");
					$n = date_create(date('Y-m-d'));
					$terlambat = date_diff($t, $n);
					$hari = $terlambat->format("%a");
					// menghitung denda
					$denda = $hari * 1000;
				?>
				<td><?php echo $hari; ?></td>
				<td><?php echo $denda; ?></td>
				<td>
					<a class="btn btn-danger" a href="proses_kembali.php?aksi=hapus_kembali&idkembali=
					<?php echo $row['idkembali']; ?>
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