<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>About Dashboard</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container">
	<h1 class="page-header text-center">About Dashboard
<div class="header-right">
                    <form class="navbar-form" role="search" action="<?php echo base_url(); ?>private_area/search_about" method = "post">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name = "search" size="15px; ">
        <div class="input-group-btn">
            <button class="btn btn-default " type="submit" value = "Search" ><i class="fa fa-search"></i></button>
        </div>
    </div>
</form>
                </div>
	</h1>
	
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<a href="<?php echo base_url(); ?>private_area/about_manage" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a><br><br>
			<div class="table-responsive">
			<table class="table table-striped table-bordered zero-configuration">
				<thead>
					<tr>
						<th>ID</th>
						<th>Mission Title</th>
						<th>Vision Title</th>
						<th>Date</th>
						<th>Action</th>
						
					</tr>
				</thead>
				<tbody>
					<?php

					foreach($abouts as $about){
						?>
						<tr>
							<td><?php echo $about->about_id; ?></td>
							<td><?php echo $about->mission_title; ?></td>
							<td><?php echo $about->vision_title; ?></td>
							<td><?php echo $about->date; ?></td>
							<td>
								<button onclick="location.href='<?php echo base_url(); ?>private_area/edit/<?php echo $about->about_id; ?>'" class="btn btn-success glyphicon glyphicon-edit" id="btn-edit">Edit</button> || 
								<button onclick="location.href='<?php echo base_url(); ?>private_area/delete/<?php echo $about->about_id; ?>'" class="btn btn-danger glyphicon glyphicon-trash">Delete</button>

								<!-- <a href="<?php echo base_url(); ?>private_area/edit/<?php echo $about->about_id; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a> -->
								
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
		</div>
	</div>
</div>
</body>
</html>