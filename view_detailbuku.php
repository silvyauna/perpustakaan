		<div class="table-responsive">
		<table class="table table-striped">
		<a href="tambah_detailbuku.php" class="btn btn-primary">Tambah Detail Buku</a>
		
		<hr><hr>
			<thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>No Buku</th>
				<th>ID Buku</th>
				<th>Status</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<tbody>
			<?php
				foreach($data_detailbuku as $row){
			?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $row['nobuku']; ?></td>
				<td><?php echo $row['idbuku']; ?></td>
				<?php
					$cekstatus = $row['status'];
					if($cekstatus=='Dipinjam'){
						$status="Dipinjam";
					}else{
						$status="Tersedia";
					}
				?>
				<td><?php echo $status; ?></td>
				<td>
					<a class="btn btn-warning" a href="edit_detailbuku.php?nobuku=<?php echo $row['nobuku']; ?>">Edit</a>
					<a class="btn btn-danger" a href="proses_detailbuku.php?aksi=hapus_detailbuku&nobuku=
					<?php echo $row['nobuku']; ?>
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
	