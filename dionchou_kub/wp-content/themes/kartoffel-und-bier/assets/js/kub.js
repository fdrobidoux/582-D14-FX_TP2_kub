/**
 * Created by michelchouinard on 14-12-08.
 */
$(function(){

    //$('.carousel').carousel(
    //    {
    //        interval: 5000
    //    }
    //);

    // Pour les select stylés.
    $("select").select2(
        {
            dropdownCssClass: 'dropdown-inverse'
        }
    );

    $(document).on(
        'click',
        '.navbar-collapse.in',
        function(e) {

            if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {

                $(this).collapse('hide');

            }
        }
    );


    $('.tabbable a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    });

    $('img').each(function(){
        $(this).removeAttr('height');
        $(this).removeAttr('width');
    });

    // Checkboxes and Radiobuttons

    $('[data-toggle="checkbox"]').radiocheck();
    $('[data-toggle="radio"]').radiocheck();

    $('.single-product #submit').addClass('btn btn-primary');


    $('.add_to_cart_button').on('click', function () {
        var $btn = $(this).button('loading');
        // business logic...
        $btn.button('reset')
    })

});
