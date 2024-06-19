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
			<li><a href="#">Home</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">About Us</a></li>
		</ul>


		<label class="icon">
			<i class="fa fa-bars" onclick="changeIcon(this)"></i>
		</label>

	</nav>

	<section class="content">
        <div class="event-image">
            <img src="<?= base_url('assets/event/'. $events->photo)?>">
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