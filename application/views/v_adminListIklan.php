
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Admin : <?php echo $this->session->userdata("nama"); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url('assets/css/style2.css')?>" rel='stylesheet' type='text/css' />
<!-- js -->
<link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet">
<script src="<?php echo base_url('assets/js/jquery.min.js')?>"> </script>
<!-- Mainly scripts -->
<script src="<?php echo base_url('assets/js/jquery.metisMenu.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.slimscroll.min.js')?>"></script>
<!-- Custom and plugin javascript -->
<link href="<?php echo base_url('assets/css/custom.css" rel="stylesheet')?>">
<script src="<?php echo base_url('assets/js/custom.js')?>"></script>
<script src="<?php echo base_url('assets/js/screenfull.js')?>"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}



			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});



		});
		</script>

<!--skycons-icons-->
<script src="<?php echo base_url('assets/js/skycons.js')?>"></script>
<!--//skycons-icons-->
</head>
<body>
<div id="wrapper">
<?php
include 'sidebarAdmin.php';
?>
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">

  		<!--banner-->
		    <div class="banner">

				<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>List Iklan</span>
				</h2>
		    </div>
		<!--//banner-->
		<!--content-->
		<div class="content-top">




		<div class="clearfix"> </div>
		</div>
		<!---->


		<div class="content-mid">
			<div class="row">
					<div class="col-lg-12">
							<div class="table-responsive">
									<table class="table table-bordered table-hover table-striped">
										<thead>
												<tr align="center">
													<td>Judul Iklan</td>
													<td>Detail Iklan</td>
													<td>No HP</td>
													<td>Kategori</td>
													<td>Harga</td>
													<td>Status</td>
													<td>Link</td>
													<td>      </td>
												</tr>
											</thead>

											<tbody>
												<?php foreach ($iklan as $i) {
													# code...

													echo "
														<tr>
															<td>".$i['judul_iklan'], "</td>
															<td>".$i['detail_iklan'], "</td>
															<td>".$i['no_hp_iklan'], "</td>
															<td>".$i['kategori'],"</td>
															<td>".$i['harga'],"</td>
															<td>".$i['status'],"</td>";
													echo"
															<td><a href='".base_url('index.php/home/produk/'.$i['id_iklan']),"')>LINK</a></td>
															<td><a href='".base_url('index.php/admin/verifiklan/'.$i['id_iklan']),"'onClick=\"return confirm('Verifikasi Iklan Ini?')\"\><button class=\"btn-primary\"> Verifikasi</button></a></td>
															<td><a href='".base_url('index.php/admin/hapusiklan/'.$i['id_iklan']),"' onClick=\"return confirm('Hapus Iklan Ini?')\"\><button class=\"btn-danger\"> Hapus</button></a></td>
															</tr>";
												}
											?>
										</tbody>
									</table>
							</div>
					</div>
			</div>
			<div class="col-md-7 mid-content-top">

		<!--//sreen-gallery-cursual---->
		<!-- requried-jsfiles-for owl -->
		<link href="<?php echo base_url('assets/css/owl.carousel.css')?>" rel="stylesheet">
		<script src="<?php echo base_url('assets/js/owl.carousel.js')?>"></script>
			<script>
				$(document).ready(function() {
					$("#owl-demo").owlCarousel({
						items : 3,
						lazyLoad : true,
						autoPlay : true,
						pagination : true,
						nav:true,
					});
				});
			</script>
		<!-- //requried-jsfiles-for owl -->
			</div>
			<div class="clearfix"> </div>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     </div>
<!---->
<!--scrolling js-->
	<script src="<?php echo base_url('assets/js/jquery.nicescroll.js')?>"></script>
	<script src="<?php echo base_url('assets/js/scripts.js')?>"></script>
	<!--//scrolling js-->
	<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"> </script>
</body>
</html>
