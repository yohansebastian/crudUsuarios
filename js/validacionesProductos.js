//---------------- FUNCIONES PARA VALIDAR CAMPOS DE TEXTO, NUMERICOS, CORREO-----------------

function validar_campo_codigo_base(textoInput,id,permiteNull){
    if(permiteNull){
        if(isNaN(textoInput) || /^\s+$/ .test(textoInput) || textoInput.length < 4){
            $('#'+id).parent().parent().attr('class','form-group has-error');
            $('#'+id).css('color','#bb6c6a');
            $('#msg-'+id).html('Código demasiado corto !');
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
function validar_campo_codigo_Barras(textoInput,id,permiteNull){
    if(permiteNull){
		if(isNaN(textoInput) || /^\s+$/ .test(textoInput) || textoInput.length == 0){
			$('#'+id).parent().parent().attr('class','form-group has-error');
            $('#'+id).css('color','#bb6c6a');
            $('#msg-'+id).html('Ingrese el código!');
            return false
		}
        else if(isNaN(textoInput) || /^\s+$/ .test(textoInput) || textoInput.length < 2){
            $('#'+id).parent().parent().attr('class','form-group has-error');
            $('#'+id).css('color','#bb6c6a');
            $('#msg-'+id).html('Código demasiado corto!');
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
function validar_campo_precio(textoInput,id,permiteNull){
    if(permiteNull){
		if(isNaN(textoInput) || /^\s+$/ .test(textoInput) || textoInput.length == 0){
			$('#'+id).parent().parent().attr('class','form-group has-error');
            $('#'+id).css('color','#bb6c6a');
            $('#msg-'+id).html('Ingrese el precio!');
            return false
		}
        else if(isNaN(textoInput) || /^\s+$/ .test(textoInput) || textoInput.length < 2){
            $('#'+id).parent().parent().attr('class','form-group has-error');
            $('#'+id).css('color','#bb6c6a');
            $('#msg-'+id).html('Precio demasiado corto!');
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
		$('#msg-'+id).html('Ingresar el nombre del Producto!');
		return false
	}else if (textoInput.length < 5 || /^\s+$/.test(textoInput)){
		$('#'+id).parent().parent().attr('class','form-group has-error');					
		$('#'+id).css('color','#bb6c6a')
		$('#msg-'+id).html('Nombre del producto es muy corto');
		return false
	}else{
		$('#'+id).parent().parent().attr('class','form-group has-success');					
		$('#'+id).css('color','#497f4a');			
		$('#msg-'+id).html('');
	}	
}
function validar_campo_select_Categoria(id){
	if ($('#'+id).val() == 0) {
		$('#'+id).parent().parent().attr('class',
			'form-group has-error');
		$('#'+id).css('color', '#bb6c6a')
		$('#msg-'+id).show();
		$('#msg-'+id).html(
			'Debe seleccionar una Categoria!'
			);
	} else if ($('#'+id).val() != 'x') {
		$('#msg-'+id).hide();
		$('#'+id).parent().parent().attr('class',
			'form-group has-success');
		$('#'+id).css('color', '#497f4a');
	}
}





