<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Contact Dashboard</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Contact Dashboard
<div class="header-right">
                    <form class="navbar-form" role="search" action="<?php echo base_url(); ?>private_area/search_contact" method = "post">
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
			<a href="<?php echo base_url(); ?>contact_controller/contact_manage" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add Contact Info</a><br><br>
			<div class="table-responsive">
			<table class="table table-striped table-bordered zero-configuration">
				<thead>
					<tr>
						<!-- <th>ID</th> -->
						<th>Name</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Action</th>
						
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($contacts as $contact){
						?>
						<tr>
							<!-- <td><?php echo $contact->contact_id; ?></td> -->
							<td><?php echo $contact->contact_name; ?></td>
							<td><?php echo $contact->contact_phone; ?></td>
							<td><?php echo $contact->contact_email; ?></td>
							<td>
								<button onclick="location.href='<?php echo base_url(); ?>contact_controller/edit/<?php echo $contact->contact_id; ?>'" class="btn btn-success glyphicon glyphicon-edit" id="btn-edit">Edit</button> || 
								<button onclick="location.href='<?php echo base_url(); ?>contact_controller/delete/<?php echo $contact->contact_id; ?>'" class="btn btn-danger glyphicon glyphicon-trash">Delete</button>
					
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