//---------------- FUNCIONES PARA VALIDAR CAMPOS DE TEXTO, NUMERICOS, CORREO-----------------

function validar_campo_numerico(textoInput,id,permiteNull){
    if(permiteNull){
        if(isNaN(textoInput) || /^\s+$/ .test(textoInput) || textoInput.length < 10){
            $('#'+id).parent().parent().attr('class','form-group has-error');
            $('#'+id).css('color','#bb6c6a');
            $('#msg-'+id).html('Numero celular es demaciado corto!');
            return false
        }else {
            $('#'+id).parent().parent().attr('class','form-group has-success');					
			$('#'+id).css('color','#497f4a');
            $('#msg-'+id).html('');
        }
    }else{
		if (isNaN(textoInput) || /^\s+$/.test(textoInput) || textoInput.length == 0){
			$('#'+id).parent().parent().attr('class','form-group has-error');					
			$('#'+id).css('color','#bb6c6a');
            if (isNaN(texto))
				$('#msg-'+id).html('Ingrese sólo números!');
			else
				$('#msg-'+id).html('Este campo es obligatorio!');
			return false
		}else{
			$('#'+id).parent().parent().attr('class','form-group has-success');					
			$('#'+id).css('color','#497f4a');	
            $('#msg-'+id).html('');		
		}
    }
}
function validar_campo_numericoDocumento(textoInput,id,permiteNull){
    if(permiteNull){
        if(isNaN(textoInput) || /^\s+$/ .test(textoInput) || textoInput.length < 7){
            $('#'+id).parent().parent().attr('class','form-group has-error');
            $('#'+id).css('color','#bb6c6a');
            $('#msg-'+id).html('Numero documento es demaciado corto!');
            return false
        }else {
            $('#'+id).parent().parent().attr('class','form-group has-success');					
			$('#'+id).css('color','#497f4a');
            $('#msg-'+id).html('');
        }
    }else{
		if (isNaN(textoInput) || /^\s+$/.test(textoInput) || textoInput.length == 0){
			$('#'+id).parent().parent().attr('class','form-group has-error');					
			$('#'+id).css('color','#bb6c6a');
            if (isNaN(texto))
				$('#msg-'+id).html('Ingrese sólo números!');
			else
				$('#msg-'+id).html('Este campo es obligatorio!');
			return false
		}else{
			$('#'+id).parent().parent().attr('class','form-group has-success');					
			$('#'+id).css('color','#497f4a');	
            $('#msg-'+id).html('');		
		}
    }
}
function validar_campo_numericoTelefono(textoInput,id,permiteNull){
    if(permiteNull){
        if(isNaN(textoInput) || /^\s+$/ .test(textoInput) || textoInput.length < 7){
            $('#'+id).parent().parent().attr('class','form-group has-error');
            $('#'+id).css('color','#bb6c6a');
            $('#msg-'+id).html('Numero telefono es demaciado corto!');
            return false
        }else {
            $('#'+id).parent().parent().attr('class','form-group has-success');					
			$('#'+id).css('color','#497f4a');
            $('#msg-'+id).html('');
        }
    }else{
		if (isNaN(textoInput) || /^\s+$/.test(textoInput) || textoInput.length == 0){
			$('#'+id).parent().parent().attr('class','form-group has-error');					
			$('#'+id).css('color','#bb6c6a');
            if (isNaN(texto))
				$('#msg-'+id).html('Ingrese sólo números!');
			else
				$('#msg-'+id).html('Este campo es obligatorio!');
			return false
		}else{
			$('#'+id).parent().parent().attr('class','form-group has-success');					
			$('#'+id).css('color','#497f4a');	
            $('#msg-'+id).html('');		
		}
    }
}
function validar_campo_texto(textoInput,id){
	if (!isNaN(textoInput)){
		$('#'+id).parent().parent().attr('class','form-group has-error');					
		$('#'+id).css('color','#bb6c6a')
		$('#msg-'+id).html('Ingrese sólo letras!');
		return false
	}else if (textoInput.length < 3 || /^\s+$/.test(textoInput)){
		$('#'+id).parent().parent().attr('class','form-group has-error');					
		$('#'+id).css('color','#bb6c6a')
		$('#msg-'+id).html('El texto ingresado es demaciado corto');
		return false
	}else{
		$('#'+id).parent().parent().attr('class','form-group has-success');					
		$('#'+id).css('color','#497f4a');			
		$('#msg-'+id).html('');
	}	
}
