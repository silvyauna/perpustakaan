		<div class="table-responsive">
		<table class="table table-striped">
		<a href="tambah_buku.php" class="btn btn-primary">Tambah Buku</a>
		
		<hr><hr>
			<thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>ID Buku</th>
				<th>Judul</th>
				<th>Pengarang</th>
				<th>Penerbit</th>
				<th>Jumlah Buku</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<tbody>
			<?php
				foreach($data_buku as $row){
			?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $row['idbuku']; ?></td>
				<td><?php echo $row['judul']; ?></td>
				<td><?php echo $row['pengarang']; ?></td>
				<td><?php echo $row['penerbit']; ?></td>
				<td><?php echo $row['jumlahbuku']; ?></td>
				<td>
					<a class="btn btn-warning" a href="edit_buku.php?idbuku=<?php echo $row['idbuku']; ?>">Edit</a>
					<a class="btn btn-danger" a href="proses_buku.php?aksi=hapus_buku&idbuku=
					<?php echo $row['idbuku']; ?>
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
	