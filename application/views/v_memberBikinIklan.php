
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Member : <?php echo $this->session->userdata("nama"); ?></title>
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
include 'sidebarMember.php';
?>
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">

  		<!--banner-->
		    <div class="banner">

				<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Bikin Iklan</span>
				</h2>
		    </div>
		<!--//banner-->
		<!--content-->
		<div class="content-top">




		<div class="clearfix"> </div>
		</div>
		<!---->


		<div class="content-mid">

			<div class="table-responsive">
			<form action="<?php echo base_url('index.php/member/insertIklan') ?>" method="POST" enctype="multipart/form-data">
				<table  align="center"  class="table table-bordered table-hover table-striped">
					<tr align="center">
						<td>Judul Iklan</td>
						<td>:</td>
						<td><input type="text" name="judul" size="45" style="width:100%;"/></td>
					</tr>
					<tr align="center">
						<td>Deskripsi Iklan</td>
						<td>:</td>
						<td><input type="text" name="deskripsi" style="width:100%;" /></td>
					</tr>
					<tr align="center">
						<td>NoHP Iklan</td>
						<td>:</td>
						<td><input type="number" name="nohp" style="width:100%;"/></td>
					</tr>
					<tr align="center">
						<td>Kategori Iklan</td>
						<td>:</td>
						<td><input type="text" name="kategori" style="width:100%;" /></td>
					</tr>
					<tr align="center">
						<td>harga</td>
						<td>:</td>
						<td><input type="number" name="harga" style="width:100%;" /></td>
					</tr>
					<tr align="center" >
						<td>Gambar 1</td>
						<td>:</td>
						<td><input type="file" name="gambar1" id="uploadedfile"/></td>

					</tr>
					<tr align="center" >
						<td>Gambar 2</td>
						<td>:</td>
						<td><input type="file" name="gambar2" id="uploadedfile"/></td>

					</tr>
					<tr align="center" >
						<td>Gambar 3</td>
						<td>:</td>
						<td><input type="file" name="gambar3" id="uploadedfile"/></td>

					</tr>
					<tr align="center">
					<td colspan="3"><input type="submit" name="submit"/></td>
				</tr>

				</table>
			</form>
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
