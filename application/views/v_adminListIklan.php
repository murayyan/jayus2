
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

<!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="index.html"></a></h1>
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>
			</section>
			<form class=" navbar-left-right">
              <input type="text"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
              <input type="submit" value="" class="fa fa-search">
            </form>
            <div class="clearfix"> </div>
           </div>


            <!-- Brand and toggle get grouped for better mobile display -->

		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="drop-men" >
		        <ul class=" nav_1">

		    		<li class="dropdown at-drop">
		              <a href="#" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i class="fa fa-globe"></i> <span class="number">5</span></a>
		              <ul class="dropdown-menu menu1 " role="menu">
		                <li><a href="#">

		                	<div class="user-new">
		                	<p>New user registered</p>
		                	<span>40 seconds ago</span>
		                	</div>
		                	<div class="user-new-left">

		                	<i class="fa fa-user-plus"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                	</a></li>
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>Someone special liked this</p>
		                	<span>3 minutes ago</span>
		                	</div>
		                	<div class="user-new-left">

		                	<i class="fa fa-heart"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>John cancelled the event</p>
		                	<span>4 hours ago</span>
		                	</div>
		                	<div class="user-new-left">

		                	<i class="fa fa-times"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>The server is status is stable</p>
		                	<span>yesterday at 08:30am</span>
		                	</div>
		                	<div class="user-new-left">

		                	<i class="fa fa-info"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>New comments waiting approval</p>
		                	<span>Last Week</span>
		                	</div>
		                	<div class="user-new-left">

		                	<i class="fa fa-rss"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#" class="view">View all messages</a></li>
		              </ul>
		            </li>
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><?php echo $this->session->userdata("nama"); ?><i class="caret"></i></span><img src="<?php echo base_url('assets/images/wo.jpg')?>"></a>
		              <ul class="dropdown-menu " role="menu">
		                <li><a href="profile.html"><i class="fa fa-user"></i>Edit Profile</a></li>
		                <li><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox</a></li>
		                <li><a href="calendar.html"><i class="fa fa-calendar"></i>Calender</a></li>
		                <li><a href="logout"><i class="fa fa-clipboard"></i>Logout</a></li>
		              </ul>
		            </li>

		        </ul>
		     </div><!-- /.navbar-collapse -->
			<div class="clearfix">

     </div>

		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

									<li>
											<a href="<?php echo base_url('index.php/admin/dashboard')?>" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
									</li>

				 <li>
											<a href="<?php echo base_url('index.php/admin/listiklan')?>" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i> <span class="nav-label">List Iklan</span> </a>
									</li>

									<li>
											<a href="<?php echo base_url('index.php/admin/listmember')?>" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">List Member</span> </a>
									</li>

                </ul>
            </div>
			</div>
        </nav>
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
															<td>".$i['harga'],"</td>";
													echo"
															<td><a href='".base_url('index.php/home/produk/'.$i['id_iklan']),"')>LINK</a></td>
															<td><a href='".base_url('index.php/member/hapusiklan/'.$i['id_iklan']),"' onClick=\"return confirm('Hapus Iklan Ini?')\"\><button class=\"btn-danger\"> Hapus</button></a></td>
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
