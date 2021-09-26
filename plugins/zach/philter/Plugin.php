<?php namespace Zach\Philter;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Zach\Philter\Components\RecentImages' => 'RecentImages',
            'Zach\Philter\Components\UserImages' => 'UserImages',
            'Zach\Philter\Components\AddImages' => 'AddImages',
            'Zach\Philter\Components\DeleteImage' => 'DeleteImage',


        ];
    }

    public function registerSettings()
    {
    }
}
