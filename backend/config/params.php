<?php
/**
 * Lombardia Informatica S.p.A.
 * OPEN 2.0
 *
 * @see http://example.com Developers'community
 * @license GPLv3
 * @license https://opensource.org/licenses/gpl-3.0.html GNU General Public License version 3
 *
 * @package    lispa\amos\basic\template
 * @category   CategoryName
 * @author     Lombardia Informatica S.p.A.
 */
$googleMapsApiKey = 'set_your_api_key';

return [
    'adminEmail' => 'admin@example.com',
    'email-assistenza' => 'info@example.com',
    'icon-framework' => 'am',    
    'google-maps' => [
        'key' => $googleMapsApiKey
    ],
    'googleMapsApiKey'=> $googleMapsApiKey,
    'googleMapsLibraries'=> null,
    'googleMapsLanguage' =>'it',
    'dont-use-logo' => TRUE,

    'favicon' => 'amos_favicon.png',
    
    // Enable Amos Exclusive features
    'template-amos' => FALSE,
    
    // Enable template slideshow
    'slideshow' => TRUE,
    'slideshow-label' => 'Mostra introduzione', // TODO translate and amos-XXX::[t()|tHtml()] ?

    // Enable Localization menu
    'languageSelector' => TRUE,
    'allLanguages' => ['Italiano' => 'it-IT', 'English' => 'en-GB'],

];
