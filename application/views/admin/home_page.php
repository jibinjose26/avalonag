
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

	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<form method="post" action="<?php echo base_url();?>Home_controller/validation" enctype="multipart/form-data">
					<label> Welcome title </label>
					<div class="card">
						<div class="card-body">

							<input type="text" name="home_title" id="home_title" class="form-control" value="<?php echo set_value('home_title');?>" required/>
							<span class="text-danger"><?php echo form_error('home_title');?></span>
						</div>
					</div>
					<label> welcome Description</label>
					<div class="card">
						<div class="card-body">
							<textarea name="home_description" class="input-block-level" row="7" id="summernote_home"><?php echo set_value('home_description')?></textarea>
							<span class="text-danger"><?php echo form_error('home_description');?></span>
							<!-- <h3>Default Summernote</h3> -->
						</div>
					</div>

					<label> Welcome Image </label>
					<div class="card">
						<div class="card-body">
							<img id="image1" src="<?php echo set_value('home_wel_image')?>" alt="" height="100" width="100">
							<input type="file" name="home_wel_image" value="<?php echo set_value('home_wel_image')?>" accept=".gif,.jpg,.jpeg,.png" onchange="readURL1(this);" required/>
							<span class="text-danger"><?php echo form_error('home_wel_image');?></span>
							<!-- <h3>Default Summernote</h3> -->
						</div>
					</div>
					<!-- slider image-->
					<label> Welcome Image slider </label>
					<div class="card">
						<div class="card-body">
							<img id="image2" src="<?php echo set_value('home_image_s1')?>" alt="" height="100" width="100">
							<input type="file" name="home_image_s1" value="<?php echo set_value('home_image_s1')?>" accept=".gif,.jpg,.jpeg,.png" onchange="readURL2(this);" required/>
							<span class="text-danger"><?php echo form_error('home_image_s1');?></span>
							<!-- <h3>Default Summernote</h3> -->
						</div>
						<div class="card">
							<div class="card-body">
								<img id="image3" src="<?php echo set_value('home_image_s2')?>" alt="" height="100" width="100">
								<input type="file" name="home_image_s2" value="<?php echo set_value('home_image_s2')?>" accept=".gif,.jpg,.jpeg,.png" onchange="readURL3(this);" required/>
								<span class="text-danger"><?php echo form_error('home_image_s2');?></span>
								<!-- <h3>Default Summernote</h3> -->
							</div>
							<div class="card">
								<div class="card-body">
									<img id="image4" src="<?php echo set_value('home_image_s3')?>" alt="" height="100" width="100">
									<input type="file" name="home_image_s3" value="<?php echo set_value('home_image_s3')?>" accept=".gif,.jpg,.jpeg,.png" onchange="readURL4(this);" required/>
									<span class="text-danger"><?php echo form_error('home_image_s3');?></span>
									<!-- <h3>Default Summernote</h3> -->
								</div>
					</div>


			<div class="card">
				<div class="card-body">
					<input type="submit" name="save" value="Save" class="btn btn-success btn-rounded">
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
