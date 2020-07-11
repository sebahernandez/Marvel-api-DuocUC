
		$( "#agregar" ).on( "submit", function(e) {
            e.preventDefault();
        });
        
        $.validator.setDefaults( {
			submitHandler: function () {
			    var datosArray = $("#formulario-contacto").serializeArray()
                var datos = $("#formulario-contacto").serialize()
              
                console.log(datos)
                console.log(datosArray)
                var json = {'agregar': datos}
              
                $.post({
                    url: 'https://slagosh.laboratoriodiseno.cl/Marvel-API/api/modelo/agregar_serialize.php',
                    data: json,
                    success: function(respuesta) {
                        if (respuesta == 1) {
                            console.log("agregado")
                        } else {
                            console.error("Error al agregar")
                            console.error(respuesta)
                        }
                    },
                    error: function(error) {
                        console.error("Sin Respuesta del servidor");
                        console.error(error);
                    }
                });
			}
		} );
		
		$( document ).ready( function () {
			$( "#formulario-contacto" ).validate( {
				rules: {
					nombre: {
                        minlength: 2,
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    telefono: {
                        minlength: 8,
                        required: true
                    },
            
                    rut: {
                        required: true,
                    },
                    
                    mensaje:{
                        minlength:2,
                    },
				},
                highlight: function (element) {
                    $(element).closest('.control-group').removeClass('success').addClass('error');
                },
                success: function (element) {
                    element.text('OK!').addClass('valid')
                        .closest('.control-group').removeClass('error').addClass('success');
                }
			} );

			
		} );
	
