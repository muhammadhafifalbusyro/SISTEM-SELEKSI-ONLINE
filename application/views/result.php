<div style="display: flex;height: 95vh;width: 100%;justify-content: center;align-items: center;flex-direction: column;">
	<h1>Data Berhasil Terkirim !</h1><br>
	<?php if(isset($_POST["add"])): ?>
		<div class="container">
		<form method="post" action="">
			<table class="table ">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Nama Lengkap</th>
						<th scope="col">Pilihan Jurusan 1</th>
						<th scope="col">Pilihan Jurusan 2</th>
						<th scope="col">Hasil Ujian</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $nama_lengkap ?></td>
						<td><?php echo $jurusan1 ?></td>
						<td><?php echo $jurusan2 ?></td>
						<td><?php echo $hasil ?></td>
					</tr>
				</tbody>
			</table>
			<button type="submit" class="btn btn-primary mt-5" name="kembali" id="kembali" >Home</button>
		</form>
	</div>
	<?php elseif (!isset($_POST["add"])):?>
		<div class="container">
		<form method="post" action="">
			<table class="table ">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Nama Lengkap</th>
						<th scope="col">Pilihan Jurusan 1</th>
						<th scope="col">Pilihan Jurusan 2</th>
						<th scope="col">Hasil Ujian</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $_SESSION["nama_lengkap"] ?></td>
						<td><?php echo $_SESSION["jurusan1"] ?></td>
						<td><?php echo $_SESSION["jurusan2"] ?></td>
						<td><?php echo $_SESSION["hasil"] ?></td>
					</tr>
				</tbody>
			</table>
			<button type="submit" class="btn btn-primary mt-5" name="kembali" id="kembali" >Home</button>
		</form>
	</div>
	<?php endif; ?>
</div>