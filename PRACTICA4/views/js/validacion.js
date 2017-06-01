$(function(){
	$("#campoEmail").change(function(){
		if ( correoValido($("#campoEmail").val() ) ) {
		$("#noEmail").hide();
		$("#okEmail").show();
		} else {
		$("#okEmail").hide();
		$("#noEmail").show();
		}
	});
	function correoValido(email) {
	  if (/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(email)){
	   return true;
	  } else {
	   return false;
	  }
	}
});

