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

	<section class="banner">
		<div class="banner-area">
			<p>Innovation for Optimal Business Transformation and Growth</p>
		</div>
	</section>


	<section class="popular-event">
		<div class="popular-event-wrapper">
			<h1>Our Event</h1>
			<ul>
				<li><a href="#">All</a></li>
				<li><a href="#">Rafting</a></li>
				<li><a href="#">Paint Ball</a></li>
				<li><a href="#">Employee Training</a></li>
				<li><a href="#">Outbound</a></li>
				<li><a href="#">Others</a></li>
			</ul>

			<div class="content-wrapper">
				<?php foreach ($events as $event) : ?>
					<div class="box">
						<a href="<?= base_url('index/detail/' . $event->id) ?>">
							<div class="img-wrapper">
								<img src="<?= base_url('assets/event/' . $event->photo) ?>">
							</div>
						</a>
						<div class="event-description">
						<a href="<?= base_url('index/detail/' . $event->id) ?>">
							<h3><?= $event->title; ?></h3>
							<p class="date"><?= $event->date; ?></p>
							<p class="description"><?= $event->location; ?></p>
						</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

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