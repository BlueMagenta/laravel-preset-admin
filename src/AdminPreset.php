<?php

namespace BlueMagenta\AdminPreset;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\Presets\Preset;

class AdminPreset extends Preset
{
    /** Install the preset. */
    public static function install()
    {
        //generate js, sass, & views
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
            '@coreui/coreui'=> '^2.0.4',
            '@fortawesome/fontawesome-free'=> '^5.3.1',
            'bootstrap' => '^4.0.0',
            'datatables.net-bs4'=> "^1.10.19",
            'datatables.net-responsive-bs4'=> '^2.2.3',
            'jquery' => '^3.3.1',
            'perfect-scrollbar' => '^1.4.0',
        ];
        return array_merge($dependencies, $packages);
    }
}