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
								<li><span>Data Penjadwalan</span></li>
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
				<div class="row">

					<!-- seo fact area start -->
					<div class="col-12 mt-5">
						<div class="card">
							<div class="card-body">
								<?php // echo form_open_multipart('admin/C_modul/proses');
									echo form_open_multipart('admin/C_modul/proses_baru');?>
								<div class="form-group">
									<label for="example-text-input" class="col-form-label">Jumlah Perawat</label>
									<?php 
                                            $resultP= $this->db->query("SELECT COUNT(id_perawat) as jumlah FROM tb_perawat")->result();
                                            foreach ($resultP as $row) {
                                            ?>
									<input class="form-control" name="jumlah_perawat" value="<?php echo $row->jumlah?>"
										readonly>
									<?php } ?>
								</div>
								<label class="col-md-2" style="text-align:left;">Pilih Tanggal</label>
								<div class="col-md-3">
									<select class="form-control" name="tgl" id="tgl">
										<?php 
                                            $result= $this->db->query("SELECT * FROM tb_libur")->result();
                                            ?>
										<?php foreach ($result as $row) { ?>
										<option value="<?php echo $row->tgl ?>">
											<?php echo $row->tgl ?> / <?php echo $row->libur ?>
										</option>
										<?php } ?>

									</select>
								</div>
								<label class="col-md-2" style="text-align:left;">Pilih Pegawai Libur</label>
								<div class="col-md-3">
									<select class="form-control" name="id_perawat[]" id="id_perawat" multiple style="width: 200%;">
										<?php 
                                            $result= $this->db->query("SELECT * FROM tb_perawat")->result();
                                            ?>
										<?php foreach ($result as $row) { ?>
										<option value="<?php echo $row->id_perawat ?>">
											<?php echo $row->nama_perawat ?> / <?php echo $row->jk ?>
										</option>
										<?php } ?>

									</select>
								</div>
								<div class="col-md-2 form-group">
									<input type="submit" value="Proses Penjadwalan" class="btn btn-dark mb-3">
									<a href="<?php echo site_url('admin/C_modul/proses');?>" button type="button"
									class="btn btn-dark mb-3">Lihat Penjadwalan</button></a>
								</div>
								
								<!-- <h4 class="header-title">Data Table Dark</h4> -->
								<!-- <div class="data-tables datatable-dark">
									<table id="dataTable3" class="text-center">
										<thead class="text-capitalize">
											<tr>
												<th>No</th>
												<th>Nama Perawat</th>
												<th>Tanggal Masuk</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<?php
										$no = 1;
										if ($penjadwalan == 0) {
										//echo "<script>alert('Data penjadwalan kosong')</script>";
										}
										else {
										/*while($data = mysql_fetch_array($query))*/
										foreach ($penjadwalan as $row) {
											?>
										<tr>
											<td style="text-align: center;"><?php echo $no;?></td>
											<td><?php echo $row->nama_perawat?></td>
											<td><?php echo $row->status?></td>
											<td>
												<a href="<?php echo base_url("assets/modul/$row->id_perawat");?>" span
													class="btn btn-success"><span class=" glyphicon glyphicon-edit">
														download</span></a>

											</td>
										</tr>
										<?php
                                        $no++;
                                        }
                                    }
                                    ?>
										</tbody>
									</table>
							</div> -->
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- main content area end -->
	<!-- footer area start-->
	<footer>
		<div class="footer-area">
			<p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.
			</p>
		</div>
	</footer>
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
