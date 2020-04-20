	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url();?>/resources_final/images/blog.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content d-flex flex-row align-items-center justify-content-start">
							<div class="home_title">Latest Events</div>
							<div class="home_breadcrumbs ml-auto">
								<ul class="breadcrumbs">
									<li><a href="<?php echo site_url('Home/index');?>">Home</a></li>
									<li>Latest Events</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">

	<?php
	if($fetch_data->num_rows()>0)
	{

		foreach($fetch_data->result() as $row)
		{
	?>

			<div class="row">

				<!-- Blog Content -->
				<div class="col-lg-9">
					<div class="blog_content">

						<!-- Blog Post -->
						<div class="blog_post">
							<div class="blog_image">
								<img src="<?php echo $row->image;?>" alt="" width="700" height="300">


								</div>
							</div>
							<div class="blog_title"><a href="#"><?php echo $row->event_title;?></a></div>

							<div class="blog_text">

								<p><?php echo $row->event_description; ?> </p>
							</div>
						<div style="height: 20px" </div>
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
	<!-- Event registration to be included in special events page -->

			<div class="row">
				<div class="col-lg-4"></div>
				<div class="bootstrap-modal">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Register Now</button>
    	<form method="post" action="<?php echo base_url(); ?>Home/register_events" enctype="multipart/form-data">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Register for Events</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Name</label>
                                <input type="text" class="form-control" id="user_name" name="user_name" required>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Address</label>
                                <textarea class="form-control" id="user_address" name="user_address"></textarea>
                            </div>
                             <div class="form-group">
                                <label for="recipient-phone" class="col-form-label">Phone</label>
                                <input type="number" class="form-control" id="user_phone" name="user_phone" required>
                            </div>
                             <div class="form-group">
                                <label for="recipient-email" class="col-form-label">Email</label>
                                <input type="email" class="form-control" id="user_email" name="user_email" required>
                            </div>
                            <div class="form-group">
                            	<label for="events" class="col-form-label">Choose Event</label>
                            	<select class="form-control" id="event" name="event">
                            		 <?php 
						            foreach($fetch_data->result() as $row)
						            { 
						              echo '<option value="'.$row->id.'">'.$row->event_title.'</option>';
						            }
						            ?>
								</select>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
				
			</div>

<!-- Event registartion untill above -->
	</div>
	</div>



	


