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
		$day[] = (string)$row->id_prediksi;
		$s[] = (int)$row->s; //ambil bulan
		$i[] = (int)$row->i; //ambil nilai
		$r[] = (int)$row->r;

	 }
	// echo json_encode($day);
	//// echo json_encode($i);
	// echo json_encode($r);
	//die();
	?>
	<script src=" <?php echo base_url('assets/js/chart.min.js') ?>"></script>
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
								</div>
								<!-- <div id="user-statistics"></div> -->
								<!-- <div id="amlinechart5"></div> -->
	 							<center>
								<!-- <img src="<?php echo base_url('assets/images/sir.jpg')?>" width="68%" height="70%"> -->
								<!-- <div id="verview-shart"></div> -->
								</center>
								<canvas id="speedChart"></canvas>
								
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
		<?php
		console.log($s);
		?>

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
	
	<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
	<script src="https://www.amcharts.com/lib/3/serial.js"></script>
	<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
	<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
	<?php
	 $prediksi2= $this->db->query('select * from tb_prediksi_sir')->result();
	 $result2 = array();
	 foreach ($prediksi2 as $row) {
		//$day[] = $row->id_prediksi;
		//$s[] = $row->s; //ambil bulan
		//$i[] = $row->i; //ambil nilai
		//$r[] = $row->r;
		//var_dump($prediksi2);
		//die();
		
		$result2[] = array(
		'hari'   => $row->id_prediksi,
      's'   => $row->s);
	  
	 }
	 //var_dump($result2);
	 echo json_encode($result2);
	?>
	<script>	
    var chart = AmCharts.makeChart("amlinechart5", {
        "type": "serial",
        "theme": "light",
        "marginRight": 20,
        "marginTop": 17,
        "autoMarginOffset": 20,
        "dataProvider": [{
            "date": "2012-03-01",
            "price": 30
        },
		{
            "date": "2012-07-29",
            "value": 20
        },
		{
            "date": "2012-07-29",
            "value": 20
        },
		{
            "date": "2012-07-29",
            "value": 20
        },
		{
            "date": "2012-07-29",
            "value": 15
        }
	],
        "valueAxes": [{
            "logarithmic": true,
            "dashLength": 1,
            "guides": [{
                "dashLength": 6,
                "inside": true,
                "label": "average",
                "lineAlpha": 1,
                "value": 90.4
            }],
            "position": "left"
        }],
        "graphs": [{
            "bullet": "round",
            "id": "g1",
            "bulletBorderAlpha": 1,
            "bulletColor": "#FFFFFF",
            "bulletSize": 7,
            "lineThickness": 2,
            "title": "Price",
            "type": "smoothedLine",
            "useLineColorForBulletBorder": true,
            "valueField": "price"
        }],
        "chartScrollbar": {},
        "chartCursor": {
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "valueLineAlpha": 0.5,
            "fullWidth": true,
            "cursorAlpha": 0.05
        },
        "dataDateFormat": "YYYY-MM-DD",
        "categoryField": "date",
        "categoryAxis": {
            "parseDates": true
        },
        "export": {
            "enabled": false
        }
    });

    chart.addListener("dataUpdated", zoomChart);

    function zoomChart() {
        chart.zoomToDates(new Date(2012, 2, 2), new Date(2012, 2, 10));
    }

	// zingchart.render({
    //     id: 'coba',
    //     data: chart,
    //     height: "100%",
    //     width: "100%"
    // });

	</script>
	<script>
		 var speedCanvas = document.getElementById("speedChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;
var dataFirst = {
    label: "Suspected",
    data: <?php echo json_encode($s)?>, 
    lineTension: 0.3,
    fill: false,
    borderColor: 'red',
    backgroundColor: 'transparent',
    pointBorderColor: 'red',
    pointBackgroundColor: 'lightgreen',
    pointRadius: 5,
    pointHoverRadius: 15,
    pointHitRadius: 30,
    pointBorderWidth: 2,
    pointStyle: 'rect'
  };

var dataSecond = {
    label: "Infected",
    data: <?php echo json_encode($i)?>,
    lineTension: 0.3,
    fill: false,
    borderColor: 'purple',
    backgroundColor: 'transparent',
    pointBorderColor: 'purple',
    pointBackgroundColor: 'lightgreen',
    pointRadius: 5,
    pointHoverRadius: 15,
    pointHitRadius: 30,
    pointBorderWidth: 2
  };

  var datathird = {
    label: "Recovered",
    data: <?php echo json_encode($r)?>,
    lineTension: 0.3,
    fill: false,
    borderColor: 'green',
    backgroundColor: 'transparent',
    pointBorderColor: 'blue',
    pointBackgroundColor: 'lightgreen',
    pointRadius: 5,
    pointHoverRadius: 15,
    pointHitRadius: 30,
    pointBorderWidth: 2
  };

var speedData = {
  labels: <?php echo json_encode($day) ?>, //ini "" sama ab?isinya id_prediksi itu ab $day
  datasets: [dataFirst, dataSecond,datathird]
};

var chartOptions = {
  legend: {
    display: true,
    position: 'top',
    labels: {
      boxWidth: 80,
      fontColor: 'black'
    }
  }
};

var lineChart = new Chart(speedCanvas, {
  type: 'line',
  data: speedData,
  options: chartOptions
});
// console.log(<?php echo json_encode($s)?>);
		</script>

	<?php
    $this->load->view('template/js');
    ?>
    <!-- all line chart activation -->

		<?php
    $this->load->view('template/foot');
    ?>
