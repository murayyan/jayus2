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
<a href="offer.html"><img src="<?php echo base_url('assets/images/download.png')?>" class="img-head" alt=""></a>
<?php 
	include 'header.php';
?>
  <!---->
 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Register</h3>
		<h4><a href="home">Home</a><label>/</label>Register</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<!--login-->

	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1" id="regis">
					<h3>Register</h3>
					<?php 
					$cek = '';
					if ($cek == "invalid") {
						echo 'Registrasi gagal';
					}?>
					<form action="<?php echo base_url("index.php/member/aksi_register")?>" method="post">
						<div class="form-group">
							<label for="a">Username</label>
						    <input type="text" name="username" class="form-control" id="a" aria-describedby="UsernameHelp" required>
						    <small id="UsernameHelp" class="form-text text-muted">Masukkan username yang unik</small>
						 </div>
						<div class="form-group">
							<label for="b">Nama</label>
						    <input type="text" name="nama" class="form-control" id="b" aria-describedby="NamaHelp" required>
						    <small id="NamaHelp" class="form-text text-muted">Masukkan nama anda</small>
						 </div>
						<div class="form-group">
							<label for="c">Email</label>
						    <input type="email" name="email" class="form-control" id="c" aria-describedby="EmailHelp" required>
						    <small id="EmailHelp" class="form-text text-muted">Masukkan email anda</small>
						 </div>
						<div class="form-group">
							<label for="d">Password</label>
						    <input type="password" name="password" class="form-control" id="d" aria-describedby="PassHelp" required>
						    <small id="PassHelp" class="form-text text-muted">Password terdiri 8-16 karakter</small>
						 </div>
						<div class="form-group">
							<label for="e">Confirm Password</label>
						    <input type="password" name="cpassword" class="form-control" id="e" aria-describedby="CHelp" required>
						    <small id="CHelp" class="form-text text-muted">Ulang password anda</small>
						 </div>
						<div class="form-group">
							<label for="f">No. Hp</label>
						    <input type="text" name="nohp" class="form-control" id="f" aria-describedby="hpHelp" >
						    <small id="hpHelp" class="form-text text-muted">Masukkan No. HP anda</small>
						 </div>
						<center><input type="submit" value="Register" name="submit"></center>
					</form>
				</div>
				
			</div>
		</div>
<!--footer-->
<?php 
	include 'footer.php';
?>

</html>

