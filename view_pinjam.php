<div class="table-responsive">
		<table class="table table-striped">
		<a href="tambah_pinjam.php" class="btn btn-primary">Tambah Peminjaman</a>
		
		<hr>
			<thead>
			<tr>
				<th>No</th>
				<th>ID Pinjam</th>
				<th>NIS</th>
				<th>Nama</th>
				<th>No Buku</th>
				<th>Tgl Pinjam</th>
				<th>Status</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<tbody>
			<?php
				foreach($data_pinjam as $row){
			?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $row['idpinjam']; ?></td>
				<td><?php echo $row['nis']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['nobuku']; ?></td>
				<td><?php echo $row['tglpinjam']; ?></td>
				<?php
					$cekstatus = $row['status'];
					if($cekstatus=='P'){
						$status="Dipinjam";
					}else{
						$status="Dikembalikan";
					}
				?>
				<td><?php echo $status; ?></td>
				<td>
					<a class="btn btn-warning" a href="edit_pinjam.php?idpinjam=<?php echo $row['idpinjam']; ?>">Edit</a>
					<a class="btn btn-danger" a href="proses_pinjam.php?aksi=hapus_pinjam&idpinjam=
					<?php echo $row['idpinjam']; ?>
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