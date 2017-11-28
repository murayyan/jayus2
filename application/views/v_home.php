<!DOCTYPE html>
<html>
<head>
<title>Jual Beli Ayam Kualitas Bagus</title>
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
   <script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js')?>"></script>
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
	include 'header.php';
?>
  <!---->
  <!---->
<div data-vide-bg="<?php echo base_url('video/video2')?>">
    <div class="container">
		<div class="banner-info">
			<h3>Temukan Ayam Pilihan Dengan Kualitas Nomer Satu</h3>	
			<div class="search-form">
				<form action="home/search" method="post">
					<input type="text" placeholder="Search" name="search">
					<input type="submit" value=" " >
				</form>
			</div>		
		</div>	
    </div>
</div>

    <script>window.jQuery || document.write('<script src="localhost:8080/jayus2/assets/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="<?php echo base_url('assets/js/jquery.vide.min.js')?>"></script>

<!--content-->
<div class="content-top ">
	<div class="container ">
		<div class="spec ">
			<h3>Special Offers</h3>
			<div class="ser-t">
				<b></b>
				<span><i></i></span>
				<b class="line"></b>
			</div>
		</div>
			<div class="tab-head ">
				<nav class="nav-sidebar">
					<ul class="nav tabs ">
					  <li class="active"><a href="#tab1" data-toggle="tab">Ayam</a></li>
					  <li class=""><a href="#tab2" data-toggle="tab">Peralatan</a></li> 
					  <li class=""><a href="#tab3" data-toggle="tab">Pakan</a></li>  
					  <li class=""><a href="#tab4" data-toggle="tab">Obat & Vitamin</a></li>
					</ul>
				</nav>
				<div class=" tab-content tab-content-t ">
					<div class="tab-pane active text-style" id="tab1">
						<div class=" con-w3l">
					<?php foreach($hasil as $i){ 
		?>
						<div class='col-md-3 m-wthree'>
								<div class='col-m'>	
										<img src='http://localhost:8080/jayus2/assets/<?php echo $i['img1'] ?>' class='img-responsive' alt=''>
									
									<div class='mid-1'>
										<div class='women'>
											<h6><b><a href='home/produk/<?php echo $i['id_iklan'] ?>'><?php echo $i['judul_iklan'] ?></a></b></h6>							
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
					<div class="tab-pane  text-style" id="tab2">
							<div class=" con-w3l">
					<?php foreach($hasil as $i){ 
		?>
						<div class='col-md-3 m-wthree'>
								<div class='col-m'>
										<img src='http://localhost:8080/jayus2/assets/<?php echo $i['img1'] ?>' class='img-responsive' alt=''>
			
									<div class='mid-1'>
										<div class='women'>
											<h6><b><a href='home/produk/<?php echo $i['id_iklan'] ?>'><?php echo $i['judul_iklan'] ?></a></b></h6>								
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
					<div class="tab-pane  text-style" id="tab3">
							<div class=" con-w3l">
					<?php foreach($hasil as $i){ 
		?>
						<div class='col-md-3 m-wthree'>
								<div class='col-m'>
										<img src='http://localhost:8080/jayus2/assets/<?php echo $i['img1'] ?>' class='img-responsive' alt=''>
										
									<div class='mid-1'>
										<div class='women'>
											<h6><b><a href='home/produk/<?php echo $i['id_iklan'] ?>'><?php echo $i['judul_iklan'] ?></a></b></h6>								
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
					<div class="tab-pane text-style" id="tab4">
								<div class=" con-w3l">
					<?php foreach($hasil as $i){ 
		?>
						<div class='col-md-3 m-wthree'>
								<div class='col-m'>	
										<img src='http://localhost:8080/jayus2/assets/<?php echo $i['img1'] ?>' class='img-responsive' alt=''>
										
									<div class='mid-1'>
										<div class='women'>
											<h6><b><a href='home/produk/<?php echo $i['id_iklan'] ?>'><?php echo $i['judul_iklan'] ?></a></b></h6>								
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
			</div>
		
	</div>
	</div>
	</div>

<!--content-->
<div class="content-mid">
	<div class="container">
		
		<div class="col-md-4 m-w3ls">
			<div class="col-md1 ">
				<a href="kitchen.html">
					<img src="<?php echo base_url('assets/images/co1.jpg')?>" class="img-responsive img" alt="">
					<div class="big-sa">
						<h3>Ayam <span>Sehat</span></h3>
						<p>Temukan Ayam sehat dan berkualitas disini</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 m-w3ls1">
			<div class="col-md ">
				<a href="hold.html">
					<img src="<?php echo base_url('assets/images/co.jpg')?>" class="img-responsive img" alt="">
					<div class="big-sale">
						<div class="big-sale1">
							<h3>Alat</h3>
							<p>Lengkapi alat ternakmu disini </p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 m-w3ls">
			<div class="col-md2 ">
				<a href="kitchen.html">
					<img src="<?php echo base_url('assets/images/co2.jpg')?>" class="img-responsive img1" alt="">
					<div class="big-sale2">
						<h3>Pakan <span>Ternak</span></h3>
						<p>Pakan ternak sehat disini</p>		
					</div>
				</a>
			</div>
			<div class="col-md3 ">
				<a href="hold.html">
					<img src="<?php echo base_url('assets/images/co3.jpg')?>" class="img-responsive img1" alt="">
					<div class="big-sale3">
						<h3>Obat & <span>Vitamin</span></h3>
						<p>Obat & Vitamin khusus ayam</p>
					</div>
				</a>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--content-->
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
         <a href="kitchen.html"> <img class="first-slide" src="<?php echo base_url('assets/images/ba1.jpg')?>" alt="First slide"></a>
       
        </div>
        <div class="item">
         <a href="care.html"> <img class="second-slide " src="<?php echo base_url('assets/images/ba2.jpg')?>" alt="Second slide"></a>
         
        </div>
        <div class="item">
          <a href="hold.html"><img class="third-slide " src="<?php echo base_url('assets/images/ba3.jpg')?>" alt="Third slide"></a>
          
        </div>
      </div>
    
    </div><!-- /.carousel -->

<!--content-->
	<div class="product">
		<div class="container">
			<div class="spec ">
				<h3>Special Offers</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
			
				<div class=" con-w3l">
				<?php foreach($all as $i){ 
		?><div class='col-md-3 m-wthree'>
								<div class='col-m'>	
										<img src='http://localhost:8080/jayus2/assets/<?php echo $i['img1'] ?>' class='img-responsive' alt=''>
										
									<div class='mid-1'>
										<div class='women'>
											<h6><b><a href='home/produk/<?php echo $i['id_iklan'] ?>'><?php echo $i['judul_iklan'] ?></a></b></h6>								
										</div>
										<div class='mid-2'>
											<p><em class='item_price'>Rp <?php echo $i['harga'] ?></em></p>
											
											<div class='clearfix'></div>
										</div>
									
										
									</div>
								</div>
							</div>
						<?php } ?>	
		</div>
		
	</div>
	</div>
<!--footer-->
<?php 
	include 'footer.php';
?>			
</body>
</html>
