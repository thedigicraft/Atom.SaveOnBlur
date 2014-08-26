// Auto Save Field:
$('.auto-save').on('focus', function(){
  $(this).addClass('input-focus');
});

$('.auto-save').on('blur', function(){

  var id = $(this).attr("data-id"); // Unique identifier for the record we wish to UPDATE
  var label = $(this).attr("data-label"); // Label used for the notification.
  var db = $(this).attr("data-db"); // Database table-field string.
  var value = $(this).val(); // New value for the field.
  
  $(this).removeClass('input-focus');
  
  	$.get( "ajax/blur-save.php?id="+id+"&value="+value+"&db="+db+"&action=save", function( html ) {
    
	    var status = html;
	
	    if(status == 1) {         
	    	 
			// Notice script goes here...
			
	   	} // END if status
	   	
	}); // END .get  
	        
}); // END .auto-save