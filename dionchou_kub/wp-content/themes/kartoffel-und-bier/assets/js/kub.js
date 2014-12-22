/**
 * Created by michelchouinard on 14-12-08.
 */
$(function(){

    $('.carousel').carousel(
        {
            interval: 5000
        }
    );

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
    })


});
