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
								<li><span>Data Modul</span></li>
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
								<!-- <h4 class="header-title">Data Table Dark</h4> -->
								<a href="<?php echo site_url('admin/C_sir/truncate_data');?>" button type="button"
									class="btn btn-dark mb-3">Truncate Data</button></a>
								<div class="data-tables datatable-dark">
									<table id="dataTable3" class="text-center">
										<thead class="text-capitalize">
											<tr>
												<th>No</th>
												<th>Susceptible</th>
												<th>Invective</th>
												<th>Recovered</th>
												<th>Hari Ke</th>
											</tr>
										</thead>
										<?php
										$no = 1;
										if ($prediksi == 0) {
										echo "<script>alert('Data modul kosong')</script>";
										}
										else {
										/*while($data = mysql_fetch_array($query))*/
										foreach ($prediksi as $row) {
											?>
										<tr>
											<td style="text-align: center;"><?php echo $no;?></td>
											<td><?php echo $row->s?></td>
											<td><?php echo $row->i?></td>
											<td><?php echo $row->r?></td>
                                            <td><?php echo $no?></td>
											<!-- <td>
												<a href="<?php echo site_url('admin_area/C_user/hapus_data_user/'.$row->id_libur)?>"
													span class="btn btn-success"><span
														class=" glyphicon glyphicon-edit"> Edit</span></a>
                                                        <a href="<?php echo site_url('admin_area/C_user/hapus_data_user/'.$row->id_libur);?>"
													span class="btn btn-danger">Hapus</a>
												
											</td> -->
										</tr>
										<?php
                                        $no++;
                                        }
                                    }
                                    ?>
										</tbody>
									</table>
								</div>
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
