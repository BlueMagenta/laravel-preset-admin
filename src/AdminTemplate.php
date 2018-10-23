<?php

namespace BlueMagenta\AdminTemplate;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\Presets\Preset;

class AdminTemplate extends Preset
{
    /** Install the preset. */
    public static function install()
    {
        //copy js, sass, & view templates
        $filesystem = new Filesystem();
        $filesystem->copyDirectory(__DIR__.'/stubs/assets', resource_path('/admin'));
        $filesystem->copyDirectory(__DIR__.'/stubs/templates', resource_path('views/templates'));
        $filesystem->copyDirectory(__DIR__.'/stubs/examples', resource_path('views/examples'));

        //update npm package
        static::updatePackages();

        //update webpack.mix.js
        $newContent = file_get_contents(__DIR__.'/stubs/webpack.mix.stub');
        file_put_contents(base_path('webpack.mix.js'), $newContent, FILE_APPEND);
    }

    /** npm package configuration */
    protected static function updatePackageArray(array $packages)
    {
        $dependencies = [
            '@coreui/coreui' => '^2.0.4',
            '@fortawesome/fontawesome-free' => '^5.3.1',
            '@ttskch/select2-bootstrap4-theme' => "^1.0.4",
            'bootstrap' => '^4.0.0',
            'chalk' => '^2.4.1',
            'codemirror' => '^5.40.2',
            'datatables.net-bs4' => "^1.10.19",
            'datatables.net-responsive-bs4' => '^2.2.3',
            'dropzone' => '^5.5.1',
            'jquery' => '^3.3.1',
            'pc-bootstrap4-datetimepicker' => '^4.17.50',
            'perfect-scrollbar' => '^1.4.0',
            'popper.js' => '^1.14.4',
            'select2' => '^4.0.6-rc.1',
            'summernote' => '^0.8.10',
            'showdown' => '^1.8.7',
            'showdown-xss-filter' => '^0.2.0',
        ];
        return array_merge($dependencies, $packages);
    }
}