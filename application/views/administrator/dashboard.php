<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/administrator/head') ?>
</head>

<body>
	<div class="app">
		<div class="layout">
			<!-- Header START -->
			<?php $this->load->view('_partials/administrator/header') ?>
			<!-- Header END -->

			<!-- Side Nav START -->
			<?php $this->load->view('_partials/administrator/sidebar') ?>
			<!-- Side Nav END -->

			<!-- Page Container START -->
			<div class="page-container">

				<!-- Content Wrapper START -->
				<div class="main-content">
					<?php if ($this->session->flashdata('berhasil')) : ?>
						<div class="alert alert-success">
							<div class="d-flex align-items-center justify-content-start">
								
								<span class="alert-icon">
									<i class="anticon anticon-check-o"></i>
								</span>
								<span><?= $this->session->flashdata('berhasil');?></span>
							</div>
						</div>
					<?php endif; ?>
					<div class="page-header">
						<h2 class="header-title"><?= $title ?></h2>
					</div>
					<div class="row">
						<div class="col-md-6 col-lg-3">
							<div class="card">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="avatar avatar-icon avatar-lg avatar-blue">
											<i class="fas fa-users"></i>
										</div>
										<div class="m-l-15">
											<h2 class="m-b-0"><?= $staff ?></h2>
											<p class="m-b-0 text-muted">Staff</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="card">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="avatar avatar-icon avatar-lg avatar-cyan">
											<i class="fas fa-user"></i>
										</div>
										<div class="m-l-15">
											<h2 class="m-b-0"><?= $admin ?></h2>
											<p class="m-b-0 text-muted">Manager</p>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="card">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="avatar avatar-icon avatar-lg avatar-gold">
											<i class="fas fa-box"></i>
										</div>
										<div class="m-l-15">
											<h2 class="m-b-0">xxxx</h2>
											<p class="m-b-0 text-muted">Products</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="card">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="avatar avatar-icon avatar-lg avatar-purple">
											<i class="fas fa-heart"></i>
										</div>
										<div class="m-l-15">
											<h2 class="m-b-0">xxxx</h2>
											<p class="m-b-0 text-muted">Customers</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Content goes Here -->
				</div>
				<!-- Content Wrapper END -->

				<!-- Footer START -->
				<?php $this->load->view('_partials/administrator/footer') ?>
				<!-- Footer END -->

			</div>
			<!-- Page Container END -->
	</div>

	<?php $this->load->view('_partials/administrator/js') ?>

</body>

</html>
