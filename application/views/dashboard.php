<div style="display: flex;height: 95vh;width: 100%;justify-content: center;align-items: center;" class="container">
	
	<form method="post" action="">
		<label for="nis">Batas santri divisi Front End </label>
		<br>
		<input type="text" name="frontend" id="frontend" required value="<?php echo $limit["frontend"] ?>">
		<br>
		<label for="nis">Batas santri divisi Back End </label>
		<br>
		<input type="text" name="backend" id="backend" required value="<?php echo $limit["backend"] ?>">
		<br>
		<label for="nis">Batas santri divisi Mobile </label>
		<br>
		<input type="text" name="mobile" id="mobile" required value="<?php echo $limit["mobile"] ?>">
		<br>
		<button type="submit" class="btn btn-success mt-5" name="ubah" id="ubah" >Ubah Limit</button>
		<button type="submit" class="btn btn-danger mt-5" name="logout" id="logout" >Logout</button>
	</form>
</div>