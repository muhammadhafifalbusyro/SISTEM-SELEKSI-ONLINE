<div style="display: flex;height: 100vh;width: 100%;justify-content: center;align-items: center;flex-direction: column;" class="container" >
	
	<h1>Halaman Admin</h1><br>
	<form method="post" action="">
		<div style="display: flex;flex-direction: row;width: 100%;justify-content: center;align-items: ;">
			<div class="mr-5">
				<label for="frontend">Limit Front End </label>
				<br>
				<input type="text" name="frontend" id="frontend" required value="<?php echo $limit["frontend"] ?>">
				<br>
				<label for="backend">Limit Back End </label>
				<br>
				<input type="text" name="backend" id="backend" required value="<?php echo $limit["backend"] ?>">
				<br>
				<label for="mobile">Limit Mobile </label>
				<br>
				<input type="text" name="mobile" id="mobile" required value="<?php echo $limit["mobile"] ?>">
				<br>

			</div>
			<div class="ml-5">
				<label for="admin">Kode masuk admin </label>
				<br>
				<input type="text" name="admin" id="admin" required value="<?php echo $kode_masuk["kode_admin"] ?>">
				<br>
				<label for="santri">Kode masuk santri </label>
				<br>
				<input type="text" name="santri" id="santri" required value="<?php echo $kode_masuk["kode_santri"] ?>">
				<br>

			</div>
		</div>
		<div style="display: flex;width: 100%;justify-content: flex-end;">
			<button type="submit" class="btn btn-success mt-5 ml-2" name="ubah" id="ubah" >Ubah Limit</button>
			<button type="submit" class="btn btn-primary mt-5 ml-2" name="ubah_kode" id="ubah_kode" >Ubah Kode</button>
			<button type="submit" class="btn btn-danger mt-5 ml-2" name="logout" id="logout" onclick="confirm('anda yakin untuk logout ?')">Logout</button>
		</div>
	</form>
</div>