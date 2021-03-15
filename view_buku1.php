		<div class="table-responsive">
		<table class="table table-striped">
		
		
		<hr><hr>
			<thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>ID Buku</th>
				<th>Judul</th>
				<th>Pengarang</th>
				<th>Penerbit</th>
				<th>Jumlah Buku</th>
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
	