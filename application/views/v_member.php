
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
<meta name="keywords" content=" Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
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
				<a href="index.html">Member</a>
				<i class="fa fa-angle-right"></i>
				<span>Profile</span>
				</h2>
		    </div>
		<!--//banner-->
		<!--content-->
		<div class=" profile">
			<?php foreach ($hasil as $i) {
			}
			?>
 		<div class="profile-bottom">
 			<h3><i class="fa fa-user"></i>Profile</h3>
 			<div class="profile-bottom-top">
 			<div class="col-md-4 profile-bottom-img">
 				<img src="<?php echo $i['foto']?>" alt="">
 			</div>
 			<div class="col-md-8 profile-text">

 				<h6><?php echo $i['nama']?></h6>
 				<table>
 				<tr><td>Username</td>
 				<td>:</td>
 				<td><?php echo $i['username']?></td></tr>

 				<tr>
 				<td>Email</td>
 				<td> :</td>
 				<td><a href="<?php echo $i['email']?>"><?php echo $i['email']?></a></td>
 				</tr>
 				<tr>
 				<td>Nama</td>
 				<td> :</td>
 				<td> <?php echo $i['nama']?></td>
 				</tr>
 				<tr>
 				<td>No Hp </td>
 				<td>:</td>
 				<td> <?php echo $i['nohp']?></td>
 				</tr>
 				</table>
 			</div>
 			<div class="clearfix"></div>
 			</div>
 			<div class="profile-bottom-bottom">
 			<div class="col-md-4 profile-fo">
 			</div>
 			<div class="col-md-4 profile-fo">
 			</div>
 			<div class="col-md-4 profile-fo">
 				<a href="editProfile"><i class="fa fa-cog"></i>Edit Profile</a>
 			</div>
 			<div class="clearfix"></div>
 			</div>


 		</div>
 	</div>
		<!---->
<!---->
<!--scrolling js-->
	<script src="<?php echo base_url('assets/js/jquery.nicescroll.js')?>"></script>
	<script src="<?php echo base_url('assets/js/scripts.js')?>"></script>
	<!--//scrolling js-->
	<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"> </script>
</body>
</html>
