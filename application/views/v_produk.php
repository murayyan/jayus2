<!DOCTYPE html>
<html>
<head>
<title>Jual Beli Ayam Kualitas Bagus</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url('assets/css/style.css')?>" rel='stylesheet' type='text/css' />
<!-- js -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/flexslider.css')?>" type="text/css" media="screen" />
<script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js')?>"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url('assets/js/move-top.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/easing.js')?>"></script>

<!-- start-smoth-scrolling -->
<link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->

<!---//End-rate---->

</head>
<body>
<?php 
	include 'header.php';
?>
  <!---->
 <!--banner-->
<div class="banner-top">
	<div class="container">
	<?php foreach($hasil as $i){ 
		?>
		<h3 ><?php echo $i['kategori'] ?></h3>
		<h4><a href="index.html">Home</a><label>/</label><?php echo $i['kategori'] ?></h4>
		<div class="clearfix"> </div>
	</div>
</div>

								
		<div class="single">
			<div class="container">
						<div class="single-top-main">
	   		
<div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					
					<ul class="slides">
						<li data-thumb="http://localhost:8080/jayus2/assets/<?php echo $i['img1'] ?>">
							<div class="thumb-image"> <img src="http://localhost:8080/jayus2/assets/<?php echo $i['img1'] ?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="http://localhost:8080/jayus2/assets/<?php echo $i['img2'] ?>">
							<div class="thumb-image"> <img src="http://localhost:8080/jayus2/assets/<?php echo $i['img2'] ?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>	
						<li data-thumb="http://localhost:8080/jayus2/assets/<?php echo $i['img3'] ?>">
							<div class="thumb-image"> <img src="http://localhost:8080/jayus2/assets/<?php echo $i['img3'] ?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
		
		
			<div class="col-md-7 single-top-left ">
								<div class="single-right">
				<h3><?php echo $i['judul_iklan'] ?></h3>
				
					
				 <div class="pr-single">
				  <p class="reduced ">Rp <?php echo $i['harga'] ?></p>
				</div>
				
				<p class="in-pa"> <?php echo $i['detail_iklan'] ?>
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>
				 
			   
			<div class="clearfix"> </div>
			</div>
			</div>

					
		   <div class="clearfix"> </div>
	   </div>	
				 
				
	</div>
</div>
	<?php } ?>
		<!---->
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
							
						<?php foreach($all as $i){ 
		?>
							<div class='col-md-3 m-wthree'>
								<div class='col-m'>	
										<img src='http://localhost:8080/jayus2/assets/<?php echo $i['img1'] ?>' class='img-responsive' alt=''>
										
									<div class='mid-1'>
										<div class='women'>
											<h6><b><a href='<?php echo $i['id_iklan'] ?>'><?php echo $i['judul_iklan'] ?></a></b></h6>								
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
<!--footer-->
<?php 
	include 'footer.php';
?>
<!-- //footer-->
<script src="<?php echo base_url('assets/js/jquery.flexslider.js')?>"></script>
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
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
</body>
</html>