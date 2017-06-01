$(function(){
	$('#usuario').keyup(function(){
		var query = $(this).val();
		if(query != ''){
			$.ajax({
				//al parecer no funciona con busqueda.php pero si se cambia a prueba.js si funciona
			url: 'procesa_busqueda.php',
			type: 'POST',
			data: {query:query},
			sucess:function(data)
			{
				//handleData(data);
				$('#nombre').fadeIn();
				$('#nombre').html(data);
			}
			});
		}
	});
});
