/**
 * Created by michelchouinard on 14-12-08.
 */
$(function(){

    $('.carousel').carousel({
        interval: 5000
    });

    // Pour les select stylés.
    $("select").select2({dropdownCssClass: 'dropdown-inverse'});

});
