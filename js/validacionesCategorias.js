function validar_campo_texto(textoInput,id){
	if (!isNaN(textoInput)){
		$('#'+id).parent().parent().attr('class','form-group has-error');					
		$('#'+id).css('color','#bb6c6a');
		$('#msg-'+id).html('Ingrese sólo letras!');
		return false
	}else if (textoInput.length < 4 || /^\s+$/.test(textoInput)){
		$('#'+id).parent().parent().attr('class','form-group has-error');					
		$('#'+id).css('color','#bb6c6a');
		$('#msg-'+id).html('El texto ingresado es demaciado corto');
		return false
	}else{
		$('#'+id).parent().parent().attr('class','form-group has-success');					
		$('#'+id).css('color','#497f4a');			
		$('#msg-'+id).html('');
	}	
}