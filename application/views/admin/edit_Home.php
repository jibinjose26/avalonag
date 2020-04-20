
<div class="content-body">

	<div class="row page-titles mx-0">
		<div class="col p-md-0">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
			</ol>
		</div>
	</div>
	<!-- row -->


	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<?php extract($homepage);?>

				<form method="post" action="<?php echo base_url(); ?>Home_controller/updatehome/<?php echo $home_id; ?>" enctype="multipart/form-data">
					<label> welcome Title</label>
					<div class="card">
						<div class="card-body">

							<input type="text" name="home_title" id="home_title" class="form-control" value="<?php echo $home_title; ?>" />
							<span class="text-danger"><?php echo form_error('home_title');?></span>


						</div>
					</div>
					<label> welcome Description</label>

					<div class="card">
						<div class="card-body">
							<textarea name="home_description" class="input-block-level" id="summernote_home"><?php echo $home_description; ?></textarea>
							<span class="text-danger"><?php echo form_error('home_description');?></span>

						</div>
					</div>
					<label> welcome Image</label>
					<div class="card">
						<div class="card-body">
							<img id="image1" src="<?php echo $home_wel_image;?>" alt="" height="100" width="100">
							<input type="hidden" name="home_wel_image_old" id="home_wel_image_old" value="<?php echo $home_wel_image; ?>">
							<input type="file" name="home_wel_image" accept=".gif,.jpg,.jpeg,.png" value="<?php echo $home_wel_image; ?>" onchange="readURL1(this);"/>
							<span class="text-danger"><?php echo form_error('home_wel_image');?></span>
						</div>
					</div>
					<label> welcome Slider Image 1</label>
					<div class="card">
						<div class="card-body">
							<img id="image2" src="<?php echo $home_image_s1;?>" alt="" height="100" width="100">
							<input type="hidden" name="home_image_s1_old" id="home_image_s1_old" value="<?php echo $home_image_s1; ?>">
							<input type="file" name="home_image_s1" accept=".gif,.jpg,.jpeg,.png" value="<?php echo $home_image_s1; ?>" onchange="readURL2(this);"/>
							<span class="text-danger"><?php echo form_error('home_image_s1');?></span>
						</div>
					</div><label> welcome Slider Image 2</label>
					<div class="card">
						<div class="card-body">
							<img id="image3" src="<?php echo $home_image_s2;?>" alt="" height="100" width="100">
							<input type="hidden" name="home_image_s2_old" id="home_image_s2_old" value="<?php echo $home_image_s2; ?>">
							<input type="file" name="home_image_s2" accept=".gif,.jpg,.jpeg,.png" value="<?php echo $home_image_s2; ?>" onchange="readURL3(this);"/>
							<span class="text-danger"><?php echo form_error('home_image_s2');?></span>
						</div>
					</div><label> welcome Slider Image 3</label>
					<div class="card">
						<div class="card-body">
							<img id="image4" src="<?php echo $home_image_s3;?>" alt="" height="100" width="100">
							<input type="hidden" name="home_image_s3_old" id="home_image_s3_old" value="<?php echo $home_image_s3; ?>">
							<input type="file" name="home_image_s3" accept=".gif,.jpg,.jpeg,.png" value="<?php echo $home_image_s3; ?>" onchange="readURL4(this);"/>
							<span class="text-danger"><?php echo form_error('home_image_s3');?></span>
						</div>
					</div>




			</div>
			<div class="card">
				<div class="card-body">
					<input type="submit" name="save" id="save" value="Save" class="btn btn-success btn-rounded">
					<!-- <button id="save" class="btn btn-success btn-rounded" onclick="save()" type="button">Save</button> -->
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- #/ container -->
</div>


<script type="text/javascript">
    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image1')
                    .attr('src', e.target.result);

            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image2')
                    .attr('src', e.target.result);

            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image3')
                    .attr('src', e.target.result);

            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURL4(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image4')
                    .attr('src', e.target.result);

            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>


