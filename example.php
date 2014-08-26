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
				
				<h3>This script uses:</h3>
				
				<blockquote>
					<ul>
						<li>HTML</li>
						<li>CSS</li>
						<li>Javascript/jQuery</li>
						<li>PHP</li>
						<li>MySQL</li>
						<li>AJAX</li>
					</ul>
				</blockquote>				
				
			</div><!-- END col -->
			
			<div class="col-sm-6">

				<h3>With Optional:</h3>
				
				<blockquote>
					<ul>
						<li>Twitter Bootstrap 3</li>
						<li>Font Awesome 4</li>
					</ul>
				</blockquote>				
				
			</div><!-- END col -->			
			
		</div><!-- END row -->
		
		<div class="row">
			
			<div class="col-sm-12">
				
				<h2>Examples:</h2>
				
			</div>

		</div>
		
		<div class="row">
			
			<div class="col-sm-6">
				<h3>Simple usage:</h3>
				<input data-id="<?=$id;?>" data-label="Name of the field" data-db="table-field" class="form-control" placeholder="Simple Text Field">
				
			</div>
			<div class="col-sm-6">
				<h3>Code:</h3>
<pre>
	<code class="language-markup">

<input data-id="<?=$id;?>" data-label="Name of the field" data-db="table-field" class="form-control" placeholder="Simple Text Field">
		
	</code>
</pre>				

				
			</div>
		</div>		

  	</div>

  </body>
</html>