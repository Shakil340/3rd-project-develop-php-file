<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Required meta tags -->
	<meta charset="<?php bloginfo('charset');?>">
	<title><?php bloginfo('name'); ?></title>
	<!-- coustom css -->
    <?php wp_head();  ?>
</head>

<body id="home" <?php body_class(); ?>>
	<div class="wrapper">
		<header class="header">
			<div class="header-top">
				<div class="container">
					<div class="row">

						<div class="col-md-10">
							<div class="top-left">
								<ul>
									<li><i class="fas fa-home"></i> 12 Royal Street, California USA</li>
									<li><i class="fas fa-phone"></i>001-122-134-555</li>
									<li><i class="fas fa-envelope"></i><a href="#"> contact@domain.com</a></li>
								</ul>

							</div>
						</div>
						<div class="col-md-2">
							<div class="top-right">
								<ul>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
									<li><a href="#"><i class="fab fa-skype"></i></a></li>
									<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
								</ul>

							</div>




						</div>
					</div>
				</div>
			</div>

			<div class="menu">
				<!-- <div class="container">  -->
				<nav class="navbar container navbar-expand-lg navbar-light">


					<a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri()?>./img/logo.png" alt="" /></a>
					<!--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

					<!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#home">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#DEMOS">DEMOS </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#Portfolio">Portfolio </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#Blog">Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#SHORTCODES">SHORTCODES </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#Contact">Contact</a>
						</li>


					</ul>
					<form>
						<div class="search-bar">
							<input type="search" placeholder="Search">
							<button class="btn " type="submit"><i class="fas fa-search"></i></button>
						</div>
					</form>
			
			</nav>
		</div>
		</header>
		<!--/.headeer end -->
