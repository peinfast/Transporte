<script type="text/javascript">
$(document).ready(function(){

	// Damos formato a la Ventana de Diálogo
	$('#dialogoFormulario').dialog({
		// Indica si la ventana se abre de forma automática
		autoOpen: false,
		// Indica si la ventana es modal
		modal: true,
		// Largo
		width: 350,
		// Alto
		height: 'auto',
		buttons: {
			Continuar: function() {
				// Serializamos el formulario
				str = $("#formAjax").serialize();

				//Vaciamos los campos del formulario
				$('#datosContacto &gt; input[type=text]').val('');

				//Mostramos un alert con los datos del formulario
				alert(str);

				// Cerramos el diálogo
				$( this ).dialog( "close" );
			},
			Cancelar: function() {
				// Cerramos el diálogo
				$( this ).dialog( "close" );
			}
		}
	});

	// Validamos el formulario
	$('#formAjax').validate({
		submitHandler: function(){

			// Abrimos el diàlogo de confirmación
			$('#dialogoFormulario').dialog('open');

			// Evitamos que se envíe el formulario
			return false;

		},
		errorPlacement: function(error, element) {
			error.appendTo(element.prev("span").append());
		}
	});

});
</script>
