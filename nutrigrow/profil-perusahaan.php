<!DOCTYPE html>
<html>
<head>
	<title>Profil Perusahaan </title>
</head>
<body style="font-family: sans-serif;">
	<?php
	include_once 'header.php';
	?>

	<div class="panel-content">
		<div class="mainheading-wrapper" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(images/heading1.jpg);">
			<div class="heading-content heading-align-left" style=" padding:100px">
				<div class="heading-text-wrapper">
					<div class="header_text uk-panel">
						<h1 style="font-size: 40px; color: white; text-transform: uppercase;">Profil Perusahaan</h1>
					</div>
				</div>
				<div class="btn-success" style="float: right;width: 60px; height: 30px;">
					<center><a class="button" onclick="history.back()" style="color: white;"><i class="fa fa-arrow-left"></i> BACK </a></center>
				</div>
			</div>
		</div>
	</div>

	<div class="container" style="padding-top: 30px;margin-left: 80px;">
		<div class="row">
			<div class="col-9">
				<table class="table table-bordered">
					<tbody>
						<tr>
							<th scope="col">Nama</th>
							<th scope="col">CV. Berkat Manna Maju, (BMM Group) dan PT. Berkat Mitra Makmur</th>
						</tr>
						<tr>
							<th scope="col">Alamat</th>
							<th scope="col">Martadinata 254A, Jebres, Surakarta, Jawa Tengah – Indonesia</th>
						</tr>
						<tr>
							<th scope="col">Usaha
							</th>
							<th scope="col">Produsen, Distributor Tunggal & Trading</th>
						</tr>
						<tr>
							<th scope="col">Merk Dagang</th>
							<th scope="col">NUTRIGROW®, FITGROW™</th>
						</tr>
						<tr>
							<th scope="col">SIUP
							</th>
							<th scope="col">410541/1091/PK/IX/2010</th>
						</tr>
						<tr>
							<th scope="col">NPWP
							</th>
							<th scope="col">02-304.840.8-526.000</th>
						</tr>
						<tr>
							<th scope="col">Izin Edar DEPTAN
							</th>
							<th scope="col">02.02.2017.099  &  01.03.2017.176 294</th>
						</tr>
						<tr>
							<th scope="col">Email
							</th>
							<th scope="col">nutrigrowplus.bmm@gmail.com</th>
						</tr>
						<tr>
							<th scope="col">Website
							</th>
							<th scope="col">www.nutrigrow-plus.com</th>
						</tr>
					</tbody>
				</table>
			</div>
			<?php 
			include_once 'sidebar.php'
			?>
		</div>
	</div><br><br>

	<nav aria-label="breadcrumb" >
		<ol class="breadcrumb"style="padding-left: 100px;">
			<li class="breadcrumb-item">You are here:</li>
			<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item active"><a href="perusahaan.php">Perusahaan</a></li>
			<li class="breadcrumb-item active"><a href="#">Profil Perusahaan</a></li>
		</ol>
	</nav>

	<?php
	include_once 'footer.php'
	?>

</body>
</html>