/**
 * js functions to add masonery support to our theme
 */

$(function(){
    //Init jQuery Masonry layout
    init_masonry();

    $('#masonery img').each(
        function(){
            $(this).removeAttr('height');
            $(this).removeAttr('width');
        }
    );

    $('#masonery figure>img, #masonery .attachment-post-thumbnail').each(
        function(){
        }
    );

});


function init_masonry() {
    var $container = $('#masonery');

    $container.imagesLoaded(function () {
        $container.masonry({
            // Ask masonery to set the column width according to the .box-sizer div width
            columnWidth: '#masonery .box-sizer',

            // Ask masonery to set the column width according to the .box-gutter div width
            // Set to 0 in css because it was giving me some strange results, 1px seem to give me a 4px gutter, percentage
            // of 1% give me a gutter of 72 px in a container of 1170px wide.
            //
            // Since Bootstrap 3 use padding to create gutter it seem logical to me tu use the same padding of 15px inside
            // the boxes so everything allign well with the rest of the site
            gutter: 0,
            itemSelector: '.box',
            isAnimated: true
        });
    });
}
