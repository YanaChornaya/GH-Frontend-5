$(document).ready(function() {
	$('#text').keyup(function(){
		var empty = false;
		$('#text').each(function() {
		if ($(this).val().length == 0) {
			empty = true;
		}
		});	
		if(empty)
			$('#button').attr('disabled', true); 
		else
			$('#button').attr('disabled',false);
	});
});

$('#button').click(function() {
    if ($('#text').val() !== '') {
   		var text = $("#text").val();
   	 	$('#toDoList').append('<li><input type="checkbox" id="check">' + text + '<span class="fa fa-times"></span></li>');
    }
    $('#text').val('');
    return false;
});

$('#toDoList').on('click', '.fa', function() {
	$(this).parent().remove();
});

$('#toDoList').on('click', '#check', function() {
	if ($(this).parent().css('text-decoration') =='line-through') {
		$(this).parent().css('text-decoration','none');	
	}
	else {
		$(this).parent().css('text-decoration','line-through');	
	}
});






