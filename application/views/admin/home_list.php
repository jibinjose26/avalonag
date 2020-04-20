<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Home Dashboard</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Home Dashboard</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<a href="<?php echo base_url(); ?>Home_controller/home_manage" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a><br><br>
			<table class="table table-bordered table-striped">
				<thead>
				<tr>
					<th>ID</th>
					<th>Welcome Title</th>
					<!-- <th>welcome Image </th> -->
					<th>Date</th>
					<th>Action</th>

				</tr>
				</thead>
				<tbody>
				<?php
				foreach($homes as $home){
					?>
					<tr>
						<td ><?php echo $home->home_id; ?></td>
						<td > <?php echo $home->home_title; ?></td>
						<!-- <td><?php echo $home->home_wel_image; ?></td> -->
						<td><?php echo $home->date; ?></td>
						<td>
							<button onclick="location.href='<?php echo base_url(); ?>Home_controller/edit/<?php echo $home->home_id; ?>'" class="btn btn-success glyphicon glyphicon-edit" id="btn-edit">Edit</button> ||
							<button onclick="location.href='<?php echo base_url(); ?>Home_controller/delete/<?php echo $home->home_id; ?>'" class="btn btn-danger glyphicon glyphicon-trash">Delete</button>

							<!-- <a href="<?php echo base_url(); ?>private_area/edit/<?php echo $home->home_id; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a> -->
						</td>
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
