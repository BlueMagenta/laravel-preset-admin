import '@coreui/coreui';
import 'datatables.net-bs4';
import 'datatables.net-responsive-bs4';
import 'select2';

$.fn.select2.defaults.set('theme', 'bootstrap4 d-table-cell');
$.extend(true, $.fn.datetimepicker.defaults, {
    icons: {
        time: 'far fa-clock',
        date: 'far fa-calendar-alt',
        up: 'fas fa-arrow-up',
        down: 'fas fa-arrow-down',
        previous: 'fas fa-chevron-left',
        next: 'fas fa-chevron-right',
        today: 'fas fa-calendar-check',
        clear: 'far fa-trash-alt',
        close: 'far fa-times-circle'
    }
});

$(() => {
    $('[data-toggle=datatable]').DataTable();
    $('[data-toggle=select2]').select2();
});