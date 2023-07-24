<body class="fixed-navbar">
	<div class="page-wrapper">
		<!-- START HEADER-->
		<header class="header">
			<div class="page-brand">
				<a class="link" href="<?= base_url('admin') ?>">
					<span class="brand">Perpustakaan
					</span>
				</a>
			</div>
			<div class="flexbox flex-1">
				<!-- START TOP-LEFT TOOLBAR-->
				<ul class="nav navbar-toolbar">
					<li>
						<a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
					</li>
				</ul>
				<!-- END TOP-LEFT TOOLBAR-->
				<!-- START TOP-RIGHT TOOLBAR-->
				<ul class="nav navbar-toolbar">
					<?php if ($this->session->userdata('username') == "") { ?>
						<li class="dropdown dropdown-notification">
							<a class="nav-link" href="<?= base_url('home') ?>"><i class="fa fa-long-arrow-left"></i>Login/Register</a>
						</li>
					<?php } else { ?>
						<li class="dropdown dropdown-user">
							<a class="nav-link dropdown-toggle link" data-toggle="dropdown">
								<img src="<?= base_url('backend/dist') ?>/assets/img/admin-avatar.png" />
								<span></span><?= $this->session->userdata('nama') ?><i class="fa fa-angle-down m-l-5"></i></a>
							<ul class="dropdown-menu dropdown-menu-right">
								<li class="dropdown-divider"></li>
								<a class="dropdown-item" href="<?= base_url('admin/logout') ?>"><i class="fa fa-power-off"></i>Logout</a>
							</ul>
						</li>
					<?php } ?>
				</ul>
				<!-- END TOP-RIGHT TOOLBAR-->
			</div>
		</header>
		<!-- END HEADER-->