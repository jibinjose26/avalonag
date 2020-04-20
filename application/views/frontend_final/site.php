<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title; ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="Avalon Assembly of God, Lower Hutt, New Zealand" content="To be a temple in which God will dwell, an awesome place of encounter with Him.
(Eph 2:19-22, Gen 28:10-17)">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resources_final/styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo base_url();?>resources_final/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resources_final/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resources_final/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resources_final/plugins/OwlCarousel2-2.2.1/animate.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->


<?php echo $script; ?>



</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		
		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col top_bar_content d-flex flex-row align-items-center justify-content-start">
						<div class="event_timer">
							<span>Next Big Event:</span>
							<?php extract($big_event);
							echo $event_title;
							?>
						</div>
						<div class="donations_button ml-auto">
							<a href="<?php echo site_url('login');?>">Admin</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>

		<!-- Header Content -->

		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">

							<!-- Logo -->
							<div class="logo_container">
								<div class="logo">
									<a href="<?php echo site_url('Home/index');?>">
										<span>

										<img src="<?php echo base_url();?>/resources_final/images/church logo_AOG_Avalon.jpg" alt="" width="73px" height="73px"></span>&nbsp;&nbsp;

									</a>
								</div>
							</div>
							<div align="left" >
								<h2>Avalon Assembly of God</h2>
							</div>
							<!-- Navigation and Search -->
							<div class="header_nav_container ml-auto">



								<nav class="main_nav">



									<ul>
										<li class="active"><a href="<?php echo site_url('Home/index');?>">Home</a></li>
										<li><a href="<?php echo site_url('Home/about');?>">About Us</a></li>
										<li>
										   <div class="basic-dropdown">

											<div class="active">
												<a type="text" class="active"    data-toggle="dropdown" href="#"><font color="#333333">Events</font> </a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="<?php echo site_url('Home/events');?>">Upcoming Events</a>
                                        	<a class="dropdown-item" href="<?php echo site_url('Home/calendar_events');?>">Calendar Events</a>
                                        </div>
                                        
                                    </div>
                                </div>
										</li>
										<li><a href="<?php echo site_url('Home/contact');?>">Contact</a></li>
										<li><a href="<?php echo site_url('StripeController');?>">Giving</a></li>
									</ul>
								</nav>
								<div class="search">

									<!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="13px" height="14px">
										<path class="search_path" d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" fill="#353535"/>
									</svg> -->

							</div>
							</div>

							<!-- Hamburger -->

							<div class="hamburger ml-auto">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="header_search_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
								<form action="#" class="header_search_form">
									<input type="search" class="search_input" placeholder="Search" required="required">
									<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_2" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="20px" height="20px">
											<path class="search_path" d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" fill="#353535"/>
										</svg>
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>			
			</div>
		</div>

	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-center justify-content-center">
		<div class="menu_content">
			<div class="cross_1 d-flex flex-column align-items-center justify-content-center">
				<img src="<?php echo base_url();?>/resources_final/images/church logo_AOG_Avalon.jpg" alt="" width="65px" height="65px">
			</div>
		
			<nav class="menu_nav">
				<ul>
					<li class="active"><a href="<?php echo site_url('Home/index');?>">Home</a></li>
					<li><a href="<?php echo site_url('Home/about');?>">About Us</a></li>
					<li><div class="basic-dropdown">

											<div class="active">
												<a type="text" class="active"    data-toggle="dropdown" href="#"><font color="#333333">Events</font> </a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="<?php echo site_url('Home/events');?>">Upcoming Events</a>
                                        	<a class="dropdown-item" href="<?php echo site_url('Home/calendar_events');?>">Calendar Events</a>
                                        </div>
                                        
                                    </div>
                                </div></li>
					<li><a href="<?php echo site_url('Home/contact');?>">Contact</a></li>
					<li><a href="<?php echo site_url('StripeController');?>">Giving</a></li>
				</ul>
			</nav>
		</div>
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
	</div>


<?php $this->load->view($view_page);?>
	

	<!-- Newsletter -->

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">

					<!-- Logo -->
					<div class="logo_container">
						<div class="logo">
							<a href="<?php echo site_url('Home/index');?>">
								<span> <i><b>Avalon Assembly of God</i></b></span>
								<!-- img src="<?php echo base_url();?>/resources_final/images/church logo_AOG_Avalon.jpg" alt="" width="100" height="100"> -->
							</a>
						</div>
						<!-- <div class="logo_subtitle">Church template</div> -->
					</div>
				<!-- 	<div class="footer_social">
						<ul>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
				</div>

				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">
					<div class="footer_links">
						<div class="footer_title">Useful Links</div>
						<ul>
							<li><a href="<?php echo site_url('Home/index');?>">Home</a></li>
							<li><a href="<?php echo site_url('Home/about');?>">About Us</a></li>
							<li><a href="<?php echo site_url('Home/events');?>">Events</a></li>
							<li><a href="<?php echo site_url('StripeController');?>">Giving</a></li>
							<li><a href="<?php echo site_url('Home/contact');?>">Contact</a></li>
						</ul>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_col">
					<div class="footer_contact">
						<div class="footer_title">Contact Us</div>
						<ul>
							<li><span>Address: </span>870 High Street, (Corner of High and Daysh Streets), Boulcott, LOWER HUTT 5011</li>
							<!-- <li>
       PO Box 46 019, Park Avenue, LOWER HUTT 5044 </li> -->
							<li class="footer_contact_phone">
								<span>Phone: </span>
								<div>
									<div> +64-4-567-2225</div>
									<!-- <div> +64-27-437-0784</div> -->
								</div>
							</li>
							<!-- <li><span>Email:  avalonassemblyofgod@xtra.co.nz</span></li> -->
						</ul>
					</div>
				</div>

			</div>
		</div>

		<!-- Copyright -->
		<div class="copyright text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Avalon Assembly of God
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>

	</footer>

</div>

<script src="<?php echo base_url();?>resources_final/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url();?>resources_final/styles/bootstrap4/popper.js"></script>
<script src="<?php echo base_url();?>resources_final/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>resources_final/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php echo base_url();?>resources_final/plugins/easing/easing.js"></script>
<script src="<?php echo base_url();?>resources_final/plugins/parallax-js-master/parallax.min.js"></script>

<script src="<?php echo base_url();?>resources_final/js/custom.js"></script>
<script src="<?php echo base_url();?>resources_final/js/sermons_custom.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAUN8AEtptHNINWK4NL-N4D9Ubz1qRmdVk"></script> -->
<script src="<?php echo base_url();?>resources_final/js/contact_custom.js"></script>
<script src="<?php echo base_url();?>resources_final/js/blog_custom.js"></script>
<script src="<?php echo base_url();?>resources_final/js/sermon_single_custom.js"></script>
<script src="<?php echo base_url();?>resources_final/js/ministries_custom.js"></script>


 <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <script src="https://js.stripe.com/v3/"></script>
  <script src="<?php echo base_url();?>resources_final/js/charge.js"></script>
</body>
</html>

