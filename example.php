<?php include('config/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atom.SaveOnBlur</title>
    <?php include('config/css.php'); ?>
    <?php include('config/js.php'); ?>
    
    <!-- For Example Page -->
	<link rel="stylesheet" href="prism.css" >    
   	<script src="prism.js"></script>
    
  </head>
  <body>
  	
  	<div class="container">
  		
		<h1>Atom.SaveOn.Blur</h1>

		<p>This is a script that will allow you to easily turn a basic form field (input, textarea) into an field that will save once the user has clicked away from the field.</p>
		
		<div class="row">
			
			<div class="col-sm-6">
				
				<?php
				
					$query = "SELECT * FROM users ORDER BY last ASC";
					$result = mysqli_query($dbc, $query);
					
					while($data = mysqli_fetch_assoc($result)) { ?>
				
						<div class="row">
							<h2><small>User:</small> <?php echo $data['first']; ?></h2>
							<div class="col-sm-12">
								<label>First Name:</label>
								<input type="text" class="blur-save form-control" data-id="<?php echo $data['id'];?>" data-label="First Name" data-db="users-first" value="<?php echo $data['first'];?>">
							</div>
							<div class="col-sm-12">
								<label>Last Name:</label>
								<input type="text" class="blur-save form-control" data-id="3" data-label="Last Name" data-db="users-last" value="<?php echo $data['last'];?>">
							</div>
							<div class="col-sm-12">
								<label>Website:</label>
								<input type="text" class="blur-save form-control" data-id="3" data-label="Website URL" data-db="users-website" value="<?php echo $data['website'];?>">
							</div>										
						</div>
			
				<?php } ?>
				
			</div><!-- END col -->
			
			<div class="col-sm-6">

			
				
			</div><!-- END col -->			
			
		</div><!-- END row -->	

  	</div>
	<div id="alert" class="alert" role="alert"></div>
  </body>
</html>