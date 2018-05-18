$.post(baseurl+"cPreguntas/getPreguntas",
	{
		"sitreg": 1
	},
	function (data){
		//leer el formato json
		var pregunta = JSON.parse(data);
		$.each(pregunta,function(i,item){
			$('.cboPregunta').append('<option value="'+item.id+'">'+item.question+'</option>');
		});
	});

