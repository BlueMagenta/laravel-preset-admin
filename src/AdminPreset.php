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
        $filesystem->copyDirectory(__DIR__.'/stubs/js', resource_path('assets/js/admin'));
        $filesystem->copyDirectory(__DIR__.'/stubs/sass', resource_path('assets/sass/admin'));
        $filesystem->copyDirectory(__DIR__.'/stubs/layout', resource_path('views/layouts/admin'));

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
            'jquery' => '~3.3.1',
            'bootstrap' => '~3.3',
            'icheck'    => '~1.0.2'
        ];
        return array_merge($dependencies, $packages);
    }
}