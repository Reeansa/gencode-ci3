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
						<h2 class="header-title">Orders List</h2>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="row m-b-30">
								<div class="col-lg-8">
									<div class="d-md-flex">
										<div class="m-b-10 m-r-15">
											<select class="custom-select" style="min-width: 180px;">
												<option selected>Catergory</option>
												<option value="all">All</option>
												<option value="homeDeco">Home Decoration</option>
												<option value="eletronic">Eletronic</option>
												<option value="jewellery">Jewellery</option>
											</select>
										</div>
										<div class="m-b-10">
											<select class="custom-select" style="min-width: 180px;">
												<option selected>Status</option>
												<option value="all">All</option>
												<option value="inStock">In Stock </option>
												<option value="outOfStock">Out of Stock</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-lg-4 text-right">
									<button class="btn btn-primary">
										<i class="anticon anticon-plus-circle m-r-5"></i>
										<span>Add Product</span>
									</button>
								</div>
							</div>
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
											<th>Product</th>
											<th>Category</th>
											<th>Price</th>
											<th>Stock Left</th>
											<th>Status</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="checkbox">
													<input id="check-item-1" type="checkbox">
													<label for="check-item-1" class="m-b-0"></label>
												</div>
											</td>
											<td>
												#31
											</td>
											<td>
												<div class="d-flex align-items-center">
													<img class="img-fluid rounded" src="assets/images/others/thumb-9.jpg" style="max-width: 60px" alt="">
													<h6 class="m-b-0 m-l-10">Gray Sofa</h6>
												</div>
											</td>
											<td>Home Decoration</td>
											<td>$912.00</td>
											<td>20</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="badge badge-success badge-dot m-r-10"></div>
													<div>In Stock</div>
												</div>
											</td>
											<td>
												<button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
													<i class="anticon anticon-edit"></i>
												</button>
												<button class="btn btn-icon btn-hover btn-sm btn-rounded">
													<i class="anticon anticon-delete"></i>
												</button>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- Page Container END -->

				<!-- Search Start-->
				<div class="modal modal-left fade search" id="search-drawer">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header justify-content-between align-items-center">
								<h5 class="modal-title">Search</h5>
								<button type="button" class="close" data-dismiss="modal">
									<i class="anticon anticon-close"></i>
								</button>
							</div>
							<div class="modal-body scrollable">
								<div class="input-affix">
									<i class="prefix-icon anticon anticon-search"></i>
									<input type="text" class="form-control" placeholder="Search">
								</div>
								<!-- Content goes Here -->
							</div>
						</div>
					</div>
				</div>
				<!-- Search End-->

				<!-- Quick View START -->
				<div class="modal modal-right fade quick-view" id="quick-view">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header justify-content-between align-items-center">
								<h5 class="modal-title">Quick View</h5>
							</div>
							<div class="modal-body scrollable">
								<!-- Content goes Here -->
							</div>
						</div>
					</div>
				</div>
				<!-- Quick View END -->
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
