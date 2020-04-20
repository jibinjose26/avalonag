
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


	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<?php extract($event);?>

				<form method="post" action="<?php echo base_url(); ?>Event_controller/update_event/<?php echo $id; ?>" enctype="multipart/form-data">
					<label> Event Title</label>
					<div class="card">
						<div class="card-body">

							<input type="text" name="event_title" id="event_title" class="form-control" value="<?php echo $event_title; ?>" />
							<span class="text-danger"><?php echo form_error('event_title');?></span>


						</div>
					</div>
					<label> Event Description</label>

					<div class="card">
						<div class="card-body">
							<textarea name="event_description" class="input-block-level" id="summernote_events"><?php echo $event_description; ?></textarea>
							<span class="text-danger"><?php echo form_error('vision_description');?></span>

						</div>
					</div>

					<label> Event Image</label>
					<div class="card">
						<div class="card-body">
							<img id="image2" src="<?php echo $image;?>" alt="" height="100" width="100">
							<input type="hidden" name="event_image_old" id="event_image_old" value="<?php echo $image; ?>">
							<input type="file" name="image" accept=".gif,.jpg,.jpeg,.png" value="<?php echo $image; ?>" onchange="readURL2(this);"/>
							<span class="text-danger"><?php echo form_error('image');?></span>

						</div>
					</div>

			</div>
			<div class="card">
				<div class="card-body">
					<input type="submit" name="save" id="save" value="Save" class="btn btn-success btn-rounded">

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




