<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="b_slider.css">
	<?php
	include 'shared/head.php';
	?>
	<link rel="stylesheet" type="text/css" href="custom.css">
	<title></title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

</head>
<body class="container" style="background-color: #f4f4f4">
	<?php
	include 'shared/header.php';
	?>
	<section class="customer-logos slider mt-2">
		<div class="slide">
			<img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg">
		</div>
		<div class="slide"><img src="http://www.webcoderskull.com/img/logo.png">
		</div>
		<div class="slide">
			<img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg">
		</div>
		<div class="slide">
			<img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg">
		</div>
		<div class="slide">
			<img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg">
		</div>
		<div class="slide">
			<img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg">
		</div>
		<div class="slide">
			<img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg">
		</div>
		<div class="slide">
			<img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg">
		</div>
		<div class="slide">
			<img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg">
		</div>
	</section>
	<main style="margin-top: 20px; border:1px solid grey; ">
		<div class="row">
			<div class="col-3"  >
				<div class="shadow p-3 mb-5 rounded">
					<ul class="list-group py-1" >
						<li class="list-group-item py-1">
							<a class="text-body" href="#">Library Website(Old)</a>
						</li>
						<li class="list-group-item py-1">
							<a class="text-body" href="#">Patna University Home</a>
						</li>
						<li class="list-group-item py-1">
							<a class="text-body" href="#">TU Webmail</a>
						</li>
						<li class="list-group-item py-1">
							<a class="text-body" href="">Plagiarism Tool: Urkund</a>
						</li>
						<li class="list-group-item py-1">
							<a class="text-body" href="">Citation Manager</a>
						</li>
						<li class="list-group-item py-1">
							<a class="text-body" href="">E-Resources</a>
						</li>
						<li class="list-group-item py-1">
							<a class="text-body" href="">E-ShodhSindhu</a>
						</li>
						<li class="list-group-item py-1">
							<a class="text-body" href="">DelCON</a>
						</li>
						<li class="list-group-item py-1">
							<a class="text-body" href="">DELNET</a>
						</li>
						<li class="list-group-item py-1">
							<a class="text-body" href="">Open Access </a>
						</li>
						<li class="list-group-item py-1">
							<a class="text-body" href="">Research Support</a>
						</li>
						<li class="list-group-item py-1">
							<a class="text-body" href="">FAQs</a>
						</li>
						<li class="list-group-item py-1">
							<a class="text-body" href="">Ask Librarian</a>
						</li>
						<li class="list-group-item py-1">
							<a class="text-body" href="">Feedbaack Form</a>
						</li>
						<li class="list-group-item py-1">
							<a class="text-body" href="">Online User Registration</a>
						</li>
					</ul>
				</div>
				<div class="shadow p-3 mb-5 rounded">
					<h5 class="text-center text-info">Library videos Gallery
					</h5>
				</div>
			</div>
			<div class="col-6 " style="margin-top: 20px">
				<h1 class="text-center text-info">Patna University Library</h1>
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="images/first.png" alt="First slide">
							<div class="carousel-caption d-none d-md-block">
								<h5>First Slide Label</h5>
								<p>This is the first slide label</p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images/second.png" alt="Second slide">
							<div class="carousel-caption d-none d-md-block">
								<h5>Second Slide Label</h5>
								<p>This is the second slide label</p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images/third.png" alt="Third slide">
							<div class="carousel-caption d-none d-md-block">
								<h5>Third Slide Label</h5>
								<p>This is the third slide label</p>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				    </a>
				    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				    </a>
				</div>				
			</div>
			<div class="col-3">
				<div class="shadow mb-4 bg-white rounded mr-1 mt-3 border border-primary">
					<h5 class="text-center text-info p-2 border-bottom border-primary"" style="background-color: #e9e7e9;padding-bottom:5px">News & Event
					</h5>
					<marquee  direction="up" class="pl-3" onmouseover="this.stop();" onmouseout="this.start()" style="max-height: 300px">
						<a class="py-4" href="#">Link:</a>
						<p class="">this is sis and man...ggjghghg wriewhriweriweirwhrhwe</p>
						<a class="py-4" href="#">Link:</a>
						<p class="text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a class="py-4" href="#">Link:</a>
						<p class="text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a class="py-4" href="#">Link:</a>
						<p class="text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officiadeserunt mollit anim id est laborum.
					    </p>
					    <a class="py-4" href="#">Link:</a>
						<p class="text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officiadeserunt mollit anim id est laborum.
					    </p>			
					</marquee>
				</div>
				<div class="shadow mb-1 bg-white rounded mr-2 border border-primary">
					<h5 class="text-center text-info p-2 border-bottom border-primary" style="background-color:#e9e7e9; ">Digital Library @ PU
					</h5>
					<ul type="square">
						<li><a href="#">link</a></li>
						<li><a href="#">link</a></li>
						<li><a href="#">link</a></li>
						<li><a href="#">link</a></li>
						<li><a href="#">link</a></li>
						<li><a href="#">link</a></li>
						<li><a href="#">link</a></li>
						<li><a href="#">link</a></li>
						<li><a href="#">link</a></li>
						<li><a href="#">link</a></li>
						<li><a href="#">link</a></li>
						<li><a href="#">link</a></li>
					</ul>
				</div>
			</div>
		</div>
	</main>

 	<script type="text/javascript" src="b_slider.js"></script>
</body>



  
</html>