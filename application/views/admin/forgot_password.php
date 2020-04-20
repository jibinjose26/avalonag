<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel: Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url(); ?>/resources_admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url(); ?>/resources_admin/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?php echo base_url(); ?>/resources_admin/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="<?php echo base_url(); ?>/resources_admin/css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="<?php echo base_url(); ?>/resources_admin/js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="<?php echo base_url(); ?>/resources_admin/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo base_url(); ?>/resources_admin/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script src="<?php echo base_url(); ?>/resources_admin/js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head> 
   
 <body class="sign-in-up">
    <section>
			<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-in-form">
						<div class="sign-in-form-top">
							<p><span>Forgot Password ?</span> </p>
						</div>

						<div >
							<?php 
							if ($this->session->flashdata('message'))
							{
								echo
								'<div class="alert alert-success">
								'.$this->session->flashdata('message').'
								</div>

								';
							}
							?>
						</div>

						<div class="signin">
							<div class="signin-rit">
								<span><p><a href="<?php echo base_url();?>register">Register Now ?</a></p></span>
							</div>
							<div class="signin-left">
								<span><p><a href="<?php echo base_url();?>login">Login Now ?</a></p></span>
							</div>
							
							<form method="post" action="<?php echo base_url();?>login/check_user_forgot_pass" >
							<div class="log-input">
								<div class="log-input-left">
									<label>Enter Email Address</label>
								   <input type="text" class="user"  name="user_email"  value="<?php echo set_value('user_email'); ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
								</div>
								
							
								<div class="clearfix"> </div>
							</div>
							<div class="log-input">
								<span class="text-danger"><?php echo form_error('user_email'); ?></span>
							</div>
							
							
							<input type="submit" name="login" value="Submit">
						</form>	 
						</div>
					
					</div>
				</div>
			</div>
		<!--footer section start-->
			<footer>
			   <p>&copy 2019 Avalon Assembly of God Admin Panel. All Rights Reserved </p>
			</footer>
        <!--footer section end-->
	</section>
	
<script src="<?php echo base_url(); ?>/resources_admin/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>/resources_admin/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url(); ?>/resources_admin/js/bootstrap.min.js"></script>
</body>
</html>