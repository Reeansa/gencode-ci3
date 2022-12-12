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
						<h2 class="header-title">Accounts List</h2>
					</div>
					<?php if ($this->session->flashdata('berhasil')) : ?>
						<div class="alert alert-success">
							<div class="d-flex align-items-center justify-content-start">

								<span class="alert-icon">
									<i class="anticon anticon-check-o"></i>
								</span>
								<span><?= $this->session->flashdata('berhasil'); ?></span>
							</div>
						</div>
					<?php endif; ?>
					<div class="card">
						<div class="card-body">
							<div class="row m-b-30">
								<div class="col-lg-8">
								</div>
								<div class="col-lg-4 text-right">
									<a href="<?= site_url('administrator/user/add') ?>"><button class="btn btn-primary">
											<i class="anticon anticon-plus-circle m-r-5"></i>
											<span>Add Accounts</span>
										</button></a>
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
											<th>Nama</th>
											<th>Username</th>
											<th>Status</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i = 1;
										$this->db->select('*');
										$this->db->from('user');
										$this->db->join('role', 'role.id_role = user.id_role');
										$user = $this->db->get()->result_array();
										foreach ($user as $data) : ?>
											<tr>
												<td>
													<div class="checkbox">
														<input id="check-item-1" type="checkbox">
														<label for="check-item-1" class="m-b-0"></label>
													</div>
												</td>
												<td><?= $i++ ?></td>
												<td><?= $data['name'] ?></td>
												<td><?= $data['username'] ?></td>
												<td><?= $data['role'] ?></td>
												<td>
													<a href="<?= base_url('administrator/user/edit/') . $data['id_user'] ?>"><button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
															<i class="anticon anticon-edit"></i></button></a>
													<a href="<?= base_url('administrator/user/delete/') . $data['id_user'] ?>" onclick="return confirm('Yakin mau hapus data <?= $data['name'] ?>?');"><button class="btn btn-icon btn-hover btn-sm btn-rounded">
															<i class="anticon anticon-delete"></i></button></a>
												</td>
											</tr>
										<?php endforeach ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- Page Container END -->
				<?php $this->load->view('_partials/administrator/footer') ?>
			</div>
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
