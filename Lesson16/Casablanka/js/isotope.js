$( function() {
    var $grid = $('.grid').isotope({
        itemSelector: '.item',
        layoutMode: 'fitRows',
        masonry: {
            columnWidth: 'grid-sizer',
        }
    });
    $('.filters-button-group').on( 'click', 'a', function() {
        var filterValue = $( this ).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });
    $('.button-group').each( function( i, buttonGroup ) {
        var $buttonGroup = $( buttonGroup );
        $buttonGroup.on( 'click', 'a', function() {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $( this ).addClass('is-checked');
        });
    });

});