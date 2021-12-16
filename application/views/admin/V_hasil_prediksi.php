<?php
$this->load->view('template/head');
?>
<!--tambahkan custom css disini-->
<?php
$panggil = $this->session->userdata();
?>
	<?php
	 $prediksi = $this->db->query('select * from tb_prediksi_sir')->result();

	 foreach ($prediksi as $row) {
		$day[] = $row->id_prediksi;
		$s[] = $row->s; //ambil bulan
		$i[] = $row->i; //ambil nilai
		$r[] = $row->r;
	 }
	//echo json_encode($day);
	// die();
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
					<div class="col-xl-12 col-lg-10">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="header-title mb-0">Overview</h4>
									<!-- <select class="custome-select border-0 pr-3">
										<option selected>Last 24 Hours</option>
										<option value="0">01 July 2018</option>
									</select> -->
									<!-- oke le lanjut -->
								</div>
								
								<div id="verview-shart"></div>
								
								<!-- <canvas id="canvas" width="1000" height="280"></canvas> -->
							</div>
						</div>
					</div>
				</div>
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
					<p>© Copyright 2018. All right reserved. Template by <a
							href="https://colorlib.com/wp/">Colorlib</a>.
					</p>
				</div>
			</footer>
			<!-- footer area end-->
		</div>

    <!-- <script src="https://cdn.zingchart.com/zingchart.min.js"></script> -->
	<script src="<?php echo base_url('assets/js/zingchart.min.js')?>"></script>

	<script>

		var myConfig = {
        "type": "line",

        "scale-x": { //X-Axis
            "labels": <?php echo json_encode($day)?>,
            "label": {
                "font-size": 14,
                "offset-x": 0,
            },
            "item": { //Scale Items (scale values or labels)
                "font-size": 10,
            },
            "guide": { //Guides
                "visible": false,
                "line-style": "solid", //"solid", "dotted", "dashed", "dashdot"
                "alpha": 1
            }
        },
        "plot": { "aspect": "spline" },
        "series": [{
                "values": <?php echo json_encode($s)?>,
                "line-color": "red",
                /* "dotted" | "dashed" */
                "line-width": 5 /* in pixels */ ,
                "marker": { /* Marker object */
                    "background-color": "#D79D3B",
                    /* hexadecimal or RGB value */
                    "size": 5,
                    /* in pixels */
                    "border-color": "#D79D3B",
                    /* hexadecimal or RBG value */
                }
            },
            {
                "values": <?php echo json_encode($r)?>,
                "line-color": "#228B22",
                /* "dotted" | "dashed" */
                "line-width": 5 /* in pixels */ ,
                "marker": { /* Marker object */
                    "background-color": "#067dce",
                    /* hexadecimal or RGB value */
                    "size": 5,
                    /* in pixels */
                    "border-color": "#067dce",
                    /* hexadecimal or RBG value */
                }
            },
			{
                "values": <?php echo json_encode($i)?>,
                "line-color": "#0884D9",
                /* "dotted" | "dashed" */
                "line-width": 5 /* in pixels */ ,
                "marker": { /* Marker object */
                    "background-color": "#067dce",
                    /* hexadecimal or RGB value */
                    "size": 5,
                    /* in pixels */
                    "border-color": "#067dce",
                    /* hexadecimal or RBG value */
                }
            }
			
        ]
    };

    zingchart.render({
        id: 'verview-shart',
        data: myConfig,
        height: "100%",
        width: "100%"
    });
	</script>
	

	<?php
    $this->load->view('template/js');
    ?>
    <!-- all line chart activation -->

		<?php
    $this->load->view('template/foot');
    ?>