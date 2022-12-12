<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/pages/head') ?>
</head>

<body>
	<!-- loader  -->
	<div class="loader_bg">
		<div class="loader"><img src="<?= base_url('assets/images/loading.gif') ?>" alt=""></div>
	</div>
	<!-- end loader -->

	<!-- navbar -->
	<?php $this->load->view('_partials/pages/navbar') ?>
	<!-- navbar -->

	<!-- header -->
	<?php $this->load->view('_partials/pages/header') ?>
	<!-- end header -->

	<!-- categories -->
	<section>
		<div class="container py-5">
			<div class="row text-center pt-3">
				<div class="col-lg-6 m-auto">
					<h1 class="h1">Categories of The Month</h1>
					<p>
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
						deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-6 mt-3">
					<div class="card rounded-4 shadow p-5">
						<div class="shape image-size rounded-4" style="background: url('assets/images/Website/website-1.jpg');">
						</div>
						<h2 class="h5 text-center mt-3 mb-3">Website</h2>
						<p class="text-center"><a class="btn btn-success">Go Shop</a></p>
					</div>
				</div>
				<div class="col-12 col-md-6 mt-3">
					<div class="card rounded-4 shadow p-5">
						<div class="shape image-size rounded-4" style="background: url('assets/images/merch/gelas-1.jpg');">
						</div>
						<h2 class="h5 text-center mt-3 mb-3">Merchandise</h2>
						<p class="text-center"><a class="btn btn-success">Go Shop</a></p>
					</div>
				</div>
			</div>
	</section>
	<!-- end categories -->

	<!-- section keterangan website -->
	<section class="text-white" style="background-color: #283149;">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 p-5 mt-3">
					<h1 class="text-white fw-bold fs-1">pembelian atau pembuatan di kami di jamin puas!</h1>
					<p class="fw-light" style="text-align: justify;">pembuatan website dan juga source code</p>
					<div class="row">
						<div class="col-12 col-md-4 mt-5">
							<h1 class="text-white">Durasi</h1>
							<p class="text-muted fw-normal">1 bulan</p>
						</div>
						<div class="col-auto col-md-auto mt-5">
							<svg xmlns="http://www.w3.org/2000/svg" width="10" height="100" viewBox="0 0 2 60" fill="#ffffff">
								<path d="M1 0V59.7256" stroke="#ffffff" />
							</svg>
						</div>
						<div class="col-12 col-md-4 mt-5">
							<h1 class="text-white">Startup</h1>
							<p class="text-muted fw-normal">Gencode</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 p-5 mt-3">
					<img src="assets/images/main-banner.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- end section keterangan website -->

	<!-- section merchandise -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-12 mt-5">
					<h1 class="text-center">Merchandise</h1>
					<p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit
						quaerat tempora rem optio. Nam quaerat alias quibusdam tempore, blanditiis dolore doloremque
						impedit corporis repudiandae labore perspiciatis saepe, ipsam numquam perferendis.</p>
				</div>
				<div class="col col-md-4 mt-3">
					<div class="card rounded-4 shadow-sm">
						<div class="shape-card-2 image-size" style="background: url('assets/images/merch/shirt-2.jpg');">
						</div>
						<div class="card-body">
							<div class="d-flex justify-content-between">
								<a href="#">
									<h1>T-shirt</h1>
								</a>
								<a href="#" class="fs-4"><i class="fa-regular fa-heart"></i></a>
							</div>
							<p class="fw-normal" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur
								adipisicing elit. A in, iure debitis esse hic totam vitae, unde, fuga nihil explicabo
								eius excepturi ea molestiae voluptatibus suscipit quos assumenda tempora optio.</p>
						</div>
					</div>
				</div>
				<div class="col col-md-4 mt-3">
					<div class="card rounded-4 shadow-sm">
						<div class="shape-card-2 image-size" style="background: url('assets/images/merch/gelas-1.jpg');">
						</div>
						<div class="card-body">
							<div class="d-flex justify-content-between">
								<a href="#">
									<h1>Mug</h1>
								</a>
								<a href="#" class="fs-4"><i class="fa-regular fa-heart"></i></a>
							</div>
							<p class="fw-normal" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur
								adipisicing elit. A in, iure debitis esse hic totam vitae, unde, fuga nihil explicabo
								eius excepturi ea molestiae voluptatibus suscipit quos assumenda tempora optio.</p>
						</div>
					</div>
				</div>
				<div class="col col-md-4 mt-3">
					<div class="card rounded-4 shadow-sm">
						<div class="shape-card-2 image-size" style="background: url('assets/images/merch/pin-1.webp');">
						</div>
						<div class="card-body">
							<div class="d-flex justify-content-between">
								<a href="#">
									<h1>Pin</h1>
								</a>
								<a href="#" class="fs-4"><i class="fa-regular fa-heart"></i></a>
							</div>
							<p class="fw-normal" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur
								adipisicing elit. A in, iure debitis esse hic totam vitae, unde, fuga nihil explicabo
								eius excepturi ea molestiae voluptatibus suscipit quos assumenda tempora optio.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end section merchandise -->

	<!-- testimonials -->
	<section class="text-white" style="background-color: #283149;">
		<div class="container">
			<div class="row mt-5 align-items-center">
				<div class="col col-md-6">
					<img src="assets/images/main-banner-2.png" alt="">
				</div>
				<div class="col col-md-6">
					<h1 class="fw-bold text-white">Testimonials</h1>
					<h4 class="fw-semibold text-white">apa kata client?</h4>
					<div class="slide-carousel">
						<div class="p-2">
							<p style="text-align: justify;"><span><i class="fa-solid fa-quote-left"></i></span>&nbsp;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia modi sequi deserunt a,
								unde natus sint, molestiae neque harum ducimus quod vel perferendis temporibus fugit
								repudiandae soluta cum laboriosam dolorum!&nbsp;<span><i class="fa-solid fa-quote-right"></i></span></p>
							<h4 class="text-white">[nama pengguna]</h4>
						</div>
						<div class="p-2">
							<p style="text-align: justify;"><span><i class="fa-solid fa-quote-left"></i></span>&nbsp;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet consequatur, dolor
								praesentium, facilis recusandae architecto nesciunt, beatae sint tempora voluptate
								doloremque fugiat? Quidem molestias quo aspernatur hic. Dolor, ab non?&nbsp;<span><i class="fa-solid fa-quote-right"></i></span></p>
							<h4 class="text-white">[nama pengguna]</h4>
						</div>
						<div class="p-2">

							<p style="text-align: justify;"><span><i class="fa-solid fa-quote-left"></i></span>&nbsp;Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus odio quo velit at
								iste excepturi inventore impedit dolorum sapiente ab repellendus reiciendis sunt
								reprehenderit debitis tempore maxime, nostrum dolor saepe!&nbsp;<span><i class="fa-solid fa-quote-right"></i></span></p>
							<h4 class="text-white">[nama pengguna]</h4>
						</div>
						<div class="p-2">
							<p style="text-align: justify;"><span><i class="fa-solid fa-quote-left"></i></span>&nbsp;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut veniam excepturi quo
								dignissimos necessitatibus maiores, consequatur rem. Excepturi dicta est delectus vitae
								sint optio sequi ipsam ipsum nulla, qui mollitia?&nbsp;<span><i class="fa-solid fa-quote-right"></i></span></p>
							<h4 class="text-white">[nama pengguna]</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end testimonials -->

	<!-- footer -->
	<?php $this->load->view('_partials/pages/footer') ?>
	<!-- end footer -->

</body>

</html>
