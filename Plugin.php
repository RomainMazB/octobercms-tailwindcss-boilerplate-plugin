<?php


namespace RomainMazB\TailwindBoilerplate;

use Cms\Controllers\Index;
use October\Rain\Support\Facades\Config;
use System\Classes\PluginBase;
use Cms\Classes\Theme;
use Event;

class Plugin extends PluginBase
{
    public function boot()
    {
        Event::listen('cms.theme.getEditTheme', function () {
            return 'romainmazb-tailwindcssboilerplate/src';
        });
    }
}
