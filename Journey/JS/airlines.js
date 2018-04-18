	$('.ui.dropdown')
	.dropdown();

	$('.ui.modal')
	.modal();

	$('.ui.vertical.pointing.menu')
	.on('click', '.item', function() {
		if(!$(this).hasClass('active')) {
			$(this)
			.addClass('active')
			.siblings('.item')
			.removeClass('active');
		}
		if($(this).hasClass('premier'))
		{
			$('#first').show();
			$('#two').hide();
			$('#third').hide();
		}
		else if($(this).hasClass('second'))
		{
			$('#two').show();
			$('#third').hide();
			$('#first').hide();	
		}
		else if($(this).hasClass('troisieme'))
		{
			$('#third').show();
			$('#first').hide();
			$('#two').hide();
		}
	});

	$('#airlines').change(function(){
		$('.ui.longer.modal')
		.modal('show');
		$('#first').show();
		$('#two').hide();
		$('#third').hide();
	});