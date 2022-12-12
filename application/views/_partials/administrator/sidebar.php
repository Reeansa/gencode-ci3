<div class="side-nav">
	<div class="side-nav-inner">
		<ul class="side-nav-menu scrollable">
			<li class="nav-item dropdown">
				<a href="<?= site_url('administrator/dashboard') ?>">
					<span class="icon-holder">
						<i class="anticon anticon-dashboard"></i>
					</span>
					<span class="title">Dashboard</span>
				</a>
			</li>
			<li class="nav-item dropdown">
				<a class="dropdown-toggle" href="javascript:void(0);">
					<span class="icon-holder">
						<i class="anticon anticon-file"></i>
					</span>
					<span class="title">Pages</span>
					<span class="arrow">
						<i class="arrow-icon"></i>
					</span>
				</a>
				<ul class="dropdown-menu">
					<li class="nav-item dropdown">
						<a href="javascript:void(0);">
							<span>Shop</span>
							<span class="arrow">
								<i class="arrow-icon"></i>
							</span>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="<?= site_url('administrator/products') ?>">Products</a>
							</li>
						</ul>
					</li>
				</ul>
				<ul class="dropdown-menu">
					<li class="nav-item dropdown">
						<a href="<?= site_url('administrator/hero') ?>">
							<span>Hero</span>
						</a>
					</li>
				</ul>
				<ul class="dropdown-menu">
					<li class="nav-item dropdown">
						<a href="<?= site_url('administrator/about') ?>">
							<span>About</span>
						</a>
					</li>
				</ul>
				<ul class="dropdown-menu">
					<li class="nav-item dropdown">
						<a href="javascript:void(0);">
							<span>Contact Us</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a class="dropdown-toggle" href="javascript:void(0);">
					<span class="icon-holder">
						<i class="anticon anticon-user"></i>
					</span>
					<span class="title">Accounts</span>
					<span class="arrow">
						<i class="arrow-icon"></i>
					</span>
				</a>
				<ul class="dropdown-menu">
					<li class="nav-item dropdown">
						<a href="<?= site_url('administrator/user') ?>">
							<span>Accounts List</span>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</div>
