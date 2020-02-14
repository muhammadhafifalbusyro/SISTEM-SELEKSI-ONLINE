
<div style="display: flex;width: 100%;justify-content: flex-start ;align-items: center; padding-top: 100px;padding-bottom: 100px">
	<form method="post" action="<?php echo base_url() ?>ujian/result">
		<div class="form-group ml-5" >
			<label for="namalengkap">Nama Lengkap</label>
			<input type="text" class="form-control" id="namalengkap" name="namalengkap" required autocomplete="off">
		</div>
		<div class="form-group ml-5" >
			<label >Pilihan Jurusan 1</label>
			<br>
			<input type="radio" id="mobdev" name="jurusan1" value="Mobile Division"required>
			<label for="mobdev">Mobile Division</label>
			<input type="radio" id="frontdev" name="jurusan1" value="Front End Division">
			<label for="frontdev">Front End Division</label>
			<input type="radio" id="backdev" name="jurusan1" value="Back End Division">
			<label for="backdev">Back End Division</label>
		</div>
		<div class="form-group ml-5" >
			<label >Pilihan Jurusan 2</label>
			<br>
			<input type="radio" id="mobdev" name="jurusan2" value="Mobile Division"required>
			<label for="mobdev">Mobile Division</label>
			<input type="radio" id="frontdev" name="jurusan2" value="Front End Division">
			<label for="frontdev">Front End Division</label>
			<input type="radio" id="backdev" name="jurusan2" value="Back End Division">
			<label for="backdev">Back End Division</label>
		</div>
		<br>
		<h1 class="ml-5">SOAL UJIAN</h1>
		<br>
		<div class="form-group ml-5" >
			<label style="font-weight: bold;">1) Hasil dari 15 + 6 : ( -3 ) + 5 x ( -2 ) adalah ...</label>
			<br>
			<input type="radio" id="a" name="soal1" value=1 required>
			<label for="a">A) 3</label><br>
			<input type="radio" id="b" name="soal1" value=0>
			<label for="b">B) 4</label><br>
			<input type="radio" id="c" name="soal1" value=0>
			<label for="c">C) 5</label><br>
		</div>
		<div class="form-group ml-5" >
			<label style="font-weight: bold;">2) Hasil dari 2 - 5 x ( -3 ) - 2 x 2  adalah ...</label>
			<br>
			<input type="radio" id="a" name="soal2" value=0 required>
			<label for="a">A) 11</label><br>
			<input type="radio" id="b" name="soal2" value=0>
			<label for="b">B) 12</label><br>
			<input type="radio" id="c" name="soal2" value=1>
			<label for="c">C) 13</label><br>
		</div>
		<div class="form-group ml-5" >
			<label style="font-weight: bold;">3) Hasil dari (−20) + 7 x 5 − 18 : (−3) adalah ...</label>
			<br>
			<input type="radio" id="a" name="soal3" value=0 required>
			<label for="a">A) -21</label><br>
			<input type="radio" id="b" name="soal3" value=1>
			<label for="b">B) 21</label><br>
			<input type="radio" id="c" name="soal3" value=0>
			<label for="c">C) -31</label><br>
		</div>
		<div class="form-group ml-5" >
			<label style="font-weight: bold;">4) Hasil dari −6 + (6 : 2) − ((−3) x 3) adalah ...</label>
			<br>
			<input type="radio" id="a" name="soal4" value=0 required>
			<label for="a">A) 0</label><br>
			<input type="radio" id="b" name="soal4" value=0>
			<label for="b">B) 3</label><br>
			<input type="radio" id="c" name="soal4" value=1>
			<label for="c">C) 6</label><br>
		</div>
		<div class="form-group ml-5" >
			<label style="font-weight: bold;">5) Hasil dari (−18 + 30) : (−3 − 1) adalah ...</label>
			<br>
			<input type="radio" id="a" name="soal5" value=1 required>
			<label for="a">A) 3</label><br>
			<input type="radio" id="b" name="soal5" value=0>
			<label for="b">B) -3</label><br>
			<input type="radio" id="c" name="soal5" value=0>
			<label for="c">C) 2</label><br>
		</div>
		<div class="form-group ml-5" >
			<label style="font-weight: bold;">6) Bentuk paling sederhana dari 5x + 3y - 2 - x + y + 2 adalah ...</label>
			<br>
			<input type="radio" id="a" name="soal6" value=0 required>
			<label for="a">A) 4x + 3y</label><br>
			<input type="radio" id="b" name="soal6" value=1>
			<label for="b">B) 4x + 4y</label><br>
			<input type="radio" id="c" name="soal6" value=0>
			<label for="c">C) 4x + 3y - 4</label><br>
		</div>
		<div class="form-group ml-5" >
			<label style="font-weight: bold;">7) Bentuk paling sederhana dari 6a - 3b + a + 4b adalah ...</label>
			<br>
			<input type="radio" id="a" name="soal7" value=1 required>
			<label for="a">A) 7a + b</label><br>
			<input type="radio" id="b" name="soal7" value=0>
			<label for="b">B) 7a + 2b</label><br>
			<input type="radio" id="c" name="soal7" value=0>
			<label for="c">C) 7a - b</label><br>
		</div>
		<div class="form-group ml-5" >
			<label style="font-weight: bold;">8) Bentuk paling sederhana dari 4 (2x - 5y) - 5 (x - 3y) adalah ...</label>
			<br>
			<input type="radio" id="a" name="soal8" value=0 required>
			<label for="a">A) 3x + 5y</label><br>
			<input type="radio" id="b" name="soal8" value=0>
			<label for="b">B) -3x - 5y</label><br>
			<input type="radio" id="c" name="soal8" value=1>
			<label for="c">C) 3x - 5y</label><br>
		</div>
		<div class="form-group ml-5" >
			<label style="font-weight: bold;">9) Jika P = 4x<sup>2</sup> + 3x dan Q = 5x - x<sup>2</sup> maka P - 2Q adalah ...</label>
			<br>
			<input type="radio" id="a" name="soal9" value=0 required>
			<label for="a">A) 2x<sup>2</sup> - 7x</label><br>
			<input type="radio" id="b" name="soal9" value=0>
			<label for="b">B) 4x<sup>2</sup> - 7x</label><br>
			<input type="radio" id="c" name="soal9" value=1>
			<label for="c">C) 6x<sup>2</sup> - 7x</label><br>
		</div>
		<div class="form-group ml-5" >
			<label style="font-weight: bold;">10) Bentuk sederhana dari ( -3x -y )<sup>2</sup> - ( 2y + 2x )<sup>2</sup> adalah ...</label>
			<br>
			<input type="radio" id="a" name="soal10" value=1 required>
			<label for="a">A) 5x<sup>2</sup> - 2xy - 3y<sup>2</sup></label><br>
			<input type="radio" id="b" name="soal10" value=0>
			<label for="b">B) 5x<sup>2</sup> - 2xy + 3y<sup>2</sup></label><br>
			<input type="radio" id="c" name="soal10" value=0>
			<label for="c">C) -5x<sup>2</sup> - 2xy - 3y<sup>2</sup></label><br>
		</div>
		<button type="submit" class="btn btn-primary ml-5" name="add" id="add" >Selesai</button>
		<!-- <script type="text/javascript">
			window.setTimeout(function() {
				document.getElementById("add").click();
				window.location.replace("http://www.w3schools.com");
			}, 5000)
		</script>
 -->	</form>
</div>