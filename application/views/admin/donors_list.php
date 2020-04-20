<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Donors of the Church</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Donors of the Church
<div class="header-right">
                    <form class="navbar-form" role="search" action="<?php echo base_url(); ?>private_area/search_donors" method = "post">
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
			
			<div class="table-responsive">
			<table class="table table-striped table-bordered zero-configuration">
				<thead>
					<tr>
						<!-- <th>ID</th> -->
						<th>Name</th>
						<th>Email</th>
						<th>Amount</th>
						
						
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($users as $user){
						?>
						<tr>
							<!-- <td><?php echo $contact->contact_id; ?></td> -->
							<td><?php echo $user->name; ?></td>
							<td><?php echo $user->email; ?></td>
							<td><?php echo $user->amount; ?></td>
							
							
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