<?php return [
    'plugin' => [
        'name' => 'Klaro Cookie Consent',
        'description' => 'Provides cookie manager from https://klaro.kiprotect.com/',
    ],
    'settings' => [
        'label' => 'Klaro Cookie Consent',
        'description' => 'Configure the Cookie-Manager',
        'category' => 'Cookies',
        'enabled' => 'Enable',
        'no_css' => 'Deactivate CSS styling',
        'consentconfig' => 'Configuration',
        'consentconfig_help' => 'Read more at <a href="https://klaro.kiprotect.com/#getting-started" target="klaro">klaro.kiprotect.com</a>',
        'custom_css' => 'Custom CSS',
        'tab_basic' => 'Settings',
        'tab_generator' => 'Generator',
        'generator_cookie_domain' => 'Cookie-Domain',
        'generator_cookie_domain_help' => 'Keep empty to make klaro use the current domain.',
        'generator_cookie_expires_after_days' => 'Cookie expiration in days',
        'generator_default' => 'Services are enabled by default',
        'generator_must_consent' => 'User must give consent',
        'generator_must_consent_help' => 'Will directly display the consent modal and not allow the user to close it before having actively consented or declined the use of third-party services.',
        'generator_accept_all' => 'Show "Accept all" button',
        'generator_hide_decline_all' => 'Hide "Decline all" button',
        'generator_hide_learn_more' => 'Hide "Read more" Link',
        'generator_privacy_policy_url' => 'URL to the privacy policy',
        'generator_consent_notice_description' => 'Notification text',
        'generator_consent_modal_description' => 'Dialog text',
        'generator_purposes' => 'Purposes',
        'generator_purposes_prompt' => 'Add purpose',
        'generator_purpose_is_active' => 'Active',
        'generator_purpose_title' => 'Title',
        'generator_purpose_name' => 'maschine name',
        'generator_services' => 'Services',
        'generator_services_prompt' => 'Add service',
        'generator_service_is_active' => 'Active',
        'generator_service_title' => 'Title',
        'generator_service_name' => 'maschine name',
        'generator_service_description' => 'Descriptionb',
        'generator_service_default' => 'Enabled by default',
        'generator_service_default_help' => 'If checked, the service will be enabled by default. This overrides the global \'default\' setting.',
        'generator_service_required' => 'Required',
        'generator_service_required_help' => 'If checked, will not allow this service to be disabled by the user. Use this for services that are always required for your website to function (e.g. shopping cart cookies).',
        'generator_service_opt_out' => 'Opt-Out',
        'generator_service_opt_out_help' => 'If checked, will load this service even before the user has given explicit consent. We strongly advise against this',
        'generator_service_only_once' => 'Only once',
        'generator_service_only_once_help' => 'If checked, the service will only be executed once regardless how often the user toggles it on and off. This is relevant e.g. for tracking scripts that would generate new page view events every time Klaro disables and re-enables them due to a consent change by the user.',
        'generator_service_purposes' => 'Purposes',
        'generator_service_cookies' => 'Cookies',
        'generator_service_cookies_prompt' => 'Add cookie',
        'generator_service_cookie_domain' => 'Domain',
        'generator_service_cookie_name' => 'Name or regular expression',
        'generator_service_cookie_name_help' => 'Use / for regular expressions. E.g. /_ga_.*/i',
        'generator_service_cookie_path' => 'Path',
        'generator_service_callback' => 'Callback',
        'generator_service_callback_help' => 'You can define an optional callback function that will be called each time the consent state for the given service changes. The consent value will be available as the `consent` variable (true=consented). The service config is available as the `service` variable.',
        'generator_config' => 'Generated configuration',
        'generator_apply_config' => 'Apply configuration',
    ],
];
