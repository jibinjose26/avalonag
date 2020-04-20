<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Event Dashboard</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Event Dashboard
<div class="header-right">
                    <form class="navbar-form" role="search" action="<?php echo base_url(); ?>private_area/search_event" method = "post">
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
			<a href="<?php echo base_url(); ?>event_controller/event_manage" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a><br><br>
			<div class="table-responsive">
			<table class="table table-striped table-bordered zero-configuration">
				<thead>
					<tr>
						<th>ID</th>
						<th>Event Title</th>

						<th>Date</th>
						<th>Action</th>

					</tr>
				</thead>
				<tbody>
					<?php
					foreach($events as $event){
						?>
						<tr>
							<td><?php echo $event->id; ?></td>
							<td><?php echo $event->event_title; ?></td>

							<td><?php echo $event->date; ?></td>
							<td><a href="<?php echo base_url(); ?>event_controller/edit/<?php echo $event->id; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a> || <a href="<?php echo base_url(); ?>event_controller/delete/<?php echo $event->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
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
