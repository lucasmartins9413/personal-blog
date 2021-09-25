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

		  <!-- section starts  -->
        <section id="hero">
            <div class="container-xl">
                <div class="row gy-4">
                    <div class="col-lg-8">

                        <div class="post featured-post-lg">
                            <div class="details clearfix">
                                <a href="#" class="category-badge">Finance</a>
                                <h2 class="post-title">
                                    <a href="#">3 Things to avoid while investing in stock market as a beginner</a>
                                </h2>
                                <ul class="meta list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="#">Techie Coder</a>
                                    </li>
                                    <li class="list-inline-item">30 May 2021</li>
                                </ul>
                            </div>
                            <a href="#">
                                <div class="thumb rounded">
                                    <div class="inner data-bg-image" data-bg-image="<?php echo INCLUDE_PATH_BLOG ?>images/tech.jpg">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="post-tabs rounded bordered">
                            <ul class="nav nav-tabs nav-pills nav-fill" id="postTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button aria-controls="popular" aria-selected="true" class="nav-link active"
                                        data-bs-target="#popular" data-bs-toggle="tab" id="popular-tab" role="tab"
                                        type="button">
                                        Popular
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button aria-controls="recent" aria-selected="false" class="nav-link"
                                        data-bs-target="#recent" data-bs-toggle="tab" id="recent-tab" role="tab"
                                        type="button">
                                        Recent
                                    </button>
                                </li>

                            </ul>

                            <!-- content  -->
                            <div class="tab-content" id="postsTabContent">
                                <!-- loader -->
                                <div class="lds-dual-ring"></div>
                                <!-- pop post  -->

                                <div class="tab-pane fade show active" id="popular" aria-labelledby="popular-tab"
                                    role="tabpanel">
                                    <!-- post  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="<?php echo INCLUDE_PATH_BLOG ?>images/tech.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Bitcoin price raise after sudden fall</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">24 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post2  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="<?php echo INCLUDE_PATH_BLOG ?>images/tech.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Clubhouse Crosses 1Mn Downloads On Play Store</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">26 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post3  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="<?php echo INCLUDE_PATH_BLOG ?>images/tech.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Check current Gold Price of 24k</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">28 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post4  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="<?php echo INCLUDE_PATH_BLOG ?>images/tech.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Improve your mails with Grammarly</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">01 Jun 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- recent  -->
                                <div class="tab-pane fade" id="recent" aria-labelledby="recent-tab" role="tabpanel">
                                    <!-- post  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="<?php echo INCLUDE_PATH_BLOG ?>images/tech.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Clubhouse breaking records of many apps</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">24 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post2  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="<?php echo INCLUDE_PATH_BLOG ?>images/tech.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">At what age you should start investing</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">26 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post3  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="<?php echo INCLUDE_PATH_BLOG ?>images/tech.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Sonu sood foundation providing help in COVID-19</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">28 Jun 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post4  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="<?php echo INCLUDE_PATH_BLOG ?>images/tech.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Should we invest in soverign gold bonds</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">04 Jun 2021</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>
		




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