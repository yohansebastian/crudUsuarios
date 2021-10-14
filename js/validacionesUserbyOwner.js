// ----------------------------- Funciones para validar el selector de Usuario por Propietario -------------------//

function validar_campo_select_Propietario(id){
        if ($('#'+id).val() == 0) {
            $('#'+id).parent().parent().attr('class',
                'form-group has-error');
            $('#'+id).css('color', '#bb6c6a');
            $('#msg-'+id).show();
            $('#msg-'+id).html(
                '<strong>¡Cuidado!</strong>&nbsp;Debe seleccionar un Propietario!'
                );
        } else if ($('#'+id).val() != 'x') {
            $('#msg-'+id).hide();
            $('#'+id).parent().parent().attr('class',
                'form-group has-success');
            $('#'+id).css('color', '#497f4a');
        }
}
function validar_campo_select_Usuario(id){
    if ($('#'+id).val() == 0) {
        $('#'+id).parent().parent().attr('class',
            'form-group has-error');
        $('#'+id).css('color', '#bb6c6a');
        $('#msg-'+id).show();
        $('#msg-'+id).html(
            '<strong>¡Cuidado!</strong>&nbsp;Debe seleccionar un Usuario!'
            );
    } else if ($('#'+id).val() != 'x') {
        $('#msg-'+id).hide();
        $('#'+id).parent().parent().attr('class',
            'form-group has-success');
        $('#'+id).css('color', '#497f4a');
    }
}
function validar_campo_select_Rol(id){
    if ($('#'+id).val() == 0) {
        $('#'+id).parent().parent().attr('class','form-group has-error');
        $('#'+id).css('color', '#bb6c6a');
        $('#msg-'+id).html(
            '<strong>¡Cuidado!</strong>&nbsp;Debe seleccionar un Rol!'
            );
    } else if ($('#'+id).val() != 'x') {
        $('#msg-'+id).hide();
        $('#'+id).parent().parent().attr('class',
            'form-group has-success');
        $('#'+id).css('color', '#497f4a');
    }
}