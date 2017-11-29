<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Big store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | offer :: w3layouts</title>
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


</head>
<body>
<?php
include 'header.php';
?>
  <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <a href="kitchen.html"><img class="first-slide" src="<?php echo base_url('assets/images/ba1.jpg')?>" alt="First slide"></a>

        </div>
        <div class="item">
          <a href="care.html"><img class="second-slide " src="<?php echo base_url('assets/images/ba2.jpg')?>" alt="Second slide"></a>

        </div>
        <div class="item">
          <a href="hold.html"><img class="third-slide " src="<?php echo base_url('assets/images/ba3.jpg')?>" alt="Third slide"></a>

        </div>
      </div>

    </div>
<!--content-->


<div class="content-top offer-w3agile">
	<div class="container ">
		<div class="spec ">
			<h3>Special Offers</h3>
							<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
		</div>
						<div class=" con-w3l wthree-of">
						 <?php foreach($hasil as $i){
	?>
							<div class='col-md-3 m-wthree'>s
								<div class='col-m'>
										<img src='<?php echo base_url('assets/')?><?php echo $i['img1'] ?>' class='img-responsive' alt=''>

									<div class='mid-1'>
										<div class='women'>
											<h6><b><a href='produk/<?php echo $i['id_iklan'] ?>'><?php echo $i['judul_iklan'] ?></a></b></h6>
										</div>
										<div class='mid-2'>
											<p><em class='item_price'>Rp <?php echo $i['harga'] ?></em></p>

											<div class='clearfix'></div>
										</div>


									</div>
								</div>
							</div>
							<?php } ?>
							<div class="clearfix"></div>
						 </div>
					</div>
				</div>





<?php
include 'footer.php';
?>
<!-- //footer-->

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


 <!-- product -->

</body>
</html>
