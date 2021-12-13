<?php
$this->load->view('template/head');
?>
<?php
$panggil = $this->session->userdata();
?>
<!doctype html>
<html class="no-js" lang="en">



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
							<h4 class="page-title pull-left">Dashboard</h4>
							<ul class="breadcrumbs pull-left">
								<li><a href="index.html">Home</a></li>
								<li><span>Dashboard</span></li>
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
			</div>

			<!-- page title area end -->
			
			<div class="main-content-inner">
				<div class="col-lg-12 mt-5">
					<div class="card">
					<div id="accordion5" class="according accordion-s2 gradiant-bg">
							<div class="card">
								<div class="card-header">
									<a class="collapsed card-link" data-toggle="collapse"
										href="#accordion52">
									Selamat Datang Saudara <b> <?php echo $panggil['nama']?> </b> 
								 </a>
								</div>
								<div id="accordion52" class="collapse" data-parent="#accordion5">
									<div class="card-body">
										<h4>Perhatian : </h4> <br>
										Ini adalah tugas CPS

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- seo fact area start -->

					<div class="col-lg-8">
						<div class="row">
							<div class="col-md-6 mt-5 mb-3">
								<div class="card">
									<div class="seo-fact sbg1">
										<div class="p-4 d-flex justify-content-between align-items-center">
											<div class="seofct-icon"><i class="ti-file"></i>Pasien</div>
											<?php 
										$result= $this->db->query("SELECT COUNT(id_user) as jumlah FROM tb_user")->result();
										?>
											<?php foreach ($result as $row) { ?>
											<h2><?php echo $row->jumlah ?></h2>
											<?php } ?>
										</div>
										<!-- <canvas id="seolinechart1" height="50"></canvas> -->
									</div>
								</div>
							</div>
							<div class="col-md-6 mt-md-5 mb-3">
								<div class="card">
									<div class="seo-fact sbg4">
										<div class="p-4 d-flex justify-content-between align-items-center">
											<div class="seofct-icon"><i class="ti-user"></i> User</div>
											<?php 
										$result= $this->db->query("SELECT COUNT(id_user) as jumlah FROM tb_user")->result();
										?>
											<?php foreach ($result as $row) { ?>
											<h2><?php echo $row->jumlah ?></h2>
											<?php } ?>
										</div>
										<!--    <canvas id="seolinechart2" height="50"></canvas> -->
									</div>
								</div>
							</div>
							<div class="col-md-6 mt-md-5 mb-3">
								<div class="card">
									<div class="seo-fact sbg2">
										<div class="p-4 d-flex justify-content-between align-items-center">
											<div class="seofct-icon"><i class="ti-download"></i> Sembuh</div>
											<h2>1312</h2>
										</div>

									</div>
								</div>
							</div>
							<div class="col-md-6 mt-md-5 mb-4">
								<div class="card">
									<div class="seo-fact sbg3">
										<div class="p-4 d-flex justify-content-between align-items-center">
											<div class="seofct-icon"><i class="ti-upload"></i> Konfirmasi</div>
											<h2>2311</h2>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- timeline area start -->
					<div class="col-xl-3 col-ml-4 col-lg-4 mt-1">
						<div class="card">
							<div class="card-body">
								<h4 class="header-title">Pengumuman</h4>
								<div class="timeline-area">
									<?php
                                    foreach ($daftar_pengumuman as $row) {
										
									?>


									<div class="timeline-task">
										<div class="icon bg2">
											<i class="fa fa-exclamation-triangle"></i>
										</div>
										<div class="tm-title">
											<h4><?php echo $row->judul ?></h4>
											<span class="time"><i class="ti-time "></i>
												<?php echo $row->deadline?>
											</span>
										</div>
										<p>
											<?php echo $row->isi?>
										</p>
									</div>
									<?php
									}
									?>

								</div>
							</div>
						</div>
					</div>
					<!-- timeline area end -->
					<!-- map area end -->
					<!-- testimonial area start -->
					<!-- testimonial area end -->
				</div>
			</div>
		</div>
		<!-- main content area end -->
		<!-- footer area start-->

		<!-- footer area end-->
	</div>
	<!-- page container area end -->
	<!-- offset area start -->

	<!-- offset area end -->
	<!-- jquery latest version -->


	<?php
    $this->load->view('template/js');
    ?>
	<?php
    $this->load->view('template/foot');
    ?>
