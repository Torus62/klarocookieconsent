<?php namespace StudioBosco\KlaroCookieConsent\Models;

use Model;
use Lang;

/**
 * Settings Model
 */
class Settings extends Model
{

    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'klarocookieconsent_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

    protected $cache = [];

    public function __construct(array $data = [])
    {
        parent::__construct($data);

        // set defaults
        if (!$this->consentconfig) {
            $this->consentconfig = $this->getDefaultConsentConfig();
        }
    }

    public static function getDefaultConsentConfig()
    {
        $config = file_get_contents(__DIR__ . '/../assets/config.default.js');
        return $config;
    }
}
