<header class="fixed-top">
	<!-- header inner -->
	<div class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col col-md-5 col-sm-6">
					<div class="full">
						<div class="center-desk">
							<div class="logo">
								<a href="#"><img src="<?= base_url('assets/images/icons/gencode-white.png') ?>" alt="gencode"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col col-md-7 col-sm-6">
					<nav class="navigation navbar navbar-expand-md navbar-dark">
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
							<ul class="navbar-nav me-auto">
								<li class="nav-item active">
									<a class="nav-link" aria-current="page" href="<?= site_url('home') ?>">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?= site_url('shop') ?>">Shop</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?= site_url('About') ?>">About</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?= site_url('Contact') ?>">Contact Us</a>
								</li>
								<li class="nav-item d_none login_btn">
									<a class="nav-link" href="<?= site_url('administrator/auth/login') ?>">Login</a>
								</li>
								<li class="nav-item d_none register_btn">
									<a class="nav-link" href="#">Register</a>
								</li>
								<li class="nav-item d_none">
									<div class="sb-search" id="sb-search">
										<form action="">
											<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
											<input class="sb-search-submit" type="submit" value="">
											<span class="sb-icon-search"><i class="position-absolute top-50 start-50 translate-middle fa-solid fa-magnifying-glass"></i></span>
										</form>
									</div>
									<script src="<?= base_url('assets/js/uisearch.js') ?>"></script>
									<script src="<?= base_url('assets/js/classie.js') ?>"></script>
									<script>
										new UISearch(document.getElementById('sb-search'));
									</script>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>
