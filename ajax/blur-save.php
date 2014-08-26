<?php
	
	// Database Connection:
	include('../config/connection.php');

	// Breakup the POST values into easy variables:
	$id = $_POST['id']; // Unique identifier for the record we wish to UPDATE
	$value = $_POST['value']; // New Value
	$action = $_POST['action']; // 
	
	# Break up database info:
	$db = explode('-', $_GET['field']); // Explode the table and feild name from string.
	$table = $db[0]; // Store the table name.
	$field = $db[1]; // Store the field name.



	if($action == 'save') {
	
		# Run a query to get the current value of the field:
		$q = "SELECT $field FROM $table WHERE id = $id";
		$r = mysqli_query($dbc, $q);
		
		// Store the result:
		$check = mysqli_fetch_assoc($r);
      	
		# Check the new value with the current value:
		if($check[$field] != $value) {
        
	        # Make the update:
	        $q = "UPDATE $table SET $field = '$value' WHERE id = $id";
	        $r = mysqli_query($dbc, $q);
			
			# If there is a result
	        if($r){
	        	
				// Send successful update status back:
	        	echo 1;
				
			}else{
				
				// Error Handling:
				echo mysqli_error($dbc).'<br>'.$q;
				
			}        
        
      	}else{
        
			// Send no update status back:
        	echo 3;
        
      	} // END if $check

	} // END if $action

?>

