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
			<div class="page-container">
				<div class="main-content">
					<a href="#" id="load_home">home</a>
					<div id="content">
						
					</div>

				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view('_partials/administrator/footer') ?>
	<?php $this->load->view('_partials/administrator/js') ?>
</body>
</html>
