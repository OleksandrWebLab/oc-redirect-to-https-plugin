<?php namespace PopcornPHP\RedirectToHTTPS;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'RedirectToHTTPS',
            'description' => 'Simple plugin for redirect to HTTPS in frontend',
            'author'      => 'Alexander Shapoval',
            'icon'        => 'icon-exchange',
        ];
    }

    public function boot()
    {
        $this->app['Illuminate\Contracts\Http\Kernel']
            ->prependMiddleware('PopcornPHP\RedirectToHTTPS\Classes\HTTPSMiddleware');
    }
}