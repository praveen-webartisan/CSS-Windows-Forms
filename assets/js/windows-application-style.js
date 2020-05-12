$.fn.modal = function(display = 'show', options = null){
	if(display == 'show'){
		$(this).addClass('show-modal');
	}else{
		$(this).removeClass('show-modal');
	}

	return this;
};

$(document).on('click', '.field-group > .form-label', function(){
	var field = $(this).closest('.field-group').children('.form-field');

	if(field.is(':radio') || field.is(':checkbox')){
		field.prop('checked', !field.is(':checked'));
	}

	field.focus();
});

$(document).on('click', '.modal', function(e){
	e.preventDefault();
	if(!($(e.target).is('.modal-dialog') || $(e.target).is('.modal-dialog *'))){
		$(this).modal('hide');
	}
});

$(document).on('click', '.modal-close', function(e){
	$(this).closest('.modal').modal('hide');
});

$(document).on('click', '#menuItemQuit', function(e){
	e.preventDefault();
	$('#myModal').modal('show');
});