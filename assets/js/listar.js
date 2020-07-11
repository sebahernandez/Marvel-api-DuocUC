$(document).ready(function(){

    listarMarvel();

});

function listarMarvel() {


    $.get({
        url: 'https://slagosh.laboratoriodiseno.cl/Marvel-API/api/modelo/listar.php?tabla=personajes',
        dataType: "json",

        success: function (respuesta) {

            // Guardamos la respuesta de la URL en una variable.
            console.log(respuesta);
            var personajes = (respuesta);

            //creamos una variable que jquery llame a un id con tbody dentro.
            var tabla_personajes = $('#content tbody');
            // remueve los nodos hijos de un elemento seleccionado
            tabla_personajes.empty();

            // $.each es un bucle para recorrer objetos,  que dentro de ella va una funcion 
            // index entrega la posición de dicho elemento en el bucle
            $.each(personajes, function (index, personaje) {

                // fila
                var fila = $('<tr></tr>');
                // ID
                var columna_id = $('<th></th>').text(personaje.id);
                fila.append(columna_id);
                // IMG
                var columna_imagen = $('<th></th>')
                var imagen = $('<img />').attr('src',personaje.imagen);
                columna_imagen.append(imagen);
                fila.append(columna_imagen);
                // Nombre
                var columna_name = $('<td></td>').text(personaje.nombre);
                fila.append(columna_name);
                // Descripcion
                var columna_description = $('<td></td>').text(personaje.descripcion);
                fila.append(columna_description);

                tabla_personajes.append(fila)

                // Añade botón de editar al DOM
                var columna_funciones = $('<td></td>')
                var boton_editar = $('<button><i class="fas fa-edit"></i> Editar</button>')
                boton_editar.addClass('btn btn-primary mr-2 editar')
                boton_editar.attr('data-toggle', 'modal')
                boton_editar.attr('data-target', '#modalEditar')
                boton_editar.attr('data-identificador', personaje.id)
                boton_editar.attr('data-imagen',personaje.imagen)
                boton_editar.attr('data-nombre',personaje.nombre)
                boton_editar.attr('data-descripcion',personaje.descripcion)

                columna_funciones.append(boton_editar)

                // Añade botón de eliminar al DOM
                var boton_eliminar = $('<button><i class="fas fa-trash-alt"> Eliminar</i></button>')
                boton_eliminar.addClass('btn btn-danger borrar')
                boton_eliminar.attr('data-toggle', 'modal')
                boton_eliminar.attr('data-target', '#modalEliminar')
                boton_eliminar.attr('data-identificador', personaje.id)
                boton_eliminar.attr('data-nombre', personaje.nombre)
                
                columna_funciones.append(boton_eliminar)

                fila.append(columna_funciones)
                
            });

            $('#content').DataTable({
                "order":[[2, "asc"]] ,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                }  
            });

        },
        // Muestra un error en pantalla si es que no se pueden obtener los datos de la URL.
        error: function (error) {
            console.error("Sin respuesta del servidor");
        },

        
    });

}
