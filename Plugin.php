<?php


namespace RomainMazB\TailwindBoilerplate;

use System\Classes\PluginBase;
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
