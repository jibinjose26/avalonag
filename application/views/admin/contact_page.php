
<div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Contact</a></li>
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
                    	<form method="post" action="<?php echo base_url();?>Contact_controller/validation" enctype="multipart/form-data">
                    	<label> Name</label>
                    	<div class="card">
                            <div class="card-body">
                            	
						<input type="text" name="contact_name" id="contact_name" class="form-control" value="<?php echo set_value('contact_name');?>" />
						<span class="text-danger"><?php echo form_error('contact_name');?></span>

                                
                            </div>
                        </div>
                         <label> Contact Address</label>
                        <div class="card">
                            <div class="card-body">
                                <textarea class="form-control h-150px" id="contact_address" name="contact_address" rows="4" /><?php echo set_value('contact_address')?></textarea>
                                <span class="text-danger"><?php echo form_error('contact_address');?></span>
                            </div>
                        </div>
                     
                        <label> Email Address</label>
                    	<div class="card">
                            <div class="card-body">
                            	
						<input type="email" name="email_address" id="email_address" class="form-control" value="<?php echo set_value('email_address');?>" />
						<span class="text-danger"><?php echo form_error('email_address');?></span>
                            </div>
                        </div>
                           <label> Phone</label>
                        <div class="card">
                            <div class="card-body">
                                
                        <input type="tel" name="phone" id="phone" class="form-control" value="<?php echo set_value('phone');?>" />
                        <span class="text-danger"><?php echo form_error('phone');?></span>
                            </div>
                        </div>
                            <label> Phone 2</label>
                        <div class="card">
                            <div class="card-body">
                           <input type='tel' name="phone2" id="phone2" class="form-control" value="<?php echo set_value('phone2');?>">     
                      <!--   <input type="number" name="phone2" id="phone2" class="form-control" value="<?php echo set_value('phone2');?>" /> -->
                        <span class="text-danger"><?php echo form_error('phone2');?></span>
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




       