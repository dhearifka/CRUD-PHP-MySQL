
<?php require_once('inc/header.inc.php'); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="content">
				
				<?php
					require_once('inc/db.inc.php'); 
					$id = $_GET['id'];


					//ambil data
					$sql = "SELECT * FROM user WHERE id = ?";
					$result = $pdo->prepare($sql);
					$result->execute([$id]);
						
					$row = $result->fetch();


				?>
				
					<form method="post" action="./user.proses.edit.php?id=<?php  echo $row['id']; ?>">
						<div class="row">
							
							<div class="col-md-5">
								<div class="form-group">
									<label>Company (disabled)</label>
									<input type="text" name="company" class="form-control" readonly="" placeholder="Company" value="SV UGM">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="username" class="form-control" placeholder="Username" value="<?php  echo $row['username']; ?>">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="exampleInputEmail1">Email address</label>
									<input type="email" name="email" class="form-control" placeholder="Email" value="<?php  echo $row['email']; ?>"">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>First Name</label>
									<input type="text" name="first_name" class="form-control" placeholder="First Name" value="<?php  echo $row['first_name']; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" name="last_name" class="form-control" placeholder="Last Name" value="<?php  echo $row['last_name']; ?>">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Address</label>
									<input type="text" name="address" class="form-control" placeholder="Home Address" value="<?php  echo $row['address']; ?>">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>City</label>
									<input type="text" name="city" class="form-control" placeholder="City" value="<?php  echo $row['city']; ?>">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Country</label>
									<input type="text" name="country" class="form-control" placeholder="Country" value="<?php  echo $row['country']; ?>">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Postal Code</label>
									<input type="number" name="postal_code" class="form-control" placeholder="ZIP Code" value="<?php  echo $row['postal_code']; ?>">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>About Me</label>
									<textarea name="about_me" rows="5" class="form-control" placeholder="Here can be your description" ><?php  echo $row['about_me']; ?></textarea>
								</div>
							</div>
						</div>
						
						

						<a href="./">
							<button type="button" class="btn btn-default btn-fill pull-right" style="margin-left: 5px;">Cancel</button>
						</a>
						<button type="submit" class="btn btn-info btn-fill pull-right">Save</button>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once('inc/footer.inc.php'); ?>
