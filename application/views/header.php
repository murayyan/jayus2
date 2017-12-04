<div class="header">

		<div class="container">

			<div class="logo">
				<h1 ><a href="<?php echo base_url('index.php/home')?>">JAYUS<span>Jual Beli Ayam Kualitas Bagus</span></a></h1>
			</div>
			<div class="head-t">
				<ul class="card">
					<li><a href="<?php if($this->session->userdata('status') == "login"){echo base_url('index.php/member/dashboard');} else {echo base_url('index.php/member/login');}?>" ><i class="fa fa-user" aria-hidden="true"></i><?php if($this->session->userdata('status')=="login"){echo $this->session->userdata('nama');} else {echo "Login";} ?></a></li>
					<li><a href="<?php if($this->session->userdata('status') == "login"){echo base_url('index.php/member/logout');} else {echo base_url('index.php/member/register');}?> " ><i class="fa fa-arrow-right" aria-hidden="true"></i><?php if($this->session->userdata('status') == "login"){echo "Logout";} else {echo "Register";}?></a></li>
					<li><a href="shipping.html" ><i class="fa fa-ship" aria-hidden="true"></i>FAQ</a></li>
				</ul>
			</div>

			<div class="header-ri">
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>
			</div>


				<div class="nav-top">
					<nav class="navbar navbar-default">

					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>


					</div>
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li  class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Ayam<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">

												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Ayam Bekisar</a></li>
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Ayam Broiler</a></li>
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Ayam Ayam Pakuan</a></li>
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Ayam Kampus</a></li>

											</ul>

										</div>

										<div class="col-sm-3 w3l">
											<a href="kitchen.html"><img src="<?php echo base_url('assets/images/ayam.png')?>" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li  class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Peralatan<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">

												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Ayam Bekisar</a></li>
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Ayam Broiler</a></li>
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Ayam Ayam Pakuan</a></li>
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Ayam Kampus</a></li>

											</ul>

										</div>

										<div class="col-sm-3 w3l">
											<a href="kitchen.html"><img src="<?php echo base_url('assets/images/ayam.png')?>" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li  class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Pakan<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">

												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Ayam Bekisar</a></li>
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Ayam Broiler</a></li>
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Ayam Ayam Pakuan</a></li>
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Ayam Kampus</a></li>

											</ul>

										</div>

										<div class="col-sm-3 w3l">
											<a href="kitchen.html"><img src="<?php echo base_url('assets/images/ayam.png')?>" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li  class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Obat & Vitamin<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">

												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Ayam Bekisar</a></li>
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Ayam Broiler</a></li>
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Ayam Ayam Pakuan</a></li>
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Ayam Kampus</a></li>

											</ul>

										</div>

										<div class="col-sm-3 w3l">
											<a href="kitchen.html"><img src="<?php echo base_url('assets/images/ayam.png')?>" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>

							<li><a href="<?php echo base_url('index.php/home/contact')?>" class="hyper"><span>Contact Us</span></a></li>
						</ul>
					</div>
					</nav>

					<div class="clearfix"></div>
				</div>

				</div>
</div>
