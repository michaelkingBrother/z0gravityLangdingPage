
$(document).ready( function(){    
    $.each( $('.descritonCard'), function(i, descritonCard){
        var _h = 0;
        var cards = $(descritonCard).find('.card-text');
        if( cards.length){
            $.each( cards, function(i, t){
                _h = Math.max( _h, $(t).outerHeight(true));
            });
            cards.height(_h);
        }
    });
});