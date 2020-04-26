<?php


namespace RomainMazB\TailwindBoilerplate;

use System\Classes\PluginBase;
use Event;

class Plugin extends PluginBase
{
    private $theme_name;
    public function boot()
    {
        $this->theme_name = Theme::getEditThemeCode();
        Event::listen('cms.theme.getEditTheme', function () {
            return $this->theme_name . '-src';
        });
    }
}
