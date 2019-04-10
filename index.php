<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <!-- Compiled and minified CSS -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="dist/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="dist/css/materialize_custom.css">
	<title>Watch|HD|Enjoy</title>
</head>
<body>

	<header>
		<nav class="nav-wrapper indigo">
			<div class="container">
				<a href="index.html" class="brand-logo">Movies</a>
				<a href="#" class="sidenav-trigger" data-target="mobile-links">
					<i class="material-icons">menu</i>
				</a>
				<ul class="right hide-on-med-and-down">
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">More</a></li>
				</ul>
			</div>
		</nav>

		<ul class="sidenav" id="mobile-links">
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">More</a></li>
		</ul>
	</header>
	
	<section class="body">
		<div class="row">
			
			<!--9 columns-->
			<div class="col s12 m8 l9 ilike-dark-container">
				<div class="row">
					<?php
						$soluong = 8;
						for($i = 0; $i < $soluong; $i++) {
						echo 
						"
							<div class='col s3 m3 l3'>
								<div class='card'>
									<div class='card-image'>
										<img src='images/dororo.png'>
									</div>
									<div class='card-content'>
										<p>Coming soon</p>
									</div>
								</div>
							</div>
						";
						}
					?>
				</div>
			</div>

			<!--3 columns-->
			<div class="col s12 m4 l3">
				<ul class="collection">
					<?php 
					for ($i=0; $i < $soluong; $i++ ) {
						echo 
						"
							<li class='collection-item avatar blue lighten-4'>
								<img src='images/dororo.png' alt='movie' class='myimage'>
								<span class='title'>Dororo</span>
								<p>Coming soon <br>
									Second Line
								</p>
							</li>
						";
					}
					?>
				</ul>
			</div>
		</div>
	</section>
	
	<!--FAB-->
	<div class="fixed-action-btn">
		<a class="btn-floating btn-large red">
			<i class="large material-icons">mode_edit</i>
		</a>
	</div>
	
	<!-- jQuery -->
	<script src="jquery/jquery-3.3.1.min.js"></script>
	
	<!--custom javascript here-->
	<script>
		$(document).ready(function (){
			$('.sidenav').sidenav();
		});
	</script>
	<!------------------------->
	
	<!--import javascript materialize.min.js-->
	<script src="dist/js/materialize.min.js"></script>
</body>
</html>