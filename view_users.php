		<div class="table-responsive">
		<table class="table table-striped">
		<a href="tambah_user.php" class="btn btn-primary">Tambah User</a>
		
		<hr><hr>
			<thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>ID User</th>
				<th>Username</th>
				<th>Login Terakhir</th>
				<th>Tipe</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<tbody>
			<?php
				foreach($data_users as $row){
			?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $row['iduser']; ?></td>
				<td><?php echo $row['username']; ?></td>
				<td><?php echo $row['lastlogin']; ?></td>
				<?php
					$cektype = $row['type'];
					if($cektype=='A'){
						$typenya="Admin";
					}else{
						$typenya="User";
					}
				?>
				<td><?php echo $typenya; ?></td>
				<td>
					<a class="btn btn-warning" a href="edit_user.php?iduser=<?php echo $row['iduser']; ?>">Edit</a>
					<a class="btn btn-danger" a href="proses.php?aksi=hapus_user&iduser=
					<?php echo $row['iduser']; ?>
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
	