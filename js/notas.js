$.post(baseurl+"cNotas/getNotas",
	function(data){
		var obj = JSON.parse(data)
		$.each(obj, function(i,item){
			$('#tablaNotas').append(
				'<tr class="filaNotas">'+
					'<td>'+item.id_persona+'</td>'+
					'<td><div class="alum" id="'+item.id_persona+'"></div>'+item.alumno+'</td>'+
					'<td><input type="number" value="'+item.primer_bimestre+'" class="nota1"></td>'+
					'<td><input type="number" value="'+item.segundo_bimestre+'" class="nota2"></td>'+
					'<td><input type="number" value="'+item.tercer_bimestre+'" class="nota3"></td>'+
					'<td><input type="text"  value="'+item.nota_final+'" class="notafinal"></td>'+
				'</tr>')
		})

		$('input[type=number]').focusout(function(){
			if ($(this).val()>20) {
				//alert('valor excede el limite permitido')

			}
		})

		$('#tablaNotas .nota3').keyup(function(){
			//como una matriz
			var i = $('.nota3').index(this)

			var n1 = $('.nota1:eq('+i+')').val()
			var n2 = $('.nota2:eq('+i+')').val()

			var promedio = (parseFloat(n1)+parseFloat(n2)+parseFloat($(this).val()))/3
			$('.notafinal:eq('+i+')').val(Math.round(promedio))
		})
	})

$('#btnGuardarNotas').click(function(){
	var i = 0
	$('#tablaNotas .filaNotas').each(function(){
		var idPer = $('.alum').attr('id')
		var n1 = $('.nota1:eq('+i+')').val()
		var n2 = $('.nota2:eq('+i+')').val()
		var n3 = $('.nota3:eq('+i+')').val()
		var nf = $('.notafinal:eq('+i+')').val()

		$.post(baseurl+"cNotas/guardarNotas",
			{
				idPer:idPer,
				n1:n1,
				n2:n2,
				n3:n3,
				nf:nf
			},
			function(data){
				alert(data);
			})
		i++
	})
})