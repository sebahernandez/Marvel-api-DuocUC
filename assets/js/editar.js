$(document).ready(function() {
    //Abre el Modal
    $('#modalEditar').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var identificador = button.data('identificador') 
        var modal = $(this)
        modal.find('.modal-body #identificador').val(identificador)
        
       var imagen = button.data('imagen') 
        var nombre = button.data('nombre') 
        var descripcion = button.data('descripcion') 

         modal.find('.modal-body #url-imagen').val(imagen)
        modal.find('.modal-body #nombre').val(nombre)
        modal.find('.modal-body #descripcion').val(descripcion)
        
        
       
      })

    // Editando la base de datos correspondiente
    $('#editar_btn').click(function() {
        console.log("Editando")

        var urlImagen = $('#modalEditar #url-imagen').val()
        var nombre = $('#modalEditar #nombre').val()
        var descripcion = $('#modalEditar #descripcion').val()
        var identificador = $('#modalEditar #identificador').val()


        var json = {
            "columnas": ["imagen", "nombre", "descripcion"],
            "valores": [urlImagen, nombre, descripcion],
            "indice": "id",
            "valor_indice": identificador,
            "tabla": "personajes"
        }

        $.post({
            url: 'https://slagosh.laboratoriodiseno.cl/Marvel-API/api/modelo/editar.php', //DIRECCI脫N SERVER
            data: {'editar': json},
            dataType: 'json', 
            success: function(respuesta) {
                if (respuesta == 1) {
                    listarMarvel();
                    $('#modalEditar').modal('hide')
                } else {
                    console.error("Problemas al editar personaje")
                    console.error(respuesta)
                }
            },
            error: function() {
                console.error("Sin Respuesta editar personaje");
            }
        });
    });

    
});