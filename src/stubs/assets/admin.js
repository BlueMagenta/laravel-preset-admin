import 'bootstrap';
import '@coreui/coreui';
import 'datatables.net-bs4';
import 'datatables.net-responsive-bs4';
import 'select2';
import 'pc-bootstrap4-datetimepicker';
import 'summernote/dist/summernote-bs4';
import Dropzone from 'dropzone';
import showdown from 'showdown';
import xssFilter from 'showdown-xss-filter';

//config the plugins
let converter = new showdown.Converter({extensions: [xssFilter]});
Dropzone.autoDiscover = false;
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

//init js plugins by data toggle on ready setup
$(() => {
    $('[data-toggle=datatable]').DataTable();
    $('[data-toggle=select2]').select2();
    $('[data-toggle=datetimepicker]').datetimepicker();
    $('[data-toggle=summernote]').summernote();
    $('[data-toggle=dropzone]').each((index, element)=> $(element).dropzone({url: element.dataset.url}));
    $('[data-toggle=markdown]').each((index, element)=> element.innerHTML = converter.makeHtml(element.innerText));
    $('body').on('click', '[data-toggle=markdown-preview]', (event) => {
        $(event.target.dataset.target).html(converter.makeHtml($(event.target.dataset.source).val()));
    });
});

//bind jquery to global window, so we can use it from blade
global.$ = $;