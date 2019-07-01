<?php

namespace BlueMagenta\AdminTemplate;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\Presets\Preset;

class AdminTemplate extends Preset
{
    /** Install the preset. */
    public static function install()
    {
        //copy js, sass, mix config, & view templates
        $filesystem = new Filesystem();
        $filesystem->copyDirectory(__DIR__.'/js', resource_path('js'));
        $filesystem->copyDirectory(__DIR__.'/sass', resource_path('sass'));
        $filesystem->copyDirectory(__DIR__.'/views', resource_path('views'));
        $filesystem->copy(__DIR__.'/admin.mix.js', base_path());

        //update npm package
        static::updatePackages();
    }

    /** npm package configuration */
    protected static function updatePackageArray(array $packages)
    {
        $dependencies = [
            '@coreui/coreui' => '^2.1.9',
            '@fortawesome/fontawesome-free' => '^5.9.0',
            '@ttskch/select2-bootstrap4-theme' => "^1.2.2",
            'bootstrap' => '^4.0.0',
            'chalk' => '^2.4.2',
            'codemirror' => '^5.47.0',
            'datatables.net-bs4' => "^1.10.19",
            'datatables.net-responsive-bs4' => '^2.2.3',
            'dropzone' => '^5.5.1',
            'jquery' => '^3.2',
            'laravel-mix-merge-manifest' => '^0.1.2',
            'pc-bootstrap4-datetimepicker' => '^4.17.50',
            'perfect-scrollbar' => '^1.4.0',
            'popper.js' => '^1.12',
            'select2' => '^4.0.7',
            'summernote' => '^0.8.12',
            'showdown' => '^1.9.0',
            'showdown-xss-filter' => '^0.2.0',
        ];
        return array_merge($dependencies, $packages);
    }
}