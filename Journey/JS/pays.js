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

	var back = document.getElementById("back");
	var new_map;
	var pays;
	var adresse = "http://localhost/formalités.php?pays=";
	function mymap()
	{
		new_map = new jvm.Map({
			container: $('#map'),
			map: 'world_mill',
			regionStyle: {
				hover: {
					fill: '#FFF81B'
				}
			},
			onRegionClick: function (event, code) {
				//window.location = adresse.concat(code);
				$('#first').show();
				$('#two').hide();
				$('#third').hide();
				$('.ui.longer.modal')
				.modal('show');
				var map = $('#map').vectorMap('get', 'mapObject');
				var name = map.getRegionName(code);
				$('#titre').html(name);
			}
		});
	}

	function focus()
	{
		$('#map').vectorMap('set', 'focus', {region: pays, animate: true, fill: '#128da7'});
		$('#map').css({"opacity": 1});
	}

	mymap();


	$('#pays').change(function(event, code){
		pays = $('#pays').val().toUpperCase();
		console.log(pays);
		focus();
	});

	back.onclick = function(){
		location.reload();
	};