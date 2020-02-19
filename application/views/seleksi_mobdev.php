<div style="display: flex;margin-top: 100px;justify-content: center;align-items: center;flex-direction: column;margin-bottom: 100px">
	<h1>Mobile Division</h1>
	<div class="container ">
		<a href="<?php echo base_url() ?>seleksi"><p  class="mb-3"><=Kembali</p></a>
		<table class="table ">
			<thead class="thead-dark">
				<tr>
					<th scope="col">No</th>
					<th scope="col">Nama Lengkap</th>
					<th scope="col">Nilai</th>
				</tr>
			</thead>
			<tbody>
				<?php $no_urut = 1 ?>
				<?php foreach ($data_mobile as $value):?>
					<tr>
						<td><?php echo $no_urut ?></td>
						<td><?php echo $value["nama_lengkap"] ?></td>
						<td><?php echo $value["nilai_ujian"] ?></td>
					</tr>	
					<?php $no_urut++ ?>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>