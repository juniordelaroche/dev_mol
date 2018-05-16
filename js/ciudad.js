// Script para mostrar en la vista vCiudades todas las ciudades registradas 
/*$('#btnGetCiudades').click(function(){
	$('#tablaCiudades tbody').html(
			'<tr>'+
			  '<th style="width: 10px">#</th>'+
			  '<th>Ciudad</th>'+
			'</tr>')
	$.post(baseurl+"cCiudad/getCiudades",
		{
			"sitreg": 1
		},
		function(data){
			var p = JSON.parse(data);
			$.each(p,function(i,item){
				$('#tablaCiudades').append(
					'<tr>'+
					  '<td>'+item.id_ciudad+'</td>'+
					  '<td>'+item.ciudad+'</td>'+
					'</tr>'
				)
			})	
		})
})*/
 //
$.post(baseurl+"cCiudad/getCiudades",
	{
		sitreg:1
	},
	function(data){
		var obj = JSON.parse(data)
		output = ''
		var estilo = 'width: 100px;height: 100px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #5cb85c;'
		$.each(obj,function(i,item){
			output+= 
			'<li>'+
			  '<div style="'+estilo+'" class="clsCiudad"></div>'+
			  '<input type="text" style="width:60%;" value="'+item.ciudad+'" class="clsNombreCiudad">'+ 
			  '<a class="users-list-name" href="#">'+item.ciudad+'</a>'+
			  '<span class="users-list-date">'+item.id_ciudad+'</span>'+
			'</li>'
		})
		$('#listCiudades').html(output)

		$('#listCiudades .clsCiudad').click(function(){
			var i = $('.clsCiudad').index(this)
			var nc = $('.clsNombreCiudad:eq('+i+')').val();
			alert(nc)
		})
	})
$('#btnGuardar').click(function(){
	var i = 0;
	$('#listCiudades .clsNombreCiudad').each(function(){
		var nc = $('.clsNombreCiudad:eq('+i+')').val();
		i++

		//puedes hacer la insersion desde el valor de nc
		alert(nc)
	})
})