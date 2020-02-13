<div style="display: flex;height: 95vh;width: 100%;justify-content: flex-start ;align-items: center">
	<form method="post" action="">
		<div class="form-group ml-5" >
			<label for="namalengkap">Nama Lengkap</label>
			<input type="text" class="form-control" id="namalengkap" name="namalengkap">
		</div>
		<div class="form-group ml-5" >
			<label for="asal">Asal</label>
			<input type="text" class="form-control" id="asal" name="asal">
		</div>
		<div class="form-group ml-5" >
			<label >Pilihan Jurusan 1</label>
			<br>
			<input type="radio" id="mobdev" name="jurusan1" value="Mobile Division">
			<label for="mobdev">Mobile Division</label>
			<input type="radio" id="frontdev" name="jurusan1" value="Front End Division">
			<label for="frontdev">Front End Division</label>
			<input type="radio" id="backdev" name="jurusan1" value="Back End Division">
			<label for="backdev">Back End Division</label>
		</div>
		<div class="form-group ml-5" >
			<label for="kode">Pilihan Jurusan 2</label>
			<input type="text" class="form-control" id="kode" name="kode">
		</div>
		<button type="submit" class="btn btn-primary ml-5" name="masuk">Masuk</button>
	</form>
</div>