<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar">
	<div id="sidebar-collapse">
		<div class="admin-block d-flex">
			<div>
				<img src="<?= base_url('backend/dist') ?>/assets/img/admin-avatar.png" width="45px" />
			</div>
			<div class="admin-info">
				<div class="font-strong"><?= $this->session->userdata('nama'); ?></div><small><?php if ($this->session->userdata('level_user') == '1') { ?>
						Admin
					<?php } elseif ($this->session->userdata('level_user') == '2') { ?>
						Siswa
					<?php } ?></small>
			</div>
		</div>
		<ul class="side-menu metismenu">
			<li>
				<a class="active" href="<?= base_url('home/siswa') ?>"><i class="sidebar-item-icon fa fa-th-large"></i>
					<span class="nav-label">Dashboard</span>
				</a>
			</li>
			<li class="heading">FEATURES</li>
			<li>
				<a href="<?= base_url('buku/buku') ?>"><i class="sidebar-item-icon fa fa-bookmark"></i>
					<span class="nav-label">Data Buku</span>
				</a>
			</li>
			<li>
				<a href="javascript:;"><i class="sidebar-item-icon fa fa-edit"></i>
					<span class="nav-label">Peminjaman Buku</span><i class="fa fa-angle-left arrow"></i></a>
				<ul class="nav-2-level collapse">
					<li>
						<a href="<?= base_url('master/peminjaman') ?>">Peminjaman Buku</a>
					</li>
					<li>
						<a href="<?= base_url('master/pengembalian') ?>">Pengembalian Buku</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>
<!-- END SIDEBAR-->