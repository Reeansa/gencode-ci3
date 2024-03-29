<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/administrator/head'); ?>

<body>
	<div class="app">
		<div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('assets/images/others/login-3.png')">
			<div class="d-flex flex-column justify-content-between w-100">
				<div class="container d-flex h-100">
					<div class="row align-items-center w-100">
						<div class="col-md-7 col-lg-5 m-h-auto">
							<div class="card shadow-lg">
								<div class="card-body">
									<div class="d-flex align-items-center justify-content-between m-b-30">
										<a href="<?= site_url('/') ?>"><img class="img-fluid" alt="" src="<?= base_url('assets/images/icons/gencode.png') ?>" width="50" height="50"></a>
										<h2 class="m-b-0">Sign In</h2>
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
									<form action="<?= site_url('administrator/auth/cek_login') ?>" method="POST">
										<div class="form-group">
											<label class="font-weight-semibold" for="userName">Username:</label>
											<div class="input-affix">
												<i class="prefix-icon anticon anticon-user"></i>
												<input type="text" name="username" class="form-control" id="userName" placeholder="Username">
											</div>
										</div>
										<div class="form-group">
											<label class="font-weight-semibold" for="password">Password:</label>
											<a class="float-right font-size-13 text-muted" href="">Forget Password?</a>
											<div class="input-affix m-b-10">
												<i class="prefix-icon anticon anticon-lock"></i>
												<input type="password" name="password" class="form-control" id="password" placeholder="Password">
											</div>
										</div>
										<div class="form-group">
											<div class="d-flex align-items-center justify-content-between">
												<span class="font-size-13 text-muted">
													Don't have an account?
													<a class="small" href=""> Signup</a>
												</span>
												<button class="btn btn-primary" type="submit">Sign In</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="d-none d-md-flex p-h-40 justify-content-between">
					<span class="">© 2019 ThemeNate</span>
					<ul class="list-inline">
						<li class="list-inline-item">
							<a class="text-dark text-link" href="">Legal</a>
						</li>
						<li class="list-inline-item">
							<a class="text-dark text-link" href="">Privacy</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('_partials/administrator/js') ?>
</body>

</html>
