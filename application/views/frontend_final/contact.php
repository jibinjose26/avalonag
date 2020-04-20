
<div class="super_container">

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url();?>/resources_final/images/contact.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content d-flex flex-row align-items-center justify-content-start">
							<div class="home_title">Contact</div>
							<div class="home_breadcrumbs ml-auto">
								<ul class="breadcrumbs">
									<li><a href="<?php echo site_url('Home/index');?>">Home</a></li>
									<li>Contact</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	<?php 
if($fetch_data->num_rows()>0)
{
  foreach($fetch_data->result() as $row)
  {

?>
	<div class="contact_info">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="contact_title">Contact Info</div>
				</div>
			</div>
			<div class="row contact_info_row row-eq-height">
				
				<!-- Contact Info Content -->
				<div class="col-lg-6 d-flex flex-column align-items-start justify-content-end">
					<div class="row">
						<div class="col-lg-2 contact_info_col"></div>
						<div class="col-lg-10 contact_info_col">
							<div class="contact_info_title">Assembly of God</div>
							<ul class="contact_info_list">
								<li><span>Name: </span><?php echo $row->contact_name;?></li>
								<li><span>Address: </span><?php echo $row->contact_address;?></li>
								<li class="footer_contact_phone">
									<span>Phone: </span>
									<div>
										<div><?php echo $row->contact_phone;?></div>
										<div> <?php echo $row->contact_phone2;?></div>
									</div>
								</li>
								<li><span>Email: </span><?php echo $row->contact_email;?></li>
							</ul>
						</div>
					
					</div>
				</div>

				<!-- Contact Info Image -->
				<div class="col-lg-6 ">
					<div class="contact_info_image" id="avalonmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3002.10867891588!2d174.93564101519075!3d-41.19760414286204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d38aa9d00d614bd%3A0x3b117acbb68c8d38!2sAvalon%20Assembly%20Of%20God!5e0!3m2!1sen!2snz!4v1570764186618!5m2!1sen!2snz" width="600" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>


	<?php 
          }
}
else
{?>
  <h1>No Contents Available</h1>
<?php

}
?>

	<!-- Contact Form -->
	<?php
	         	if($this->session->flashdata('message')){
	         	?>
	         	<div class="alert alert-info text-center">
	            	<?php echo $this->session->flashdata('message'); ?>
	          	</div>
	          	<?php
	        }
     ?>

	<div class="contact_form_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="contact_title">Contact Us</div>
					<form method="post" action="<?php echo base_url(); ?>Home/sendemail" class="contact_form">
						<div class="row">
							<div class="col-md-6">
								<input type="text" class="contact_input contacts_input_name" placeholder="Your Name" required="required" name="visitor_name">
							</div>
							<div class="col-md-6">
								<input type="email" name="email" class="contact_input contact_input_email" placeholder="Your E-mail" required="required">
							</div>
						</div>
						<textarea id="contact_text_area" name="message" placeholder="Your Message" class="contact_text"></textarea>
						<!-- <button type="submit" class="contact_button trans_200">Submit</button> -->
						<input type="submit" name="save" id="save" value="Submit" class="contact_button trans_200">
					</form>
				</div>
			</div>



		</div>
	</div>


	
