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
					<form action="<?= site_url('administrator/hero/create') ?>" method="POST">
						<div class="page-header no-gutters has-tab">
							<ul class="nav nav-tabs">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#product-edit-basic">Basic Info</a>
								</li>
							</ul>
						</div>
						<div class="tab-content m-t-15">
							<div class="tab-pane fade show active" id="product-edit-basic">
								<div class="card">
									<div class="card-body">
										<div class="form-group">
											<label class="font-weight-semibold" for="judul">Judul</label>
											<input type="text" class="form-control" id="judul" placeholder="Judul" value="">
										</div>
										<div class="form-group">
											<label class="font-weight-semibold" for="productBrand">Images</label>
											<div class="custom-file">
												<input type="file" name="image" class="form-control" id="customFile">
											</div>
										</div>
										<div class="form-group">
											<label class="font-weight-semibold" for="productStatus">Status</label>
											<select class="custom-select" id="productStatus">
												<option value="inStock" selected>Approved</option>
												<option value="outOfStock">Not Been Approved</option>
												<option value="outOfStock">Reject</option>
											</select>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-primary btn-block">submit</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<!-- Content Wrapper END -->

				<!-- Footer START -->
				<?php $this->load->view('_partials/administrator/footer') ?>
				<!-- Footer END -->

			</div>
			<!-- Page Container END -->
		</div>
	</div>
	<!-- Core Vendors JS -->
	<script src="<?= base_url('assets/js/vendors.min.js') ?>"></script>

	<!-- page js -->
	<script src="<?= base_url('assets/vendors/select2/select2.min.js') ?>"></script>
	<script src="<?= base_url('assets/vendors/quill/quill.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/pages/e-commerce-product-edit.js') ?>"></script>

	<!-- Core JS -->
	<script src="<?= base_url('assets/js/app.min.js') ?>"></script>

</body>

</html>
