$(document).ready(function(){

    listarMarvel_Cards();

});

function listarMarvel_Cards() {

    // Recuperando lista de personajes desde la BD
    $.get({
        url: 'https://slagosh.laboratoriodiseno.cl/Marvel-API/api/modelo/listar.php?tabla=personajes',
        dataType: "json",

        success: function (respuesta) {

            // Guardamos la respuesta de la URL en una variable.
            console.log(respuesta);
            var personajes = (respuesta);

            var contenedor = $('#contenido')
            contenedor.empty()
            // Bucle de cards de personajes
            $.each(personajes, function(index, personaje){
              
                var cards = $('<div></div>').addClass("card w-300 animate__animated animate__flipInY")
            
                var imagen_personaje = $('<img/>')
                imagen_personaje.attr('src',personaje.imagen)
                imagen_personaje.addClass("card-img-top")
                imagen_personaje.attr('alt',personaje.id)
                cards.append(imagen_personaje)
                
                var div_cuerpo = $('<div></div>').addClass('card-body')
                
                var titulo = $('<h5></h5>').addClass('card-title').text(personaje.nombre)
                div_cuerpo.append(titulo)
                
                var parrafo = $('<p></p>').addClass('card-text')
                parrafo.html(personaje.descripcion)
                div_cuerpo.append(parrafo)
            
                cards.append(div_cuerpo)
            
                contenedor.append(cards)
            });
            },
            error: function(error){
            console.error("Erro al listar personajes")
            console.log(error)
            }
    });

}












