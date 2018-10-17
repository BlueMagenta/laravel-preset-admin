import '@coreui/coreui';
import 'datatables.net-bs4';
import 'datatables.net-responsive-bs4';
import 'select2';

$.fn.select2.defaults.set('theme', 'bootstrap4 d-table-cell');

$(() => {
    $('[data-toggle=datatable]').DataTable();
    $('[data-toggle=select2]').select2();
});