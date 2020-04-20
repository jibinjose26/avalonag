
	<!-- Home -->
	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url(); ?>/resources_final/images/sermons.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content d-flex flex-row align-items-center justify-content-start">
							<div class="home_title">About Us</div>
							<div class="home_breadcrumbs ml-auto">
								<ul class="breadcrumbs">
									<li><a href="<?php echo site_url('Home/index');?>">Home</a></li>
									<li>About Us</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Sermon -->
	<?php 
if($fetch_data->num_rows()>0)
{
  foreach($fetch_data->result() as $row)
  {

?>

	<div class="sermon">
		<div class="sermon_background" style="background-image:url(<?php echo base_url(); ?>/resources_final/images/sermon.png)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<!-- <div class="section_image"><img src="<?php echo base_url(); ?>/resources_final/images/church_3.png" alt=""></div> -->
						<div class="section_title"><h2>Our Vision</h2></div>
						<div class="section_subtitle">Healing & Life for the Nations</div>
					</div>
				</div>
			</div>
			<div class="row sermon_row">

				<!-- Sermon Image -->
				<div class="col-lg-6">
					<div class="sermon_image"><img src="<?php echo $row->vision_image;?>" alt="" width='600' height='300'></div>
				</div>
				
				<!-- Sermon Content -->
				<div class="col-lg-6">
					<div class="sermon_content">
						<div class="sermon_title"><a href="sermon_single.html"><?php echo $row->vision_title;?></a></div>
						
						<div class="sermon_text">
							<p><?php echo $row->vision_description; ?> </p>
						</div>
				
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="sermon">
		<div class="sermon_background" style="background-image:url(<?php echo base_url(); ?>/resources_final/images/sermon.png)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<!-- <div class="section_image"><img src="<?php echo base_url(); ?>/resources_final/images/church_3.png" alt=""></div> -->
						<div class="section_title"><h2>Our Mission</h2></div>
						<div class="section_subtitle">Healing & Life for the Nations</div>
					</div>
				</div>
			</div>
			<div class="row sermon_row">

				<!-- Sermon Image -->
				<div class="col-lg-6">
					<div class="sermon_image"><img src="<?php echo $row->mission_image;?>" alt="" width='600' height='300'></div>
				</div>
				
				<!-- Sermon Content -->
				<div class="col-lg-6">
					<div class="sermon_content">
						<div class="sermon_title"><a href="sermon_single.html"><?php echo $row->mission_title;?></a></div>
						
						<div class="sermon_text">
							<p><?php echo $row->mission_description; ?> </p>
						</div>
				
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="featured">
		<div class="container-fluid">
			<div class="row">

				<!-- Featured 1 -->
				<div class="col-lg-12 featured_col">
					<div class="featured_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url(); ?>/resources_final/images/featured_1.jpg" data-speed="0.8"></div>
					<div class="featured_1">
						<div class="sermon_content">
							<div class="sermon_title">History of Church</div>
								<div class="sermon_text">
								<p><?php echo $row->history; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="row">
				<div class="col">
					<div class="sermon_pastor d-flex flex-row align-items-start justify-content-start">
						<div class="sermon_pastor_image_container">
							<div class="sermon_pastor_image"><img src="<?php echo base_url();?>resources_final/images/pastor_photo.png" alt=""></div>
						</div>
						<div class="sermon_pastor_content">
							<div class="sermon_pastor_title">Message from Pastor</div>
							<div class="sermon_pastor_subtitle">Rudy and Rae Oversluizen</div>
							<div class="sermon_pastor_text">
								<p><?php echo $row->message;?></p>
							</div>
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
