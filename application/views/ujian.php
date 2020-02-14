<div style="display: flex;height: 95vh;width: 100%;justify-content: center;align-items: center">
	<form method="post" action="">

		<div class="form-group">
			<label for="kode">Masukan kode ujian</label>
			<input type="password" class="form-control" id="kode" name="kode">
		</div>
		<p style="color: red ;font-size: 12"><?php echo $alert ?></p>
		<button type="submit" class="btn btn-primary" name="masuk">Masuk</button>
	</form>
</div>