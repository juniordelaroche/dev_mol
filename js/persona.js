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

//muestra el id de la ciudad seleccionada
$('#cboCiudad').change(function(){
	$('#cboCiudad option:selected').each(function(){
		var id = $('#cboCiudad').val()
	})
})

$('#btnGetPersonas').click(function(){
	$('#tablaPersonas tbody').html(
			'<tr>'+
			  '<th style="width: 10px">#</th>'+
			  '<th>Nombre</th>'+
			  '<th>Apellido</th>'+
			  '<th>Cedula</th>'+
			  '<th>Fecha Nac.</th>'+
			  '<th>Correo</th>'+
			  '<th>Ciudad</th>'+
			'</tr>')
	$.post(baseurl+"cPersona/getPersonas",
		function(data){
			var p = JSON.parse(data);
			$.each(p,function(i,item){
				$('#tablaPersonas').append(
					'<tr>'+
					  '<td>'+item.id_persona+'</td>'+
					  '<td>'+item.nombre+'</td>'+
					  '<td>'+item.apellido+'</td>'+
					  '<td>'+item.cedula+'</td>'+
					  '<td>'+item.fecha_nac+'</td>'+
					  '<td>'+item.correo+'</td>'+
					  '<td>'+item.ciudad+'</td>'+
					'</tr>'
				)
			})	
		})
})