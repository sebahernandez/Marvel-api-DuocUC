$(document).ready(function() {

    $('#agregar_btn').click(function() {
        console.log("Agregando personaje de Marvel")

        var urlImagen = $('#modalAgregar #url-imagen').val()
        var nombre = $('#modalAgregar #nombre').val()
        var descripcion = $('#modalAgregar #descripcion').val()

        var json = {
            "columnas": ["imagen", "nombre", "descripcion"],
            "valores": [urlImagen, nombre, descripcion],
            "tabla": "personajes"
        }

        $.post({
            url: 'https://slagosh.laboratoriodiseno.cl/Marvel-API/api/modelo/agregar.php', //DIRECCION SERVER
            data: {'agregar': json},
            dataType: 'json', 
            success: function(respuesta) {
                if (respuesta == 1) {
                    listarMarvel();
                    $('#modalAgregar').modal('hide')
                } else {
                    console.error("Problemas al añadir un personaje")
                    console.error(respuesta)
                }
            },
            error: function(error) {
                console.error("Sin Respuesta al añadir un personaje");
                console.error(error)
            }
        });
    });
    
});