$.post(baseurl+"cCiudad/getCiudades",
	{
		"sitreg": 1
	},
	function (data){
		//leer el formato json
		var ciudad = JSON.parse(data);
		$.each(ciudad,function(i,item){
			$('#cboCiudad').append('<option value="'+item.id_ciudad+'">'+item.ciudad+'</option>');
		});
	});