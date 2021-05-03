<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
</head>
<body style="font-family: sans-serif;">
	<?php 
	include_once 'header.php'
	?>

	<div class="panel-content">
		<div class="mainheading-wrapper" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(images/heading1.jpg);">
			<div class="heading-content heading-align-left" style=" padding:100px">
				<div class="heading-text-wrapper">
					<div class="header_text uk-panel">
						<h1 style="font-size: 40px; color: white; text-transform: uppercase;">CONTACT</h1>
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
			<div class="col-8">
				<div class="fitframe-wrap">
					<iframe class="js-reframe" width="100%" height="380" src="https://maps.google.com/maps?q=Jl.+RE+Martadinata%2C+Gandekan%2C+Jebres%2C+Surakarta%2C+Jawa+Tengah&amp;output=embed"></iframe>
				</div>
			</div>
			<div class="col-4" style="background-color: green; color: white;"><br>
				<h3 class="icon_title">Company Location</h3>
				Jl. RE Martadinata, Jebres, Surakarta <br><br>
				<h3 class="icon_title">Official E-mail Address</h3>
				<a href="mailto:nutrigrowplus.bmm@gmail.com">nutrigrowplus.bmm@gmail.com</a><br><br>
				<h3 class="icon_title">Phone Or WhatsApp</h3>
				<div class="icon_description_text">+62 821 3245 4545</div>
			</div>
		</div>

	</div>

	<br><br>

	<nav aria-label="breadcrumb" >
		<ol class="breadcrumb"style="padding-left: 100px;">
			<li class="breadcrumb-item">You are here:</li>
			<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item active"><a href="contact-us.php">Contact</a></li>
		</ol>
	</nav>

	<?php 
	include_once 'footer.php'
	?>

</body>
</html>


