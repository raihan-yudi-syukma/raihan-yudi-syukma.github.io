<!DOCTYPE html>
<html lang="en">
<head>
	<!-- meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Raihan Yudi Syukma's Website">
	<title>Rainharder - Raihan Yudi Syukma</title>
	<!-- Favicon -->
	<link type="image/webp" href="assets/images/logo.webp" rel="icon">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="assets/fontawesome6/css/all.min.css">
	<!-- Custom CSS -->
	<style>
		/* Fonts */
		@font-face {
			font-family: "Poppins";
			src: url("assets/fonts/poppins/poppins.woff2 ") format("truetype");
			font-weight: normal;
			font-style: normal;
		}
		@font-face {
			font-family: "Play";
			src: url("assets/fonts/play/play.woff2 ") format("truetype");
			font-weight: normal;
			font-style: normal;
		}
		@font-face {
			font-family: "Press Start 2P";
			src: url("assets/fonts/pressStart2P/pressStart2P.woff2 ") format("truetype");
			font-weight: normal;
			font-style: normal;
		}
		/* /.Fonts */

		/* reset CSS */
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		/* /.reset CSS */

		/* body */
		body {
			color: black;
			font-family: "Poppins", sans-serif;
		}
		body::-webkit-scrollbar {
			width: 5px;	 
		}
		body::-webkit-scrollbar-track {
			background-color: rgb(60, 60, 60);
		}
		body::-webkit-scrollbar-thumb {
			background-color: red;
			border-radius: 5px;
		}
		/* /.body */

		/* navbar */
		.navbar {
			background-color: #333333;
		}
		.navbar img {
			border: 3px solid red;
			border-radius: 50%;
			border-top: 3px solid white;
			border-bottom: 3px solid white;
		}
		.navbar span {
			color: white;
			font-family: "Press Start 2P", sans-serif;
			font-weight: 100;
			font-size: 30px;
		}
		.navbar-toggler {
			background-color: red;
			color: white;
		}
		.navbar .nav-item a {
			font-family: "Play", sans-serif;
			font-size: 20px;
			border-radius: 5px;
			color: white;
			padding: 10px 10px 10px 10px;
			text-decoration: none;
		}
		.navbar .nav-item a:hover,
		.navbar .nav-item a:focus {
			background-color: rgb(80, 80, 80);
			font-weight: bold;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
			transform: translateY(-2px);
			transition: background-color 300ms ease, color 300ms ease;
		}
		/* /.navbar */

		/* footer */
		footer {
			background-color: #333333;
			font-family: "Play", sans-serif;
			font-size: 20px;
		}
		footer ul {
			gap: 10px;
		}
		footer ul li img {
			height: 30px;
		}
		/* /.footer */

		.jumbotron {
			max-height: 400px;
			background-color: #333333;
			height: 70vh;
		}

		/* carousel */
		.carousel-item img {
			left: 50%;
			transform: translateX(-50%);
		}
		/* /.carousel */

		@media (max-width: 767px) {
			/* jumbotron */
			.jumbotron {
				height: auto !important;
				max-height: max-content;
			}
			/* /.jumbotron */

			/* carousel */
			.carousel-item img {
				position: static !important;
				width: 100% !important;
				transform: none !important;
			}
			/* /.carousel */
		}
	</style>
	<!-- Bootstrap JS -->
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body class="d-flex flex-column min-vh-100">
    
	<nav class="navbar navbar-expand-lg navbar-dark">
		<div class="container">

			<!-- brand logo -->
			<div class="navbar-brand py-4">
				<img class="img-fluid" style="max-width: 100%; height: 100px;" src="assets/images/logo.webp" alt="Rainharder Logo">
			</div>

			<!-- navbar toggler -->
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle Navigation">
				<i class="fas fa-bars"></i>
			</button>

			<div class="collapse navbar-collapse" id="navbarNav">

				<!-- name -->
				<ul class="navbar-nav">
					<li class="nav-item">
						<span>
							RAINHARDER
						</span>
					</li> 
				</ul>

				<!-- content -->
				<ul class="navbar-nav ms-auto">

					<!-- home -->
					<li class="nav-item">
						<a class="nav-link" href="index.php">
							<i class="fas fa-home"></i>
							Home
						</a>
					</li> 

					<!-- articles -->
					<li class="nav-item">
						<a class="nav-link" href="#">
							<i class="fas fa-book"></i>
							Articles
						</a>
					</li>

					<!-- contact -->
					<li class="nav-item">
						<a class="nav-link" href="#">
							<i class="fas fa-message"></i>
							Contact
						</a>
					</li>
				</ul>
				<!-- /.content -->
			</div>
		</div>
	</nav>
    
	<div class="container p-3 flex-grow-1">

		<!-- hero -->
		<div class="jumbotron row p-0 mb-5">

			<!-- carousel -->
			<div class="col-md-6 p-0 h-100 position-relative overflow-hidden"> 
				<div class="carousel slide h-100 w-100" id="heroCarousel" data-bs-ride="carousel">

					<!-- indicator -->
					<ol class="carousel-indicators" style="list-style-type: none;">
						<li data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></li>
						<li data-bs-target="#heroCarousel" data-bs-slide-to="1"></li>
					</ol>

					<div class="carousel-inner h-100">
						<!-- slide 1 -->
						<div class="carousel-item active h-100">
							<img src="assets/images/books.jpeg" alt="Books Collection" class="position-absolute w-auto h-100 object-fit-cover">
						</div>
						<!-- slide 2 -->
						<div class="carousel-item h-100">
							<img src="assets/images/journals.jpeg" alt="Journals Collection" class="position-absolute w-auto h-100 object-fit-cover">
						</div>
					</div>

					<!-- controls -->
					<button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</button>
				</div>
      </div>
			<!-- /.carousel -->

			<!-- text -->
			<div class="col-md-6 p-3 text-white d-flex flex-column justify-content-center">
				<h3 style="color: orange">
					Raihan Yudi Syukma 
					<i class="fas fa-glasses text-info"></i>
				</h3>
				<h6 style="color:rgb(200, 200, 200)">Fullstack Web Developer</h6>
				<p style="text-align: justify;">
					Hello, my name is Raihan Yudi Syukma! Im an intermediate fullstack web developer, I have created a bunch of projects using back-end frameworks like CodeIgniter and Laravel.
				</p>
			</div>
      <!-- /.text -->
		</div>
		<!-- /.hero -->

    <!-- about -->
		<div class="mb-5 p-3 card bg-light" id="visiMisi" style="border-top: 10px solid #333333;">
			<h2 class="text-center mb-4">
				A Bit About Me
				<i class="fas fa-cookie" style="color: chocolate;"></i>
			</h2>
			<div class="row">
				<!-- paragraph -->
				<div class="col-sm-4">
					<img class="mx-auto d-block mb-2" style="max-height: 200px; max-width: 200px" src="assets/images/logo.webp" alt="">
					<p style="text-align: justify;">
						Im a fresh graduate from Institut Az Zuhra college at Pekanbaru, Indonesia. Im enrolled in Informathics Management study program. Im passionate in web, that's why Im focusing in fullstack web development.
					</p>
				</div>
				<!-- personal information -->
				<div class="col-sm-8 table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th style="background-color: #333333; color: orange" class="h5 font-weight-bold" scope="col" colspan="2">Personal Information</th>
							</tr>
						</thead>
						<tr>
							<th scope="row">Name</th>
							<td>Raihan Yudi Syukma</td>
						</tr>
						<tr>
							<th scope="row">Address</th>
							<td>Jl. Purnama Sari, Cluster Taman Sari, Kec. Tangerang Selatan, Kota Pekanbaru</td>
						</tr>
						<tr>
							<th scope="row">Postal Code</th>
							<td>28288</td>
						</tr>
						<tr>
							<th scope="row">Phone</th>
							<td>+62 819 9057 6161</td>
						</tr>
						<tr>
							<th scope="row">Email</th>
							<td>raihanys03@gmail.com</td>
						</tr>
						<tr>
							<th scope="row">Birthdate</th>
							<td>26-07-2003</td>
						</tr>
						<tr>
							<th scope="row">Nationality</th>
							<td>Indonesia</td>
						</tr>
					</table>
				</div>
			</div>
			<!-- /.row -->
		</div>
		<!-- about -->

		<!-- skills -->
		<div>
			<h1 class="text-center">
				Skills
				<i class="fas fa-hand" style="color: moccasin;"></i>
			</h1>
			<div class="row">
				<!-- card 1 -->
				<div class="col-md-4 p-2">
					<div class="card h-100" style="border-top: red solid 5px;">
						<div class="card-header p-0">
							<img class="w-100" src="assets/images/front-end.webp" alt="Front end">
						</div>
						<div class="card-body text-light" style="background-color: #333333">
							<h5 class="font-weight-bold text-info">Front-End</h5>
							<small style="color: rgb(237, 232, 232)">Creating thes Website's Layout</small>
							<p class="mt-2" style="text-align: justify;">I can create the website's interface, also prettify it. Making a comfortable user's experience.</p>
						</div>
					</div>
				</div>
				<!-- card 2 -->
				<div class="col-md-4 p-2">
					<div class="card h-100" style="border-top: red solid 5px;">
						<div class="card-header p-0">
							<img class="w-100" src="assets/images/back-end.webp" alt="Back End">
						</div>
						<div class="card-body text-light" style="background-color: #333333">
							<h5 class="font-weight-bold text-info">Back-End</h5>
							<small style="color: rgb(237, 232, 232)">Creating the Website's Logic</small>
							<p class="mt-2" style="text-align: justify;">
								I can create the website's flow (dynamic), like fetching data from the user then outputting what the user's want.
							</p>
						</div>
					</div>
				</div>
				<!-- card 3 -->
				<div class="col-md-4 p-2">
					<div class="card h-100" style="border-top: red solid 5px;">
						<div class="card-header p-0">
							<img class="w-100" src="assets/images/database.jpeg" alt="Mahasiswa Manajemen Informatika">
						</div>
						<div class="card-body text-light" style="background-color: #333333" text-light>
							<h5 class="font-weight-bold text-info">Database</h5>
							<small style="color: rgb(237, 232, 232)">Saving the Data</small>
							<p class="mt-2" style="text-align: justify;" 267>The data required for the website will saved here. The website will fetch the required data from the database.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.skills -->
	</div>
	<!-- /.container -->

	<footer class="footer p-3">
		<div class="container">
			<p class="text-white text-center mb-1">
				&copy; <?= date('Y') ?> Raihan Yudi Syukma
			</p>
			<!-- links -->
			<ul class="d-flex justify-content-center list-unstyled m-0">	
				<!-- facebook -->
				<li>
					<a href="https://facebook.com/raihanyudisyukma/" target="_blank">
						<img src="assets/images/facebook-logo.png" alt="facebook link">
					</a>
				</li>
				<!-- instagram -->
				<li>
					<a href="https://www.instagram.com/_rainharder/" target="_blank">
						<img src="assets/images/instagram-logo.png" alt="instagram link">
					</a>
				</li>
				<!-- x -->
				<li>
					<a href="https://x.com/raihanyudisy" target="_blank">
						<img src="assets/images/x-logo.png" alt="x link">
					</a>
				</li>
				<!-- whatsapp -->
				<li>
					<a href="https://wa.me/6281990576161" target="_blank">
						<img src="assets/images/whatsapp-logo.png" alt="whatsapp link">
					</a>
				</li>
			</ul>
			<!-- /.links -->
		</div>
	</footer>   
</body>
</html>
