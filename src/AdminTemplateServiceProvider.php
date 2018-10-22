<?php

namespace BlueMagenta\AdminPreset;

use Illuminate\Foundation\Console\PresetCommand;
use Illuminate\Support\ServiceProvider;

class AdminTemplateServiceProvider extends ServiceProvider
{
    public function boot()
    {
        PresetCommand::macro('admin', function ($command) {
            AdminTemplate::install();
            $command->info('Admin Dashboard scaffolding installed successfully.');
            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }
}