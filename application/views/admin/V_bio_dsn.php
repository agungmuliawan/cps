<?php
$this->load->view('template/head');
?>
<!--tambahkan custom css disini-->
<?php
$panggil = $this->session->userdata();
?>

<body>
	<div id="preloader">
		<div class="loader"></div>
	</div>
	<!-- preloader area end -->
	<!-- page container area start -->
	<div class="page-container">
		<!-- sidebar menu area start -->
		<?php 
        $this->load->view('template/sidebar');
        ?>
		<!-- sidebar menu area end -->
		<!-- main content area start -->
		<div class="main-content">
			<!-- header area start -->
			<div class="header-area">
				<div class="row align-items-center">
					<!-- nav and search button -->
					<div class="col-md-6 col-sm-8 clearfix">
						<div class="nav-btn pull-left">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
					<!-- profile info & task notification -->
					<div class="col-md-6 col-sm-4 clearfix">
						<ul class="notification-area pull-right">
							<li id="full-view"><i class="ti-fullscreen"></i></li>
							<li id="full-view-exit"><i class="ti-zoom-out"></i></li>

							<li class="dropdown">
								<i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
								<div class="dropdown-menu notify-box nt-enveloper-box">
									<span class="notify-title">You have 3 new notifications <a href="#">view
											all</a></span>
									<div class="nofity-list">
										<a href="#" class="notify-item">
											<div class="notify-thumb">
												<img src="assets/images/author/author-img1.jpg" alt="image">
											</div>
											<div class="notify-text">
												<p>Aglae Mayer</p>
												<span class="msg">Hey I am waiting for you...</span>
												<span>3:15 PM</span>
											</div>
										</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- header area end -->
			<!-- page title area start -->
			<div class="page-title-area">
				<div class="row align-items-center">
					<div class="col-sm-6">
						<div class="breadcrumbs-area clearfix">
							<h4 class="page-title pull-left">Biodata Dosen</h4>
							<ul class="breadcrumbs pull-left">
								<li><a href="index.html">Home</a></li>
								<li><span>Biodata</span></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 clearfix">
						<div class="user-profile pull-right">
							<?php 
                            $foto = $panggil['foto'];
                            
                            ?>
							<img class="avatar user-thumb" src="<?php echo base_url('assets/images/img_user/'.$foto) ?>"
								alt="avatar">
							<h4 class="user-name dropdown-toggle" data-toggle="dropdown">
								<?php echo $panggil['nama'] ?><i class="fa fa-angle-down"></i></h4>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Message</a>
								<a class="dropdown-item" href="#">Settings</a>
								<a class="dropdown-item" href="<?php echo site_url('Login/logout') ?>">Log Out</a>
							</div>
						</div>
					</div>
				</div>
                <?php
                $nip_user = $bio_dsn->nip_user;
                $nama = $bio_dsn->nama;
                $password = $bio_dsn->password;
                $cabang = $bio_dsn->cabang;
                //$prodi = $bio_dsn->prodi;
                $status = $bio_dsn->status;
               // die();
                ?>
				<form class="form-horizontal" action="<?php echo site_url('dosen/C_bio_dsn/proses_edit_dsn/'.$bio_dsn->id_user); ?>" method="post" enctype='multipart/form-data'>
				<div class="form-group">
					<label for="example-text-input" class="col-form-label">NIP / NIM User</label>
					<input class="form-control" name="nip_user" value="<?php echo $nip_user?>" type="text" readonly>
				</div>
				<div class="form-group">
					<label for="example-text-input" class="col-form-label">Nama Lengkap</label>
					<input class="form-control" name="nama" value="<?php echo $nama?>" type="text" required">
				</div>
				<div class="form-group">
					<label for="example-text-input" class="col-form-label">Password</label>
					<input class="form-control" name="password" value="<?php echo $password?>" type="password" required">
				</div>
                <div class="form-group">
					<label for="example-text-input" class="col-form-label">Cabang Kampus</label>
					<input class="form-control" name="cabang" value="<?php echo $cabang?>" type="text" readonly>
				</div>
                <div class="form-group">
					<label for="example-text-input" class="col-form-label">Status</label>
					<input class="form-control" name="status" value="<?php echo $status?>" type="text" readonly>
				</div>
				<button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Update</button>
			</div>
			<!-- page title area end -->
			<div class="main-content-inner">
				<div class="row">
					<!-- seo fact area start -->
					<div class="col-12 mt-5">
						<div class="card">
							<div class="card-body">
								<!-- <h4 class="header-title">Data Table Dark</h4> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
    $this->load->view('template/js');
    ?>
	<?php
    $this->load->view('template/foot');
    ?>
