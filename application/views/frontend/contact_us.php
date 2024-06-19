<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mervent</title>

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/css/style.css') ?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>

<body>

	<nav>
		<div class="logo">
			<img src="<?= base_url('assets/frontend/img/LOGO.png') ?>">
		</div>
		<ul>
			<li><a href="<?= base_url('') ?>">Home</a></li>
			<li><a href="<?= base_url('index/contactus') ?>">Contact Us</a></li>
			<li><a href="<?= base_url('index/aboutus') ?>">About Us</a></li>
		</ul>


		<label class="icon">
			<i class="fa fa-bars" onclick="changeIcon(this)"></i>
		</label>

	</nav>

	<section class="detail-event">
        <div class="event-image">
            <img src="">
        </div>
		<h1></h1>
		<div class="information">
			<span>
				
			</span>
			<span>
				
			</span>
			<span>
				
			</span>
		</div>
		<div class="content">
			
		</div>
	</section>

	<footer>
		<div class="menu-wrapper">
			<ul>
				<li><i class="fa fa-home"></i> <a href="#">Home</a></li>
				<li><i class="fa fa-user"></i> <a href="#">Profile</a></li>
			</ul>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="<?= base_url('assets/frontend/js/menu.js') ?>"></script>
</body>

</html>
