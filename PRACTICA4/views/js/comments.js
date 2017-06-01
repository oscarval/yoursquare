$(document).ready(function(){

	$("[id*=cuadro_respuestas_]").hide(500);


	$(".mostrar_comentarios").click(function(event){
		var id = event.target.id;


		if( $("#cuadro_respuestas_"+id).is(":visible") ){
		    $("#cuadro_respuestas_"+id).hide(500);
		    $('#'+id).val('Ver Respuestas');

		}else{
		    $("#cuadro_respuestas_"+id).show(500);
		    $('#'+id).val('Ocultar');
		}


		

		/*if (document.getElementById('cuadro_respuestas_'+id).style.display == 'none') {
				document.getElementById('panel-principal1').style.display = 'none';
				$("#panel-principal2").slideToggle("slow",
						function() {
							// Animation complete.
						});
				document.getElementById('boton').value = 'Ocultar';
				refresh();

		} 
		else {
			$("#panel-principal1").slideToggle("slow",
					function() {
						// Animation complete.
					});
			document.getElementById('panel-principal2').style.display = 'none';
			document.getElementById('boton').value = 'Buscar';
			showCurrentAvailability();
		}*/
		
	});


});
