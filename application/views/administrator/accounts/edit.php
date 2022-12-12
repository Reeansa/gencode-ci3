<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/administrator/head') ?>
</head>

<body>
	<div class="app">
		<div class="layout">
			<?php $this->load->view('_partials/administrator/header') ?>
			<?php $this->load->view('_partials/administrator/sidebar') ?>

			<!-- Page Container START -->
			<div class="page-container">


				<!-- Content Wrapper START -->
				<div class="main-content">
					<div class="page-header no-gutters has-tab">
						<h2 class="font-weight-normal">Setting</h2>
						<ul class="nav nav-tabs">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tab-account">Account</a>
							</li>
						</ul>
					</div>
					<div class="container">
						<div class="tab-content m-t-15">
							<div class="tab-pane fade show active" id="tab-account">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Basic Infomation</h4>
									</div>
									<?php if ($this->session->flashdata('gagal')) : ?>
										<div class="alert alert-danger">
											<div class="d-flex justify-content-start">
												<span class="alert-icon m-r-20 font-size-30">
													<i class="anticon anticon-close-circle"></i>
												</span>
												<div>
													<h5 class="alert-heading">Error</h5>
													<p><?= $this->session->flashdata('gagal'); ?></p>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<div class="card-body">
										<form action="<?= site_url('administrator/user/update') ?>" method="POST">
											<div class="form-row">
												<div class="form-group col-md-6">
													<label class="font-weight-semibold" for="userName">Name:</label>
													<input type="hidden" name="id" value="<?= $user['id_user'] ?>">
													<input type="text" class="form-control" id="userName" placeholder="Name" name="name" value="<?= $user['name'] ?>">
												</div>
												<div class="form-group col-md-6">
													<label class="font-weight-semibold" for="email">Username:</label>
													<input type="text" class="form-control" id="email" placeholder="Username" name="username" value="<?= $user['username'] ?>">
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-4">
													<label class="font-weight-semibold" for="phoneNumber">Password:</label>
													<input type="password" class="form-control" id="phoneNumber" placeholder="Password" name="password">
												</div>
												<div class="form-group col-md-4">
													<label class="font-weight-semibold" for="role">Role</label>
													<select id="role" class="form-control" name="role">
														<option value="1">Staff</option>
														<option value="2">Manager</option>
													</select>
												</div>
												<div class="form-group col-md-4">
													<label class="font-weight-semibold" for="role">Button</label>
													<button type="submit" class="btn btn-primary m-r-5 form-control">Update</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Content Wrapper END -->

				<!-- Footer START -->
				<?php $this->load->view('_partials/administrator/footer') ?>
				<!-- Footer END -->

			</div>
		</div>
	</div>
	<!-- Page Container END -->
	<!-- Core Vendors JS -->
	<script src="<?= base_url('assets/js/vendors.min.js') ?>"></script>

	<!-- Core JS -->
	<script src="<?= base_url('assets/js/app.min.js') ?>"></script>
</body>

</html>
