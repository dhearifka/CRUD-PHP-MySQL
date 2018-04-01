
<?php require_once('inc/header.inc.php'); ?>

<div class="container-fluid">
	<div class="row">

		<div class="col-md-12">
			<div class="card card-plain">
				<div class="header" style="padding-top: 1px; padding-right: 25px">
					<a href="./" class="pull-right btn btn-fill btn-default btn-sm">Back</a>
				</div>
				
					
					<?php
					require_once('inc/db.inc.php'); 
					$id = $_GET['id'];


					//ambil data
					$sql = "SELECT * FROM user WHERE id = ?";
					$result = $pdo->prepare($sql);
					$result->execute([$id]);
						
					$row = $result->fetch();


					?>
					
					
				<div class="content table-responsive table-full-width">	
					<table class="table table-hover">
						<thead>
							<th width="20%">Field</th>
							<th>Value</th>
						</thead>
						<tbody>
			
							
							<tr>
								<td>Company</td>
								<td><strong><?php  echo $row['company']; ?></strong></td>
							</tr>
							<tr>
								<td>Username</td>
								<td><strong><?php  echo $row['username']; ?></strong></td>
							</tr>
							<tr>
								<td>Email Address</td>
								<td><strong><?php  echo $row['email']; ?></strong></td>
							</tr>
							<tr>
								<td>First Name</td>
								<td><strong><?php  echo $row['first_name']; ?></strong></td>
							</tr>
							<tr>
								<td>Last Name</td>
								<td><strong><?php  echo $row['last_name']; ?></strong></td>
							</tr>
							<tr>
								<td>Address</td>
								<td><strong><?php  echo $row['address']; ?></strong></td>
							</tr>
							<tr>
								<td>City</td>
								<td><strong><?php  echo $row['city']; ?></strong></td>
							</tr>
							<tr>
								<td>Country</td>
								<td><strong><?php  echo $row['country']; ?></strong></td>
							</tr>
							<tr>
								<td>Postal Code</td>
								<td><strong><?php  echo $row['postal_code']; ?></strong></td>
							</tr>
							<tr>
								<td>About Me</td>
								<td><strong><?php  echo $row['about_me']; ?></strong></td>
							</tr>

						</tbody>
					</table>

				</div>
			</div>
		</div>

	</div>
</div>

<?php require_once('inc/footer.inc.php'); ?>
