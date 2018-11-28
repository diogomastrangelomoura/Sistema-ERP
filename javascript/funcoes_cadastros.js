$(document).ready(function(){

	$(".marca_todos").click(function() {
		if($(this).is(':checked')){
			$(".marca_checkbox").prop( "checked", true);		
		} else {
			$(".marca_checkbox").prop( "checked", false);		
		}
	});

});	