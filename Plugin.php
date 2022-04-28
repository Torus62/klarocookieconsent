<?php namespace StudioBosco\KlaroCookieConsent;

use Backend;
use Lang;
use Block;
use System\Classes\PluginBase;
use StudioBosco\KlaroCookieConsent\Models\Settings;

/**
 * KlaroCookieConsent Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'studiobosco.klarocookieconsent::lang.plugin.name',
            'description' => 'studiobosco.klarocookieconsent::lang.plugin.description',
            'author'      => 'Studio Bosco',
            'icon'        => 'icon-cookie',
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        $enabled = boolval(intval(Settings::get('enabled', 0)));
        $noCss = boolval(intval(Settings::get('no_css', 0)));
        $customCss = Settings::get('custom_css');
        $consentConfig = Settings::get('consentconfig', Settings::getDefaultConsentConfig());

        if (!$enabled) {
            return;
        }

        $pluginUrl = url('/plugins/studiobosco/klarocookieconsent');

        Block::append('scripts', '<script type="text/javascript">' . $consentConfig . '</script>');
        Block::append('styles', '<script defer type="text/javascript" src="' . $pluginUrl . '/assets/klaro-no-css.js"></script>');

        if (!$noCss) {
            Block::append('styles', '<link rel="stylesheet" type="text/css" href="' . $pluginUrl . '/assets/klaro.css" />');
        }

        if ($customCss) {
            Block::append('styles', '<style type="text/css">' . "\n" . trim($customCss) . "\n" . '</style>');
        }
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label' => 'studiobosco.klarocookieconsent::lang.settings.label',
                'description' => 'studiobosco.klarocookieconsent::lang.settings.description',
                'icon' => 'icon-leaf',
                'category' => 'studiobosco.klarocookieconsent::lang.settings.category',
                'class' => 'StudioBosco\KlaroCookieConsent\Models\Settings',
                'order' => 100,
            ],
        ];
    }
}
