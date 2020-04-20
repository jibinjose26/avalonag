
<div class="content-body">

	<div class="row page-titles mx-0">
		<div class="col p-md-0">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Event</a></li>
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
				<form method="post" action="<?php echo base_url();?>Event_controller/validation" enctype="multipart/form-data">
					<label> Event Title</label>
					<div class="card">
						<div class="card-body">

							<input type="text"  id="event_title" name="event_title" class="form-control" value="<?php echo set_value('event_title');?>" />
							<span class="text-danger"><?php echo form_error('event_title');?></span>


						</div>
					</div>
					<label> Event Description</label>
					<div class="card">
						<div class="card-body">
							<textarea name="event_description" class="input-block-level" id="summernote_vision"><?php echo set_value('event_description')?></textarea>
							<span class="text-danger"><?php echo form_error('event_description');?></span>
							<!-- <h3>Default Summernote</h3> -->
						</div>
					</div>
					<label> Event Image</label>
					<div class="card">
						<div class="card-body">
							<img id="image1" src="<?php echo set_value('image')?>" alt="" height="100" width="100">
							<input type="file" name="image" value="<?php echo set_value('image')?>" accept=".gif,.jpg,.jpeg,.png" onchange="readURL1(this);"/>
							<span class="text-danger"><?php echo form_error('image');?></span>
							<!-- <h3>Default Summernote</h3> -->
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
</script>




