<!DOCTYPE html>
<html>
<head>
	<title>Produk</title>
</head>
<body>
	<?php 
	include_once 'header.php'
	?>

	<div class="panel-content">
		<div class="mainheading-wrapper" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(images/heading1.jpg);">
			<div class="heading-content heading-align-left" style=" padding:100px">
				<div class="heading-text-wrapper">
					<div class="header_text uk-panel">
						<h1 style="font-size: 40px; color: white; text-transform: uppercase;">Produk</h1>
					</div>
				</div>
				<div class="btn-success" style="float: right;width: 60px; height: 30px;">
					<center><a class="button" onclick="history.back()" style="color: white;"><i class="fa fa-arrow-left"></i> BACK </a></center>
				</div>
			</div>
		</div>
	</div>

	<div class="container" style="padding-top: 30px;margin-left: 80px;">
		<span class="divider"><h4 style="color: green;">PRODUK BMM</h4></span>
		<div class="row">
			<div class="col-5">
				<strong>NUTRIGROW® PLUS</strong>
				<ul class="uk-nav-sub">
					<li><a href="tentang-nutrigrow-plus.php">Tentang Nutrigrow® Plus</a></li>
					<li><a href="jenis-nutrigrow-plus.php">Jenis Nutrigrow® Plus</a></li>
					<li><a href="">Manfaat Nutrigrow® Plus</a></li>
					<li><a href="">Kandungan Nutrigrow® Plus</a></li>
					<li><a href="">Dosis / Konsentrasi</a></li>
					<li><a href="">Izin Pendaftaran</a></li>
					<li><a href="">Video</a></li>
				</ul>
			</div>
			<div class="col-4">
				<strong>FITGROW™</strong>
				<ul class="uk-nav-sub">
					<li><a href="tentang-fitgrow.php">Tentang Fitgrow™</a></li>
					<li><a href="jenis-fitgrow.php">Jenis Fitgrow™</a></li>
					<li><a href="">Manfaat Fitgrow™</a></li>
					<li><a href="">Kandungan Fitgrow™</a></li>
					<li><a href="">Dosis / Konsentrasi</a></li>
					<li><a href="">Izin Pendaftaran</a></li>
				</ul>
			</div>

			<?php 
			include_once 'sidebar.php'
			?>
		</div>
	</div>
	<br><br>

	<nav aria-label="breadcrumb" >
		<ol class="breadcrumb"style="padding-left: 100px;">
			<li class="breadcrumb-item">You are here:</li>
			<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item active"><a href="produk.php">Produk</a></li>
		</ol>
	</nav>

	<?php 
	include_once 'footer.php'
	?>

</body>
</html>