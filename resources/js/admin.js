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
import * as pages from './pages';

//config the plugins
const converter = new showdown.Converter({extensions: [xssFilter]});
Dropzone.autoDiscover = false;
$.fn.select2.defaults.set('theme', 'bootstrap4');
$.fn.select2.defaults.set('width', '100%');
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
    const csrf = $('meta[name="csrf-token"]').attr('content');

    //init plugins
    $('[data-plugin=datatable]').DataTable();
    $('[data-plugin=select2]').select2();
    $('[data-plugin=datetimepicker]').datetimepicker();
    $('[data-plugin=summernote]').summernote();
    $('[data-plugin=dropzone]').each((index, element) => $(element).dropzone({
        url: element.dataset.url,
        headers: {'X-CSRF-TOKEN': csrf},
        init() {
            if (!('multiple' in element.dataset)) {  //set to single file if multiple dataset not exist
                this.on('addedfile', function () {
                    if (this.files.length > 1){
                        this.removeFile(this.files[0]);
                    }
                })
            }
        }
    }));
    $('[data-plugin=markdown]').each((index, element) => element.innerHTML = converter.makeHtml(element.innerText));
    $('[data-plugin=markdown-preview]').on('click', (event) => {
        $(event.target.dataset.target).html(converter.makeHtml($(event.target.dataset.source).val()));
    });
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': csrf}});

    //init page js
    $('[data-page]').each((index, element) => new pages[element.dataset.page]);
});