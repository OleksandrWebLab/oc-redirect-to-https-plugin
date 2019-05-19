<?php namespace PopcornPHP\RedirectToHTTPS\Models;

use Model;

class Settings extends Model {
    public $implement      = [ 'System.Behaviors.SettingsModel' ];
    public $settingsCode   = 'redirect_to_https_settings';
    public $settingsFields = 'fields.yaml';

    public function initSettingsData()
    {
        $this->statusCode = 302;
    }
}
