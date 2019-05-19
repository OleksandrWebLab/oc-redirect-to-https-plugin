<?php namespace PopcornPHP\RedirectToHTTPS;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'popcornphp.redirecttohttps::lang.plugin.name',
            'description' => 'popcornphp.redirecttohttps::lang.plugin.description',
            'author'      => 'Alexander Shapoval',
            'icon'        => 'icon-exchange',
            'homepage'    => 'https://github.com/VoroninWD/oc-redirect-to-https-plugin'
        ];
    }

    public function boot()
    {
        $this->app['Illuminate\Contracts\Http\Kernel']
            ->prependMiddleware('PopcornPHP\RedirectToHTTPS\Classes\HTTPSMiddleware');
    }

    public function registerSettings()
    {
        return [
            'redirect_to_https_settings' => [
                'label'       => 'popcornphp.redirecttohttps::lang.settings.label',
                'description' => 'popcornphp.redirecttohttps::lang.settings.description',
                'category'    => 'system::lang.system.categories.system',
                'icon'        => 'icon-refresh',
                'class'       => 'PopcornPHP\RedirectToHTTPS\Models\Settings',
                'order'       => 500,
                'keywords'    => 'https redirect',
                'permissions' => ['redirecttohttps.settings']
            ]
        ];
    }

    public function registerPermissions()
    {
        return [
            'redirecttohttps.settings' => [
                'tab'   => 'popcornphp.redirecttohttps::lang.permissions.tab',
                'label' => 'popcornphp.redirecttohttps::lang.permissions.label',
                'roles' => ['developer']
            ]
        ];
    }
}
