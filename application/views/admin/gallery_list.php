<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Home gallery Dashboard</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Home gallery Dashboard</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<a href="<?php echo base_url(); ?>Home_gallery_controller/gallery_manage" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a><br><br>
			<table class="table table-bordered table-striped">
				<thead>
				<tr>
					<th>ID</th>

					<th>Slider Image 1</th>
					<!-- <th>Slider Image 2</th> -->
					<!-- <th>Slider Image 3</th>
					<th>Slider Image 4 </th> -->
					
					<th>Action</th>

				</tr>
				</thead>
				<tbody>
				<?php
				foreach($gallerys as $gallery){
					?>
					<tr>
						<td ><?php echo $gallery->home_gallery_id; ?></td>
						<td > <?php echo $gallery->home_gallery_image1; ?></td>
						<!-- <td ><?php echo $gallery->home_gallery_image2; ?></td> -->
						<!-- <td><?php echo $gallery->home_gallery_image3; ?></td>
						<td><?php echo $gallery->home_gallery_image4; ?></td> -->

						<td>
							<button onclick="location.href='<?php echo base_url(); ?>Home_gallery_controller/edit/<?php echo $gallery->home_gallery_id; ?>'" class="btn btn-success glyphicon glyphicon-edit" id="btn-edit">Edit</button> ||
							<button onclick="location.href='<?php echo base_url(); ?>Home_gallery_controller/delete/<?php echo $gallery->home_gallery_id; ?>'" class="btn btn-danger glyphicon glyphicon-trash">Delete</button>

							<!-- <a href="<?php echo base_url(); ?>private_area/edit/<?php echo $gallery->home_gallery_id; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a> -->

					</tr>
					<?php
				}
				?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>
