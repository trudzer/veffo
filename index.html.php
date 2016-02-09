<!DOCTYPE HTML>
<html>
	<head>
		<title>Big Picture by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<?php
				include "php/header.php";
			?>
		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen" style='background: url("images/overlay.png"), url("<?php include "php/intro.php";?>")'>
				
				<div class="content container 75%">
					<header>
						<h2 id="thick">Hello</h2>
					</header>
					<p id="thick">Welcome to <strong>PictureBook</strong>.</p>
					<footer>
						<a id="thick" href="#one" class="button style2 down">More</a>
					</footer>
				</div>
			</section>
		<!-- One -->
			<section id="one" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>What is PictureBook</h2>
					</header>
					<p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum.
					Fusce blandit ultrices sapien, in accumsan orci rhoncus eu. Sed sodales venenatis arcu,
					id varius justo euismod in. Curabitur egestas consectetur magna.</p>
				</div>
				<a id="thick" href="#work" class="button style2 down anchored">Next</a>
			</section>


		<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content container">
					<header>
						<h2>PictureBook</h2>
						<p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum.
						Fusce blandit ultrices sapien, in accumsan orci rhoncus eu. Sed sodales venenatis
						arcu, id varius justo euismod in. Curabitur egestas consectetur magna vitae.</p>
					</header>

					<!-- Lightbox Gallery  -->
						<div class="container 75% gallery">
							<div class="row 0% images">
								<div class="6u 12u(mobile)"><a href="images/fulls/01.jpg" class="image fit "><img src="images/thumbs/01.jpg" title="The Anonymous Red" alt="" /></a></div>
								
								<div class="6u 12u(mobile)"><a href="images/fulls/02.jpg" class="image fit "><img src="images/thumbs/02.jpg" title="Airchitecture II" alt="" /></a></div>
						
							
								<div class="6u 12u(mobile)"><a href="images/fulls/01.jpg" class="image fit "><img src="images/thumbs/01.jpg" title="The Anonymous Red" alt="" /></a></div>
								
								<div class="6u 12u(mobile)"><a href="images/fulls/02.jpg" class="image fit "><img src="images/thumbs/02.jpg" title="Airchitecture II" alt="" /></a></div>
							
								
							</div>
						</div>

				</div>
			</section>

		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content container">
					<header>
						<h2>Sign up/Sign in</h2>
						<p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum.</p>
					</header>
					<div class="box container 75%">

					
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">

				<!-- Icons -->
					<ul class="actions">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>

				<!-- Menu -->
					<ul class="menu">
						<li>&copy; Úlfur Ingólfsson</li>
					</ul>

			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>