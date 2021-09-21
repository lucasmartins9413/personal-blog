<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Personal Blog</title>
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH_BLOG ?>css/style.css">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH_BLOG ?>css/slick.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-line-icons@2.5.5/dist/styles/simple-line-icons.min.css">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH_BLOG ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	
</head>
<body>
	<div class="site-wraper">
		<div class="main-overlay"></div>
		<header class="header-default">
			<nav class="navbar navbar-expand-lg">
				<div class="container-xl">
					<!--Logo-->
					<a href="home" class="navbar-brand">
						<img src="">
					</a>

					<div class="collapse navbar-collapse">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item dropdown active">
								<a href="home" class="nav-link dropdown-toggle">Home</a>
								<ul class="dropdown-menu">
									<li><a href="" class="dropdown-item">About</a></li>
									<li><a href="" class="dropdown-item">About</a></li>
									<li><a href="" class="dropdown-item">About</a></li>
									<li><a href="" class="dropdown-item">About</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="" class="nav-link">Latest</a>
							</li>
							<li class="nav-item">
								<a href="" class="nav-link">Sobre</a>
							</li>
							<li class="nav-item">
								<a href="" class="nav-link">Contato</a>
							</li>
						</ul>
					</div>

					<!-- right side of header -->

					<div class="header-right">					
						<ul class="social-icons list-unstyled list-inline mb-0">
							<li class="list-inline-item">
								<a href=""><i class="fab fa-facebook"></i></a>
							</li>
							<li class="list-inline-item">
								<a href=""><i class="fab fa-instagram"></i></a>
							</li>
							<li class="list-inline-item">
								<a href=""><i class="fab fa-twitter"></i></a>
							</li>
						</ul>

						<!-- buttons -->

						<div class="header-buttons">
							<button class="search icon-button">
								<i class="icon-magnifier"></i>
							</button>
							<button class="burger-menu icon-button">
								<i class="burger-icon"></i>
							</button>
						</div>
					</div>

				</div>
			</nav>
		</header>

		<!-- section starts -->


		




	</div><!--site-wraper-->



	<!-- canvas menu-->

	<div class="canvas-menu d-flex align-items-end flex-column">
		<button class="btn-close" aria-label="close" type="button"></button>

		<div class="logo">
		</div>

		<nav>
			<ul class="vertical-menu">
				<li class="active">
					<a href="">home</a>
					<ul class="submenu">
						<li><a href="">Fashion</a></li>
						<li><a href="">Fashion</a></li>
						<li><a href="">Fashion</a></li>
						<li><a href="">Fashion</a></li>
					</ul>
				</li>
				<li><a href="">Latest</a></li>
				<li><a href="">Latest</a></li>
				<li><a href="">Latest</a></li>
				<li><a href="">Latest</a></li>
			</ul>
		</nav>

		<ul class="social-icons list-unstyled list-inline mb-0 mt-auto w100">
			<li class="list-inline-item">
				<a href=""><i class="fa fa-facebook"></i></a>
				<a href=""><i class="fa fa-instagram"></i></a>
				<a href=""><i class="fa fa-twitter"></i></a>
				<a href=""><i class="fa fa-youtube"></i></a>
			</li>
		</ul>
	</div>

	<!-- search popup-->

	<div class="search-popup">
		<button class="btn-close" aria-label="Close" type="button"></button>

		<div class="search-content">
			<div class="text-center">
				<h3 class="mb-4 mt-0">Pres ESC to close</h3>
			</div>

			<form action="" class="d-flex search-form">
				<input type="search" placeholder="Pesquise aqui" name="" aria-label="search" class="form-control me-2">
				<button class="btn btn-default btn-lg" type="submit">
					<i class="icon-magnifier"></i>
				</button>
			</form>
		</div>
	</div>

	
	<script src="<?php echo INCLUDE_PATH_BLOG ?>js/jquery.min.js"></script>
	<script src="<?php echo INCLUDE_PATH_BLOG ?>js/jquery.sticky-sidebar.min.js"></script>
	<script src="<?php echo INCLUDE_PATH_BLOG ?>js/main.js"></script>
	<script src="<?php echo INCLUDE_PATH_BLOG ?>js/bootstrap.min.js"></script>
	<script src="<?php echo INCLUDE_PATH_BLOG ?>js/slick.js"></script>
	<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
</body>
</html>