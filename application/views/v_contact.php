<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Big store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Contact :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url('assets/css/style.css')?>" rel='stylesheet' type='text/css' />
<!-- js -->
<script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js')?>"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url('assets/js/move-top.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/easing.js')?>"></script>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<!---//End-rate---->

</head>
<body>
<?php
include 'header.php'
?>
  <!---->

 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Contact</h3>
		<h4><a href="index.html">Home</a><label>/</label>Contact</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!-- contact -->
<div class="contact">
	<div class="container">
		<div class="spec ">
			<h3>Contact</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
		</div>
		<div class=" contact-w3">	
			<div class="col-md-5 contact-right">	
				<img src="<?php echo base_url('assets/images/cac.jpg')?>" class="img-responsive" alt="">
				<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1975.7011654090938!2d112.6118619904803!3d-7.957307961123081!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1511798018334" style="border:0"></iframe>
			</div>
			
			<div class="col-md-7 contact-left">
				<h4>Contact Information</h4>
				<p> Nemo enim ipsam voluptatem quia voluptas sit aspernatur 
				aut odit aut fugit, sed quia consequuntur magni dolores eos
				qui ratione voluptatem sequi nesciunt. Neque porro quisquam 
				est, qui dolorem ipsum quia dolor sit amet, consectetur</p>
				<ul class="contact-list">
					<li> <i class="fa fa-map-marker" aria-hidden="true"></i> 756 Global Place, New York.</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:example@mail.com">mail@example.com</a></li>
					<li> <i class="fa fa-phone" aria-hidden="true"></i>+123 2222 222</li>
				</ul>
				<div id="container">
					<!--Horizontal Tab-->
					<div id="parentHorizontalTab">
						<ul class="resp-tabs-list hor_1">
							<li><i class="fa fa-envelope" aria-hidden="true"></i></li>
							<li> <i class="fa fa-map-marker" aria-hidden="true"></i> </span></li>
							<li> <i class="fa fa-phone" aria-hidden="true"></i></li>
						</ul>
						<div class="resp-tabs-container hor_1">
							<div>
								<form action="#" method="post">
									<input type="text" value="Name" name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
									<input type="email" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
									<textarea name="Message..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
									<input type="submit" value="Submit" >
								</form>
							</div>
							<div>
								<div class="map-grid">
								<h5>Our Branches</h5>
									<ul>
										<li><i class="fa fa-arrow-right" aria-hidden="true"></i>756 Global Place, New York.</li>
										<li><i class="fa fa-arrow-right" aria-hidden="true"></i>889 diamond street, USA.</li>
										<li><i class="fa fa-arrow-right" aria-hidden="true"></i>756 global Place, New York.</li>
										<li><i class="fa fa-arrow-right" aria-hidden="true"></i>889 diamond street, USA.</li>
									</ul>
								</div>
							</div>
							<div>
								<div class="map-grid">
									<h5>Contact Me Through</h5>
									<ul>
										<li>Mobile No : +123 456 7890</li>
										<li>Office No : +123 222 2222</li>
										<li>Home No : +123 456 7890</li>
										<li>Fax No : +123 456 7890</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!--Plug-in Initialisation-->
				<script type="text/javascript">
				$(document).ready(function() {
					//Horizontal Tab
					$('#parentHorizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});

					// Child Tab
					$('#ChildVerticalTab_1').easyResponsiveTabs({
						type: 'vertical',
						width: 'auto',
						fit: true,
						tabidentify: 'ver_1', // The tab groups identifier
						activetab_bg: '#fff', // background color for active tabs in this group
						inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
						active_border_color: '#c1c1c1', // border color for active tabs heads in this group
						active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
					});

					//Vertical Tab
					$('#parentVerticalTab').easyResponsiveTabs({
						type: 'vertical', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						closed: 'accordion', // Start closed if in accordion view
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo2');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});
				});
			</script>
				
			</div>
			
		<div class="clearfix"></div>
	</div>
	</div>
</div>
<!-- //contact -->

<!--footer-->
<?php 
include 'footer.php'
?>
<!-- //footer-->
<!-- tabs -->
<script src="<?php echo base_url('assets/js/easyResponsiveTabs.js')?>" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true   // 100% fit in a container
			});
		});				
	</script>
<!-- //tabs -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
<!-- //for bootstrap working -->
  
</body>
</html>