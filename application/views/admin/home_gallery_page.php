
<div class="content-body">

	<div class="row page-titles mx-0">
		<div class="col p-md-0">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Home Gallery</a></li>
			</ol>
		</div>
	</div>
	<!-- row -->

	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<form method="post" action="<?php echo base_url();?>Home_gallery_controller/validation" enctype="multipart/form-data">


					<!-- slider image-->
					<label> Gallery Images</label>
					<div class="card">
						<div class="card-body">
							<img id="image1" src="<?php echo set_value('home_gallery_image1')?>" alt="" height="100" width="100">
							<input type="file" name="home_gallery_image1" value="<?php echo set_value('home_gallery_image1')?>" accept=".gif,.jpg,.jpeg,.png" onchange="readURL1(this);" required/>
							<span class="text-danger"><?php echo form_error('home_gallery_image1');?></span>
							<!-- <h3>Default Summernote</h3> -->
						</div>
						<div class="card">
							<div class="card-body">
								<img id="image2" src="<?php echo set_value('home_gallery_image2')?>" alt="" height="100" width="100">
								<input type="file" name="home_gallery_image2" value="<?php echo set_value('home_gallery_image2')?>" accept=".gif,.jpg,.jpeg,.png" onchange="readURL2(this);" required/>
								<span class="text-danger"><?php echo form_error('home_gallery_image2');?></span>
								<!-- <h3>Default Summernote</h3> -->
							</div>
							<div class="card">
								<div class="card-body">
									<img id="image3" src="<?php echo set_value('home_gallery_image3')?>" alt="" height="100" width="100">
									<input type="file" name="home_gallery_image3" value="<?php echo set_value('home_gallery_image3')?>" accept=".gif,.jpg,.jpeg,.png" onchange="readURL3(this);" required/>
									<span class="text-danger"><?php echo form_error('home_gallery_image3');?></span>
									<!-- <h3>Default Summernote</h3> -->
								</div>
								<div class="card">
									<div class="card-body">
										<img id="image4" src="<?php echo set_value('home_gallery_image4')?>" alt="" height="100" width="100">
										<input type="file" name="home_gallery_image4" value="<?php echo set_value('home_gallery_image4')?>" accept=".gif,.jpg,.jpeg,.png" onchange="readURL4(this);" required/>
										<span class="text-danger"><?php echo form_error('home_gallery_image4');?></span>
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
