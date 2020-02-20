<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?php echo base_url(); ?>assets/image/pp.png" type="image/gif">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>Sistem Seleksi Online</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
			<?php if ($page != "result"):?>
			<a class="navbar-brand" href="<?php echo base_url(); ?>">Sistem Seleksi Online</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php else: ?>
				<div style="height: 40px"></div>
			<?php endif; ?>
			<?php if($page == "beranda"): ?>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ">
						<li class="nav-item active">
							<a class="nav-link active" href="<?php echo base_url() ?>">Beranda <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url() ?>ujian/login">Ujian</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url() ?>seleksi">Seleksi</a>
						</li>
					</ul>
				</div>
			<?php elseif($page == "ujian"):?>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url() ?>">Beranda <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="<?php echo base_url() ?>ujian/login">Ujian</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url() ?>seleksi">Seleksi</a>
						</li>
					</ul>
				</div>
			<?php elseif($page == "seleksi"):?>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url() ?>">Beranda <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="<?php echo base_url() ?>ujian/login">Ujian</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="<?php echo base_url() ?>seleksi">Seleksi</a>
						</li>
					</ul>
				</div>
			<?php endif; ?>
			</div>
		</nav>