<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="b_slider.css">
	<?php
	include 'shared/head.php';
	?>
	<link rel="stylesheet" type="text/css" href="custom.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

</head>
<body class="container" style="background-color: #f4f4f4;">
	<?php
	include 'shared/header.php';
	?>
	 <!-------------Book Slider ---------->
	<section class="customer-logos slider mt-2 border p-2">
		<div class="slide">
			<img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg">
		</div>
		<div class="slide">
			<img src="http://www.webcoderskull.com/img/logo.png">
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
	<main class="mt-2 border">
		<div class="row">
			<div class="col-md-3 col-sm-4 col-12"  >

				<div class="shadow p-3 mb-5 rounded border border-primary">
					<ul class="list-group py-1"  style="font-family: initial;">
						<li class="list-group-item py-1">
							<a style="color: #c20101" href="#">Patna University Home</a>
						</li>
						<li class="list-group-item py-1">
							<a style="color: #c20101" href="#">PU Webmail</a>
						</li>
						<li class="list-group-item py-1">
							<a style="color: #c20101" href="">Plagiarism Tool: Urkund</a>
						</li>
						<li class="list-group-item py-1">
							<a style="color: #c20101" href="">Citation Manager</a>
						</li>
						<li class="list-group-item py-1">
							<a style="color: #c20101" href="">E-Resources</a>
						</li>
						<li class="list-group-item py-1">
							<a style="color: #c20101" href="">E-ShodhSindhu</a>
						</li>
						<li class="list-group-item py-1">
							<a style="color: #c20101" href="">DelCON</a>
						</li>
						<li class="list-group-item py-1">
							<a style="color: #c20101" href="">DELNET</a>
						</li>
						<li class="list-group-item py-1">
							<a style="color: #c20101" href="">Open Access </a>
						</li>
						<li class="list-group-item py-1">
							<a style="color: #c20101" href="">Research Support</a>
						</li>
						<li class="list-group-item py-1">
							<a style="color: #c20101" href="">FAQs</a>
						</li>
						<li class="list-group-item py-1">
							<a style="color: #c20101" href="">Ask Librarian</a>
						</li>
						<li class="list-group-item py-1">
							<a style="color: #c20101" href="">Feedbaack Form</a>
						</li>
						<li class="list-group-item py-1">
							<a style="color: #c20101" href="">Online User Registration</a>
						</li>
					</ul>
				</div>
				<!-- Video Gallery Model -->
				<div class="shadow p-3 mb-5 rounded">

					<h5 class="text-center text-info">Library videos Gallery</h5>
					<!-- Button trigger modal -->
                    <a href="#">
					<img src="images/first.png" class="img-fluid" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					  Patna University video
					</a>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Patna University Video</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="embed-responsive embed-responsive-16by9">
										<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-8 col-12 border shadow mb-4  rounded" style="margin-top: 20px">
				<h4 class="text-center pt-2" style="color: #210075">Patna University Library</h4>
				<hr>
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<a href="#"><img class="d-block w-100" src="images/first.png" alt="First slide"></a>
							<div class="carousel-caption d-none d-md-block">
								<h5>First Slide Label</h5>
								<p>This is the first slide label</p>
							</div>
						</div>
						<div class="carousel-item">
							<a href="#"><img class="d-block w-100" src="images/second.png" alt="Second slide"></a>
							<div class="carousel-caption d-none d-md-block">
								<h5>Second Slide Label</h5>
								<p>This is the second slide label</p>
							</div>
						</div>
						<div class="carousel-item">
							<a href="#"><img class="d-block w-100" src="images/third.png" alt="Third slide"></a>
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
				<h6  class="text-danger mt-2" style="font-size: 14px">SYSTEMATIC DOWNLOADING OF E-RESOURCES IS STRICTLY PROHIBITED</h6>
				  <!-- Nav tabs -->
				 <ul class="nav nav-tabs" role="tablist" style="font-family: initial;">
				 	<li class="nav-item">
				 		<a class="nav-link active" data-toggle="tab" href="#Announcement">Announcement</a>
				    </li>
				    <li class="nav-item">
				        <a class="nav-link" data-toggle="tab" href="#Faculty-p">Faculty Publications</a>
				    </li>
				    <li class="nav-item">
				        <a class="nav-link" data-toggle="tab" href="#E-Resources">E-Resources</a>
				    </li>
				    <li class="nav-item">
				        <a class="nav-link" data-toggle="tab" href="#Open-A">Access</a>
				    </li>
				 </ul>

				  <!-- Tab panes -->
				 <div class="tab-content">
				    <div id="Announcement" class="container tab-pane active"><br>
				    	<div class="border p-1" >
				    		<h6 class="text-center p-2 text-warning" style="background-color: #008700">Announcements @ PU Library</h6>
				    		<a href="#"><p class="border mb-1 border-info pl-1" style="font-size: 14px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodand mai skto srakesf rakehsr  <strong><img src="images/small-blink-red.gif"></strong>
				    		</a></p>
				    		<a href="#"><p class="border mb-1 border-info pl-1" style="font-size: 14px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tur adipisicing elit, sed do eiusmodand mai skto srake <strong><img src="images/small-blink-red.gif"></strong>
				    		</a></p>
				    		<a href="#"><p class="border mb-1 border-info pl-1" style="font-size: 14px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tur adipisicing elit, sed do eiusmodand mai skto srake <strong><img src="images/small-blink-red.gif"></strong>
				    		</a></p>
				    		<a href="#"><p class="border mb-1 border-info pl-1" style="font-size: 14px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tur adipisicing elit, sed do eiusmodand mai skto srake  <strong><img src="images/small-blink-red.gif"></strong>
				    		</a></p>
				    	</div>
				    </div>
				    <div id="Faculty-p" class="container tab-pane fade"><br>
				      <h3>Menu 1</h3>
				      <P>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				    </div>
				    <div id="E-Resources" class="container tab-pane fade"><br>
				      <h3>Menu 2</h3>
				      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
				    </div>
				    <div id="Open-A" class="container tab-pane fade"><br>
				      <h3>Menu 2</h3>
				      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
				    </div>
				 </div>							
			</div>
			<div class="col-md-3 col-12">
				<div class="shadow mb-4 bg-white rounded mr-1 mt-3 border border-primary">
					<h5 class="text-center text-info p-2 border-bottom border-primary"" style="background-color: #e9e7e9;padding-bottom:5px;font-family: initial;">News & Event
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
					<h5 class="text-center text-info p-2 border-bottom border-primary" style="background-color:#e9e7e9; font-family: initial; ">Digital Library @ PU
					</h5>
					<ul type="square">
						<li><a href="#" >link</a></li>
						<li><a href="#" >link</a></li>
						<li><a href="#" >link</a></li>
						<li><a href="#" >link</a></li>
						<li><a href="#" >link</a></li>
						<li><a href="#" >link</a></li>
						<li><a href="#" >link</a></li>
						<li><a href="#" >link</a></li>
						<li><a href="#" >link</a></li>
						<li><a href="#" >link</a></li>
						<li><a href="#" >link</a></li>
						<li><a href="#" >link</a></li>
					</ul>
				</div>
			</div>
		</div>
	</main>

 	<script type="text/javascript" src="b_slider.js"></script>
</body> 
</html>