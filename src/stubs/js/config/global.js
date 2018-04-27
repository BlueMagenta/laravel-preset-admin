/**
 * global config / set up that affect the site
 */

export default function () {

    //bind csrf token from html head to ajax
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //init icheck plugin
    $('input[data-icheck=true]').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
    });

    //make jQuery accessible from blade views
    global.$ = global.jQuery = $;


