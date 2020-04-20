
<div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">About</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->


            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                    	<?php extract($about);?>

                    	<form method="post" action="<?php echo base_url(); ?>private_area/update_about/<?php echo $about_id; ?>" enctype="multipart/form-data">
                    	<label> Vision Title</label>
                    	<div class="card">
                            <div class="card-body">
                            	
						<input type="text" name="vision_title" id="vision_title" class="form-control" value="<?php echo $vision_title; ?>" />
						<span class="text-danger"><?php echo form_error('vision_title');?></span>

                                
                            </div>
                        </div>
                        <label> Vision Description</label>
                        
                        <div class="card">
                            <div class="card-body">
                                <textarea name="vision_description" class="input-block-level" id="summernote_vision"><?php echo $vision_description; ?></textarea>
                                <span class="text-danger"><?php echo form_error('vision_description');?></span>
                                  
                            </div>
                        </div>
                        <label> Vision Image</label>
                        <div class="card">
                            <div class="card-body">
                            	<img id="image1" src="<?php echo $vision_image;?>" alt="" height="100" width="100">
                                <input type="hidden" name="vision_image_old" id="vision_image_old" value="<?php echo $vision_image; ?>">
                                <input type="file" name="vision_image" accept=".gif,.jpg,.jpeg,.png" value="<?php echo $vision_image; ?>" onchange="readURL1(this);"/>
                                <span class="text-danger"><?php echo form_error('vision_image');?></span>
                                  
                            </div>
                        </div>
                        <label> Mission Title</label>
                    	<div class="card">
                            <div class="card-body">
                            	
						<input type="text" name="mission_title" id="mission_title" class="form-control" value="<?php echo $mission_title; ?>" />
						<span class="text-danger"><?php echo form_error('mission_title');?></span>

                                
                            </div>
                        </div>
                        <label> Mission Description</label>
                        <div class="card">
                            <div class="card-body">
                                <textarea name="mission_description" id="summernote_mission"class="input-block-level"><?php echo $mission_description; ?></textarea>
                                <span class="text-danger"><?php echo form_error('mission_desription');?></span>
                           </div>
                        </div>
                        <label> Mission Image</label>
                        <div class="card">
                            <div class="card-body">
                                <img id="image2" src="<?php echo $mission_image;?>" alt="" height="100" width="100">
                                <input type="hidden" name="mission_image_old" id="mission_image_old" value="<?php echo $mission_image; ?>">
                                <input type="file" name="mission_image" accept=".gif,.jpg,.jpeg,.png" value="<?php echo $mission_image; ?>" onchange="readURL2(this);"/>
                                <span class="text-danger"><?php echo form_error('mission_image');?></span>
                                   
                            </div>
                        </div>
                           <label> History of church</label>
                        <div class="card">
                            <div class="card-body">
                                <textarea class="form-control h-150px" id="history" name="history" rows="7"><?php echo $history; ?></textarea>
                                <span class="text-danger"><?php echo form_error('history');?></span>
                            </div>
                        </div>
                         <label> Message from Pastor</label>
                        <div class="card">
                            <div class="card-body">
                                <textarea class="form-control h-150px" id="message" name="message" rows="7"><?php echo $message; ?></textarea>
                                <span class="text-danger"><?php echo form_error('message');?></span>
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




       