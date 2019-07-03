const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.js('resources/js/admin.js', 'public/js')
    .sass('resources/sass/admin.scss', 'public/css')
    .copy('node_modules/@fortawesome/fontawesome-free/svgs/solid/user.svg', 'public/img/user-default.svg')
    .extract()
    .mergeManifest()
    .autoload({
        jquery: ['$', 'jQuery', 'window.$', 'window.jQuery'],
    });
