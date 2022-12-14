<?php return [
    'plugin' => [
        'name' => 'Klaro Cookie Consent',
        'description' => 'Biedt de cookiemanager van https://klaro.kiprotect.com/ aan',
    ],
    'settings' => [
        'label' => 'Klaro Cookie Consent',
        'description' => 'Configureer de Cookie-Manager',
        'category' => 'Cookies',
        'enabled' => 'Activeren',
        'no_css' => 'CSS styling uitschakelen',
        'consentconfig' => 'Configuratie',
        'consentconfig_help' => 'Lees meer op <a href="https://klaro.kiprotect.com/#getting-started" target="klaro">klaro.kiprotect.com</a>',
        'custom_css' => 'Eigen CSS',
        'tab_basic' => 'Instellingen',
        'tab_generator' => 'Generator',
        'generator_cookie_domain' => 'Cookie-Domain',
        'generator_cookie_domain_help' => 'Laat leeg, om Klaro het huidige domein te laten gebruiken.',
        'generator_cookie_expires_after_days' => 'Cookie vervalt in dagen',
        'generator_lang' => 'Taal code',
        'generator_default' => 'Diensten zijn standaard ingeschakeld',
        'generator_must_consent' => 'Gebruiker moet verplicht toestemming geven',
        'generator_must_consent_help' => 'Toon meteen het toestemming scherm. De gebruiker moet verplicht weigeren of akkoord gaan met de third-party diensten voor hij/zij dit kan sluiten.',
        'generator_accept_all' => 'Toon "Accepteer alles" knop',
        'generator_hide_decline_all' => 'Verberg de "Weiger alles" knop',
        'generator_hide_learn_more' => 'Verberg de "Lees meer" link',
        'generator_privacy_policy_url' => 'URL naar de privacy policy',
        'generator_consent_notice_description' => 'Notificatie tekst',
        'generator_consent_modal_description' => 'Dialoog tekst',
        'generator_purposes' => 'Toepassingen',
        'generator_purposes_prompt' => 'Voeg een toepassing toe',
        'generator_purpose_is_active' => 'Actief',
        'generator_purpose_title' => 'Naam',
        'generator_purpose_name' => 'Code',
        'generator_services' => 'Diensten',
        'generator_services_prompt' => 'Voeg een dienst toe',
        'generator_service_is_active' => 'Actief',
        'generator_service_title' => 'Naam',
        'generator_service_name' => 'Code',
        'generator_service_description' => 'Description',
        'generator_service_default' => 'Standaard ingeschakeld',
        'generator_service_default_help' => 'Indien ingeschakeld, wordt de dienst automatisch ingeschakeld, maar kan uitgeschakeld worden.',
        'generator_service_required' => 'Verplicht',
        'generator_service_required_help' => 'Indien ingeschakeld, kan de dienst niet uitgeschakeld worden door de gebruiker. Gebruik dit voor verplichte diensten in je website.',
        'generator_service_opt_out' => 'Opt-Out',
        'generator_service_opt_out_help' => 'Indien ingeschakeld, wordt de dienst ingeschakeld voor de gebruiker hiervoor zijn toestemming heeft gegeven. Dit raden we sterk af.',
        'generator_service_only_once' => 'E??nmalig uitvoeren',
        'generator_service_only_once_help' => 'Indien ingeschakeld, wordt de service maar ????n keer uitgevoerd, ongeacht hoe vaak deze is in- of uitgeschakeld. Dit is relevant voor onder andere tracking scripts dat een nieuwe page view event zouden genereren elke keer als Klaro deze in- of uitschakeld door een toestemmings wijziging van de gebruiker.',
        'generator_service_purposes' => 'Toepassingen',
        'generator_service_cookies' => 'Cookies',
        'generator_service_cookies_prompt' => 'Voeg een cookie toe',
        'generator_service_cookie_domain' => 'Domein',
        'generator_service_cookie_name' => 'Naam of regular expression',
        'generator_service_cookie_name_help' => 'Gebruik / voor regular expressions. Bijvoorbeeld: /_ga_.*/i',
        'generator_service_cookie_path' => 'Pad naar cookie',
        'generator_service_callback' => 'Callback',
        'generator_service_callback_help' => 'Je kan een optionele callback definie??ren dat elke keer opgeroepen wordt wanneer een toestemming gewijzigd wordt door de gebruiker. De beschikbare variabelen zijn \'service\' (object) en \'consent\' (boolean).',
        'generator_config' => 'Gegenereerde configuratie',
        'generator_config_help' => 'Kopie??r en plak dit in Instelling > Configuratie',
    ],
];
