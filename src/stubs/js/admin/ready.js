/**
 * global script that will be executed on document ready
 */

 export default function(){

    //bind csrf token from html head to ajax
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //init icheck plugin
    $('[data-icheck=true]').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
    });

    // init sidebar menu tree
    $('.sidebar-menu').tree()
 }