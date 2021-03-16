<?php return [
    'plugin' => [
        'name' => 'Klaro Cookie Consent',
        'description' => 'Stell den Cookie-Manager von https://klaro.kiprotect.com/ bereit.',
    ],
    'settings' => [
        'label' => 'Klaro Cookie Consent',
        'description' => 'Cookie-Manager konfigurieren',
        'category' => 'Cookies',
        'enabled' => 'Aktivieren',
        'no_css' => 'CSS Styling deaktivieren',
        'consentconfig' => 'Konfiguration',
        'consentconfig_help' => 'Mehr Informationen auf <a href="https://klaro.kiprotect.com/#getting-started" target="klaro">klaro.kiprotect.com</a>',
        'custom_css' => 'Eigenes CSS',
        'tab_basic' => 'Settings',
        'tab_generator' => 'Generator',
        'generator_cookie_domain' => 'Cookie-Domain',
        'generator_cookie_domain_help' => 'Leer lassen, um für Klaro Cookie aktuelle Domain zu nutzen.',
        'generator_cookie_expires_after_days' => 'Ablaufzeit des Klaro Cookies in Tagen',
        'generator_default' => 'Dienste sind standardmäßig angeschalten',
        'generator_must_consent' => 'Dienste müssen bestätigt werden',
        'generator_must_consent_help' => 'Falls aktiviert, müssen die Dienste über den Klaro Dialog bestätigt werden, bevor die Webseite genutzt werden kann.',
        'generator_accept_all' => '"Alles akzeptieren" Schaltfläche anzeigen',
        'generator_hide_decline_all' => '"Alles verweigern" Schaltfläche verstecken',
        'generator_hide_learn_more' => '"Mehr erfahren" Link verstecken',
        'generator_privacy_policy_url' => 'URL zur Datenschutzerklärung',
        'generator_consent_notice_description' => 'Hinweistext',
        'generator_consent_modal_description' => 'Dialogtext',
        'generator_purposes' => 'Verwendungszwecke',
        'generator_purposes_prompt' => 'Verwendungszweck hinzufügen',
        'generator_purpose_is_active' => 'Aktiv',
        'generator_purpose_title' => 'Bezeichnung',
        'generator_purpose_name' => 'maschinenlesbarer Name',
        'generator_services' => 'Dienste',
        'generator_services_prompt' => 'Dienst hinzufügen',
        'generator_service_is_active' => 'Aktiv',
        'generator_service_title' => 'Bezeichnung',
        'generator_service_name' => 'maschinenlesbarer Name',
        'generator_service_description' => 'Beschreibung',
        'generator_service_default' => 'Standardmäßig angeschaltet',
        'generator_service_default_help' => 'Falls aktiviert, ist der Dienst initial aktiviert, kann aber abeschalten werden.',
        'generator_service_required' => 'Notwendig',
        'generator_service_required_help' => 'Falls aktiviert, kann der Dienst nicht abgeschalten werden.',
        'generator_service_opt_out' => 'Opt-Out',
        'generator_service_opt_out_help' => 'Falls aktiviert, wird der Dienst im Hintergrund bereits ausgeführt und muss abgeschalten werden.',
        'generator_service_only_once' => 'Nur einmal ausführen',
        'generator_service_only_once_help' => 'Falls aktiviert, wird der Dienst nur einmal ausgeführt, egal wie oft er an- oder abgeschalten wird.',
        'generator_service_purposes' => 'Verwendungszwecke',
        'generator_service_cookies' => 'Cookies',
        'generator_service_cookies_prompt' => 'Cookies hinzufügen',
        'generator_service_cookie_domain' => 'Domain',
        'generator_service_cookie_name' => 'Name oder Regulärer Ausdruck',
        'generator_service_cookie_name_help' => 'Zur Verwendung Regulärer Ausdrücke / nutzen. Bsp.: /_ga_.*/i',
        'generator_service_cookie_path' => 'Pfad',
        'generator_service_callback' => 'Callback',
        'generator_service_callback_help' => 'Falls der Dienst mittels Javascript an- bzw. abgeschalten werden muss. Kann hier ein callback angeben werden. Verfügbare Variablen sind service (object) und consent (boolean).',
        'generator_config' => 'Generierte Konfiguration',
        'generator_apply_config' => 'Konfiguration übernehmen',
    ],
];
