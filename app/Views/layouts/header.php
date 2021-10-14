<!DOCTYPE HTML>
<html>
<head>
<title>Formulario Usuario</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<!-- chart -->
<script src="js/Chart.js"></script>
<script src="js/validacionesUsuarios.js"></script>
<!-- //chart -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->

<!-- Placed js at the end of the document so the pages load faster -->
<script>
$(document).ready(function(){
	//Validacion de Datos
	$(document).on('click','#guardarBtn',function(e){
		e.preventDefault();
		validar_campo_texto		($('#u_nombres').val(),'u_nombres');
		validar_campo_email		($('#email').val(),'email');
		validar_campo_texto		($('#u_apellido').val(),'u_apellido');
		var nombres 	= $('#u_nombres').val();
		var apellido 	= $('#u_apellido').val();
		var correo 		= $('#email').val();
		var rol 		= $('#roles').val();
		var u_id		= $('#hiddenid').val();
		if(u_id.length === 0){
			if (nombres,apellido,correo == 0){
				return false;
			}else{
				$('#formUsuario').submit();
			}
		}else{
			swal({
			title: "Confirme ",
			text: "Desea Editar el Usuario " + nombres +" !",
			icon: "warning",
			buttons: ["Cancelar",true],
			dangerMode: true,
			})
			.then((willUpdate) => {
			if (willUpdate) {
				$.ajax({
					method: "GET",
					url: "editarUsuario",
					data:{
						'u_id'        : u_id,
						'u_nombres'   : nombres,
						'u_apellido'  : apellido,
						'u_correo'    : correo,
						'u_rol'		  : rol	
					},
					dataType: 'JSON',
					success: function(resultado){
						location.href = location.href;
					}
				});
				swal("Listo! El usuario a sido editado!", {
				icon: "success",
				});	
			} else {
				swal("No se ha editado el Usuario " + nombres +"!");
			}
		});
		}
	});
	$(document).on('blur','#u_nombres',function(){
		validar_campo_texto($('#u_nombres').val(),'u_nombres')
	});
	$(document).on('blur','#u_apellido',function(){
		validar_campo_texto($('#u_apellido').val(),'u_apellido')
	});
	$(document).on('blur','#email',function(){
		validar_campo_email($('#email').val(),'email')
	});
/*-------------------------------------------------------------------------------------------------------*/
	$(document).on('click','#eliminarBtn',function(e){
		e.preventDefault();
		var nombre = $(this).parents("tr").find("td")[1].innerHTML;
		swal({
			title: "Seguro ?",
			text: "¿ Desea eliminar el usuario " + nombre + " ?",
			icon: "warning",
			buttons: ["Cancelar",true],
			dangerMode: true,
			})
			.then((willDelete) => {
			if (willDelete) {
				var u_id = $(this).parents("tr").find("td")[0].innerHTML;
				
				$.ajax({
					method: "GET",
					url: "eliminarUsuario",
					data:{
						'u_id' : u_id,
					},
					success: function(response){
						console.log("Eliminado");
						location.href = location.href;
					},
					complete: function(){
						location.href = location.href;
					}
				});
				swal("Listo! El usuario a sido eliminado!", {
				icon: "success",
				});
				
			} else {
				swal("No se ha eliminado el Usuario!");
			}
		});
	});
	$(document).on('click','[name="btnCancelar"]', function(){
		$('#u_nombres').focus();
		limpiarCampos();
	});
	$(document).on('click','[name="editar"]',function(){
		document.body.scrollTop = 0;
		document.documentElement.scrollTop=0;

		//valores obtendra el dato del td por posciones [0]
		var u_id = $(this).parents("tr").find("td")[0].innerHTML;
		$.ajax({
			method: "POST",
			url: "seleccionarUsuarioEditar",
			data:{
				'u_id' : u_id,
			},
			success: function(response){
				$.each(response, function (key, usuarioedit){
					$('#hiddenid').val(usuarioedit['u_id']);
					$('.u_nombres').val(usuarioedit['u_nombres']);
					$('.u_apellido').val(usuarioedit['u_apellidos']);
					$('.u_correo').val(usuarioedit['u_correo']);
					$('#roles').val(usuarioedit['r_rol']);
				});
			}
		});
	});
	function limpiarCampos(){
		$('#hiddenid').val('');
		$('.u_nombres').val('');
		$('.u_apellido').val('');
		$('.u_correo').val('');
		$('#roles').val(0);
		$('.form-group').removeClass("has-success");
		$('.form-group').removeClass("has-error");
		$('#msg-u_nombres').hide();
		$('#msg-u_apellido').hide();
		$('#msg-email').hide();
	}
})
</script>
</head> 
   
 