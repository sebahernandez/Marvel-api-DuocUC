$(document).ready(function() {

     //ABRIR MODAL
     $('#modalEliminar').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var identificador = button.data('identificador') 

        var modal = $(this)
        modal.find('.modal-body #identificador').val(identificador)
      })

    //ELIMINAR DE LA BD
    $('#eliminar_btn').click(function() {
        console.log("Eliminando")
        var identificador = $('#modalEliminar #identificador').val()
        var json = {
            "indice": "id",
            "valor_indice": identificador,
            "tabla": "personajes"
        }

        $.post({
            url: 'https://slagosh.laboratoriodiseno.cl/Marvel-API/api/modelo/borrar.php', //DIRECCION SERVER
            data: {'eliminar': json},
            dataType: 'json', //Optativo
            success: function(respuesta) {
                if (respuesta == 1) {
                    listarMarvel();
                    $('#modalEliminar').modal('hide')
                } else {
                    console.error("Problemas al borrar personaje")
                    console.error(respuesta)
                }
            },
            error: function() {
                console.error("Sin Respuesta eliminar personaje");
            }
        });
    });
    
});