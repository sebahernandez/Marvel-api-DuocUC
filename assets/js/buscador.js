jQuery.expr[':'].contains = function(a, i, m) {
    return jQuery(a).text().toUpperCase()
        .indexOf(m[3].toUpperCase()) >= 0;
   };
   
   $('.searchbox-input').on('keyup',function () {
       $('.card').show();
       var filter = $(this).val().toUpperCase();
       $('#contenido').find(".card-title:not(:contains(" + filter + "))").parent().parent().css('display','none');
});