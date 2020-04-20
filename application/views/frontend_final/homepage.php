<!-- Home -->
<?php
if($fetch_data->num_rows()>0)
{
foreach($fetch_data->result() as $row)
{

?>
	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(<?php echo $row->home_image_s1; ?>)"></div>
					<div class="home_slider_content text-center">
						<!-- <div class="cross_1 d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url();?>/resources_final/images/cross_1.png" alt=""></div> -->
						<h1>Healing & Life for nations</h1>
					<!--	<div class="button home_slider_button"><a href="#">Come and join us</a></div>-->
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(<?php echo $row->home_image_s2; ?>)"></div>
					<div class="home_slider_content text-center">
						<!-- <div class="cross_1 d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url();?>/resources_final/images/cross_1.png" alt=""></div> -->
						<h1>Healing & Life for nations</h1>
					<!--	<div class="button home_slider_button"><a href="#">Come and join us</a></div>-->
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(<?php echo $row->home_image_s3; ?>)"></div>
					<div class="home_slider_content text-center">
						<!-- <div class="cross_1 d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url();?>/resources_final/images/cross_1.png" alt=""></div> -->
						<h1>Healing & Life for nations</h1>
						<!--<div class="button home_slider_button"><a href="#">Come and join us</a></div>-->
					</div>
				</div>

			</div>

			<div class="home_slider_nav d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url();?>/resources_final/images/arrow_r.png" alt=""></div>
		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<!-- <div class="section_image"><img src="<?php echo base_url();?>/resources_final/images/church_1.png" alt=""></div> -->
						<div class="section_title"><h2><?php echo $row->home_title; ?> </h2></div>
						<div class="section_subtitle">Healing & Life for nations</div>
					</div>
				</div>
			</div>
			<div class="row intro_content">

				<!-- Intro Text -->
				<div class="col-lg-6">
					<div class="intro_text">
						<p><?php echo $row->home_description;?></p>
						<!-- <div class="button intro_button"><a href="#">Read More</a></div> -->
					</div>
				</div>

				<!-- Intro Image -->

				<div class="col-lg-6">
					<div class="intro_image"><img src="<?php echo $row->home_wel_image; ?>" alt="" width='600' height='300'></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services">
		<div class="services_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url();?>/resources_final/images/services.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<!-- <div class="section_image"><img src="<?php echo base_url();?>/resources_final/images/church_2.png" alt=""></div> -->
						<div class="section_title"><h2>Our Church main Functions</h2></div>
						<div class="section_subtitle">Healing & Life for nations</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="services_text text-center"><p>“ On each side of the river stood the tree of life, bearing twelve crops of fruit, yielding its fruit every month. &nbsp; And the leaves of the tree are for the healing of the nations”  &nbsp;  Rev 22:2 </p></div>
				</div>
			</div>
			<div class="row services_row">

				<!-- Services Item -->
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="services_item text-center">
						<!-- <div class="services_image"><img src="<?php echo base_url();?>/resources_final/images/services_1.png" alt=""></div> -->
						<div class="services_title">Fellowship</div>
					</div>
				</div>

				<!-- Services Item -->
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="services_item text-center">
						<!-- <div class="services_image"><img src="<?php echo base_url();?>/resources_final/images/services_2.png" alt=""></div> -->
						<div class="services_title">Worships</div>
					</div>
				</div>

				<!-- Services Item -->
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="services_item text-center">
						<!-- <div class="services_image"><img src="<?php echo base_url();?>/resources_final/images/services_3.png" alt=""></div> -->
						<div class="services_title">Discipleship</div>
					</div>
				</div>

				<!-- Services Item -->
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="services_item text-center">
						<!-- <div class="services_image"><img src="<?php echo base_url();?>/resources_final/images/services_4.png" alt=""></div> -->
						<div class="services_title">Service</div>
					</div>
				</div>

				<!-- Services Item -->
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="services_item text-center">
						<!-- <div class="services_image"><img src="<?php echo base_url();?>/resources_final/images/services_5.png" alt=""></div> -->
						<div class="services_title">Outreach</div>
					</div>
				</div>

				<!-- Services Item -->
				<!-- <div class="col-lg-2 col-md-4 col-sm-6">
					<div class="services_item text-center">
						<div class="services_image"><img src="<?php echo base_url();?>/resources_final/images/services_6.png" alt=""></div>
						<div class="services_title">Cleansing Streams</div>
					</div>
				</div> -->

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
	<!-- Causes -->
<?php
if($fetch_gallery->num_rows()>0)
{
foreach($fetch_gallery->result() as $row)
{

?>

	<div class="causes">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<!-- <div class="section_image"><img src="<?php echo base_url();?>/resources_final/images/church_4.png" alt=""></div> -->
						<div class="section_title"><h2>Our Church's Gallery</h2></div>
						<div class="section_subtitle">Healing & Life for nations</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="causes_slider_container">

						<!-- Causes Slider -->
						<div class="owl-carousel owl-theme causes_slider">

							<!-- Causes Slider Item -->
							<div class="owl-item text-center causes_item">
								<div class="causes_item_image"><img src="<?php echo $row->home_gallery_image1;?>" alt="" width='600' height='300'></div>
								<div class="causes_item_title">Healing</div>
								<!-- <div class="causes_item_text">
									<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst.</p>
								</div> -->
							</div>

							<!-- Causes Slider Item -->
							<div class="owl-item text-center causes_item">
								<div class="causes_item_image"><img src="<?php echo $row->home_gallery_image2;?>" alt="" width='600' height='300'></div>
								<div class="causes_item_title">Life</div>
								<!-- <div class="causes_item_text">
									<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst.</p>
								</div> -->
							</div>

							<!-- Causes Slider Item -->
							<div class="owl-item text-center causes_item">
								<div class="causes_item_image"><img src="<?php echo $row->home_gallery_image3;?>" alt="" width='600' height='300'></div>
								<div class="causes_item_title">Outreach                   </div>
								<!-- <div class="causes_item_text">
									<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst.</p>
								</div> -->
							</div>

							<!-- Causes Slider Item -->
							<div class="owl-item text-center causes_item">
								<div class="causes_item_image"><img src="<?php echo $row->home_gallery_image4;?>" alt="" width='600' height='300'></div>
								<div class="causes_item_title">Eternal Kingdom</div>
								<!-- <div class="causes_item_text">
									<p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst.</p>
								</div> -->
							</div>

						</div>

						<div class="causes_slider_nav causes_slider_prev trans_200 d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url();?>/resources_final/images/arrow_l.png" alt=""></div>
						<div class="causes_slider_nav causes_slider_next trans_200 d-flex flex-column align-items-center justify-content-center"><img src="images/arrow_r.png" alt=""></div>
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
