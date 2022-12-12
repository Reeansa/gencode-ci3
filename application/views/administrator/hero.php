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
					<div class="page-header">
						<h2 class="header-title">Hero Carousel</h2>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="row m-b-30">
								<div class="col-lg-8">
									<div class="d-md-flex">
										<div class="m-b-10">
											<select class="custom-select" style="min-width: 180px;">
												<option value="all">All</option>
												<option value="approved">Approved </option>
												<option value="not been approved">Not been approved</option>
												<option value="reject">Reject</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-lg-4 text-right">
									<a href="<?= site_url('administrator/hero/add') ?>"><button class="btn btn-primary">
											<i class="anticon anticon-plus-circle m-r-5"></i>
											<span>Add Product</span>
										</button></a>
								</div>
							</div>
							<?php echo $this->session->flashdata('message'); ?>
							<div class="table-responsive">
								<table class="table table-hover e-commerce-table">
									<thead>
										<tr>
											<th>
												<div class="checkbox">
													<input id="checkAll" type="checkbox">
													<label for="checkAll" class="m-b-0"></label>
												</div>
											</th>
											<th>ID</th>
											<th>Judul</th>
											<th>Status</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i = 1;
										foreach ($data as $post) { ?>
											<tr>
												<td>
													<div class="checkbox">
														<input id="check-item-1" type="checkbox">
														<label for="check-item-1" class="m-b-0"></label>
													</div>
												</td>
												<td>
													<?= $i++; ?>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<img class="img-fluid rounded" src="<?= base_url('assets/images/hero/'.$post->image) ?>" style="max-width: 60px" alt="">
														<h6 class="m-b-0 m-l-10"><?= $post->judul ?></h6>
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<div class="badge badge-success badge-dot m-r-10"></div>
														<div><?= $post->status ?></div>
													</div>
												</td>
												<td>
													<a href="#"><button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
														<i class="anticon anticon-edit"></i>
													</button></a>
													<a href="#"><button class="btn btn-icon btn-hover btn-sm btn-rounded">
														<i class="anticon anticon-delete"></i>
													</button></a>
												</td>
											</tr>
										<?php $i++;
										} ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<?php $this->load->view('_partials/administrator/footer') ?>
				</div>
				<!-- Page Container END -->

				<!-- Search Start-->
			</div>
		</div>

		<!-- Core Vendors JS -->
		<script src="<?= base_url('assets/js/vendors.min.js') ?>"></script>

		<!-- page js -->
		<script src="<?= base_url('assets/vendors/datatables/jquery.dataTables.min.js') ?>"></script>
		<script src="<?= base_url('assets/vendors/datatables/dataTables.bootstrap.min.js') ?>"></script>
		<script src="<?= base_url('assets/js/pages/e-commerce-order-list.js') ?>"></script>

		<!-- Core JS -->
		<script src="<?= base_url('assets/js/app.min.js') ?>"></script>

</body>

</html>
