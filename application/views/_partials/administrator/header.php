<div class="header">
	<div class="logo logo-dark">
		<a href="index.html">
			<img src="<?= base_url('assets/images/icons/gencode.png') ?>" width="30" height="30" alt="Logo">
			<img class="logo-fold" src="<?= base_url('assets/images/icons/gencode.png') ?>" width="30" height="30" alt="Logo">
		</a>
	</div>
	<div class="logo logo-white">
		<a href="index.html">
			<img src="<?= base_url('assets/images/icons/gencode-white.png') ?>" width="30" height="30" alt="Logo">
			<img class="logo-fold" src="<?= base_url('assets/images/icons/gencode-white.png') ?>" width="30" height="30" alt="Logo">
		</a>
	</div>
	<div class="nav-wrap">
		<ul class="nav-left">
			<li class="desktop-toggle">
				<a href="javascript:void(0);">
					<i class="anticon"></i>
				</a>
			</li>
			<li class="mobile-toggle">
				<a href="javascript:void(0);">
					<i class="anticon"></i>
				</a>
			</li>
		</ul>
		<ul class="nav-right">
			<li class="dropdown dropdown-animated scale-left">
				<div class="pointer" data-toggle="dropdown" aria-expanded="false">
					<div class="avatar avatar-image  m-h-10 m-r-15">
						<a href="#"><i class="anticon anticon-user"></i></a>
					</div>
				</div>
				<div class="p-b-15 p-t-20 dropdown-menu pop-profile" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-150px, 40px, 0px);">
					<div class="p-h-20 p-b-15 m-b-10 border-bottom">
						<div class="d-flex m-r-50">
							<div class="m-l-10">
								<p class="m-b-0 text-dark font-weight-semibold"><?= $this->session->userdata('name') ?></p>
							</div>
						</div>
					</div>
					<a href="<?= site_url('administrator/dashboard/logout') ?>" class="dropdown-item d-block p-h-15 p-v-10">
						<div class="d-flex align-items-center justify-content-between">
							<div>
								<i class="anticon opacity-04 font-size-16 anticon-logout"></i>
								<span class="m-l-10">Logout</span>
							</div>
						</div>
					</a>
				</div>
			</li>
		</ul>
	</div>
</div>
