// Esperamos a que el documento esté listo
$(document).on('ready', function(){
	// Se creo un objeto de la clase Spinner para crear un preload
	var spinner = new Spinner().spin();
	// Detectamos cuando el botón de "Procesar cadena" es clickado
	$('#btn-frm').on('click',function(e){
		// Evitamos que se envie la acción predeterminada
		e.preventDefault();
		// Hacemos algunas condiciones con respecto a la cadena introducida
		// Si la cadena es mayor a un caracter se procesa
		// En caso de estar vacia o solo contener un caracter envia una alerta-
		if($("#word").val().length > 1){
			// Se utiliza el método ajax de jquery para procesar la información
			$.ajax({
			    beforeSend: function(){
			    	// Se limpia la información almacenada
			    	$("li").remove();
			    	// Iniciamos el preloader
			        $('#status').append(spinner.el);
			    },
			    url: 'palindromo.php',				// Definimos el archivo que procesara la información
			    type: 'post',						// definimos el método de envió
			    data: $('#frm-word').serialize(),	// Serializamos la información del fromulario
			    success: function(resp){
			    	$('#status').html('');				// Está instrucción nos ayuda a "esconder" el preload
			    	$('.modal').css('display','flex');	// Abrimos la ventan modal
			    	// En la siguiente instrucción recorremos el JSON enviado por el archivo palindromo
			    	$.each(JSON.parse(resp),function(id,word){
			    		$('.modal .content ul').append('<li>Palabra: <b>'+word+'</b></li>');
			    	});
			        console.log(resp);
			    },
			    error: function(jqXHR, estado, error){
			    	// Imprimimos información en consola en caso de haber error
			    	$('#status').html('');
			    	console.log(jqXHR);
			        console.log(estado);
			        console.log(error);
			    },
			    complete: function(jqXHR, estado){
			        console.log(estado);
			    },
			    timeout: 2000	// Si no se recibe una respuesta en 2 segundos envía error
			}); 
		} else if($("#word").val().length === 1) {
			alert('La cadena debe de tener mas de un caracter');
		}else {
			alert('Debes de introducir una cadena');
		}
	});

	$('#btn-close').on('click',function(e){
		e.preventDefault();
		$('.modal').css('display','none');
	});
});