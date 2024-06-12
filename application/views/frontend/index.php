<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mervent</title>

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/css/style.css')?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<body>

	<nav>
		<div class="logo">
			<img src="<?= base_url('assets/frontend/img/LOGO.png')?>">
		</div>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Sign In</a></li>
			<li><a href="#">Sign Up</a></li>
            <li style="margin-bottom: 50px;"><a href="#" class="logout">Log out</a></li>
		</ul>


		<label class="icon">
			<i class="fa fa-bars" onclick="changeIcon(this)"></i> 
		</label>

	</nav>

	<section class="banner">
		<div class="banner-area">
			<p>Browse what Event you Want</p>
			</div>
	</section>

	<section class="popular-event">
		<div class="popular-event-wrapper">
			<h1>Popular Event For You</h1>
			<ul>
				<li><a href="#">All</a></li>
				<li><a href="#">Today</a></li>
				<li><a href="#">This Weekend</a></li>
				<li><a href="#">Free</a></li>
				<li><a href="#">Sport</a></li>
				<li><a href="#">Food & Drink</a></li>
			</ul>

		<div class="content-wrapper">
			<div class="box">
				<div class="img-wrapper">
					<img src="<?= base_url('assets/frontend/img/Banner-event.png')?>">
				</div>
                <div class="event-description">
				<h3>Spot Birding Photography in Bromo Tengger Semeru National Park</h3>
				<p class="date">Sunday, 5 June 2022 07.00 - 11.00 WIB</p>
				<p class="description">Pronojiwo - Pronojiwo - East Java</p>
				</div>
			</div>

			<div class="box">
				<div class="img-wrapper">
					<img src="<?= base_url('assets/frontend/img/Banner-event.png')?>">
				</div>
                <div class="event-description">
				<h3>Spot Birding Photography in Bromo Tengger Semeru National Park</h3>
				<p class="date">Sunday, 5 June 2022 07.00 - 11.00 WIB</p>
				<p class="description">Pronojiwo - Pronojiwo - East Java</p>
                </div>
			</div>

			<div class="box">
				<div class="img-wrapper">
					<img src="<?= base_url('assets/frontend/img/Banner-event.png')?>">
				</div>
                <div class="event-description">
				<h3>Spot Birding Photography in Bromo Tengger Semeru National Park</h3>
				<p class="date">Sunday, 5 June 2022 07.00 - 11.00 WIB</p>
				<p class="description">Pronojiwo - Pronojiwo - East Java</p>
                </div>
			</div>

			<div class="box">
				<div class="img-wrapper">
					<img src="<?= base_url('assets/frontend/img/Banner-event.png')?>">
				</div>
                <div class="event-description">
				<h3>Spot Birding Photography in Bromo Tengger Semeru National Park</h3>
				<p class="date">Sunday, 5 June 2022 07.00 - 11.00 WIB</p>
				<p class="description">Pronojiwo - Pronojiwo - East Java</p>
                </div>
			</div>

			<div class="box">
				<div class="img-wrapper">
					<img src="<?= base_url('assets/frontend/img/Banner-event.png')?>">
				</div>
                <div class="event-description">
				<h3>Spot Birding Photography in Bromo Tengger Semeru National Park</h3>
				<p class="date">Sunday, 5 June 2022 07.00 - 11.00 WIB</p>
				<p class="description">Pronojiwo - Pronojiwo - East Java</p>
                </div>
			</div>

			<div class="box">
				<div class="img-wrapper">
					<img src="<?= base_url('assets/frontend/img/Banner-event.png')?>">
				</div>
                <div class="event-description">
				<h3>Spot Birding Photography in Bromo Tengger Semeru National Park</h3>
				<p class="date">Sunday, 5 June 2022 07.00 - 11.00 WIB</p>
				<p class="description">Pronojiwo - Pronojiwo - East Java</p>
                </div>
			</div>

			<div class="box">
				<div class="img-wrapper">
					<img src="<?= base_url('assets/frontend/img/Banner-event.png')?>">
				</div>
                <div class="event-description">
				<h3>Spot Birding Photography in Bromo Tengger Semeru National Park</h3>
				<p class="date">Sunday, 5 June 2022 07.00 - 11.00 WIB</p>
				<p class="description">Pronojiwo - Pronojiwo - East Java</p>
                </div>
			</div>

			<div class="box">
				<div class="img-wrapper">
					<img src="<?= base_url('assets/frontend/img/Banner-event.png')?>">
				</div>
                <div class="event-description">
				<h3>Spot Birding Photography in Bromo Tengger Semeru National Park</h3>
				<p class="date">Sunday, 5 June 2022 07.00 - 11.00 WIB</p>
				<p class="description">Pronojiwo - Pronojiwo - East Java</p>
                </div>
			</div>

			<div class="box">
				<div class="img-wrapper">
					<img src="<?= base_url('assets/frontend/img/Banner-event.png')?>">
				</div>
                <div class="event-description">
				<h3>Spot Birding Photography in Bromo Tengger Semeru National Park</h3>
				<p class="date">Sunday, 5 June 2022 07.00 - 11.00 WIB</p>
				<p class="description">Pronojiwo - Pronojiwo - East Java</p>
                </div>
			</div>
		</div>

	</div>
	</section>

<footer>
	<div class="menu-wrapper">
		<ul>
			<li><i class="fa fa-home"></i> <a href="#">Home</a></li>
			<li><i class="fa fa-calendar"></i> <a href="#">Schedule</a></li>
			<li><i class="fa fa-heart"></i> <a href="#">Favorite</a></li>
			<li><i class="fa fa-user"></i> <a href="#">Profile</a></li>
		</ul>
	</div>
</footer>

	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="<?= base_url('assets/frontend/js/menu.js')?>"></script>
</body>
</html>