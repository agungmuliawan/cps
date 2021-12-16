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
							<h4 class="page-title pull-left">Proses Prediksi Metode SIR</h4>
							<ul class="breadcrumbs pull-left">
								<li><a href="index.html">Home</a></li>
								<li><span>Prediksi SIR</span></li>
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
				<?php echo form_open_multipart('admin/C_sir/proc'); ?>
				<div class="form-group">
					<label for="example-text-input" class="col-form-label">Susceptible (S)</label>
					<input class="form-control" name="s" type="text" placeholder="Input S..." required">
				</div>
				<div class="form-group">
					<label for="example-text-input" class="col-form-label">Infected (I)</label>
					<input class="form-control" name="i" type="text" placeholder="Input I..." required">
					<div class="form-group">
						<label for="example-text-input" class="col-form-label">Recovered (R)</label>
						<input class="form-control" name="r" type="text" placeholder="Input R..." required">
					</div>
					<div class="form-group">
						<label for="example-text-input" class="col-form-label">Banyak Hari Prediksi</label>
						<input class="form-control" name="jml" type="text" placeholder="Input Banyak Hari..." required">
					</div>
				</div>

				<button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
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
