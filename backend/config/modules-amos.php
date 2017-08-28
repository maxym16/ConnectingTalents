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

$modules = [
    'admin' => [
        'class' => 'lispa\amos\admin\AmosAdmin',
         'fieldsConfigurations' => [
                'boxes' => [
                    'box_account_data' => ['form' => true, 'view' => true],
                    'box_dati_accesso' => ['form' => true, 'view' => true],
                    'box_dati_contatto' => ['form' => true, 'view' => true],
                    'box_dati_fiscali_amministrativi' => ['form' => false, 'view' => false],
                    'box_dati_nascita' => ['form' => true, 'view' => true],
                    'box_email_frequency' => ['form' => true, 'view' => true],
                    'box_facilitatori' => ['form' => false, 'view' => false],
                    'box_foto' => ['form' => true, 'view' => true],
                    'box_informazioni_base' => ['form' => true, 'view' => true],
                    'box_presentazione_personale' => ['form' => true, 'view' => true],
                    'box_prevalent_partnership' => ['form' => true, 'view' => true],
                    'box_privacy' => ['form' => true, 'view' => true],
                    'box_questio' => ['form' => false, 'view' => false],
                    'box_role_and_area' => ['form' => true, 'view' => true],
                    'box_social_account' => ['form' => true, 'view' => true],
                ],
                'fields' => [
                    'attivo' => ['form' => true, 'view' => true, 'referToBox' => 'box_account_data'],
                    'codice_fiscale' => ['form' => false, 'view' => false, 'referToBox' => 'box_dati_fiscali_amministrativi'],
                    'cognome' => ['form' => true, 'view' => true, 'referToBox' => 'box_informazioni_base'],
                    'default_facilitatore' => ['form' => true, 'view' => true],
                    'email' => ['form' => true, 'view' => false, 'referToBox' => 'box_dati_contatto'],
                    'email_pec' => ['form' => false, 'view' => false, 'referToBox' => 'box_dati_contatto'],
                    'facebook' => ['form' => true, 'view' => true, 'referToBox' => 'box_social_account'],
                    'facilitatore_id' => ['form' => false, 'view' => false, 'referToBox' => 'box_facilitatori'],
                    'googleplus' => ['form' => true, 'view' => true, 'referToBox' => 'box_social_account'],
                    'linkedin' => ['form' => true, 'view' => true, 'referToBox' => 'box_social_account'],
                    'nascita_comuni_id' => ['form' => false, 'view' => false, 'referToBox' => 'box_dati_nascita'],
                    'nascita_data' => ['form' => false, 'view' => false, 'referToBox' => 'box_dati_nascita'],
                    'nascita_nazioni_id' => ['form' => false, 'view' => false, 'referToBox' => 'box_dati_nascita'],
                    'nascita_province_id' => ['form' => false, 'view' => false, 'referToBox' => 'box_dati_nascita'],
                    'nome' => ['form' => true, 'view' => true, 'referToBox' => 'box_informazioni_base'],
                    'note' => ['form' => true, 'view' => false, 'referToBox' => 'box_informazioni_base'],
                    'presentazione_breve' => ['form' => true, 'view' => true, 'referToBox' => 'box_informazioni_base'],
                    'presentazione_personale' => ['form' => true, 'view' => true, 'referToBox' => 'box_presentazione_personale'],
                    'prevalent_partnership_id' => ['form' => true, 'view' => true, 'referToBox' => 'box_prevalent_partnership'],
                    'privacy' => ['form' => true, 'view' => true, 'referToBox' => 'box_privacy'],
                    'sesso' => ['form' => true, 'view' => false, 'referToBox' => 'box_informazioni_base'],
                    'telefono' => ['form' => true, 'view' => false, 'referToBox' => 'box_dati_contatto'],
                    'twitter' => ['form' => true, 'view' => true, 'referToBox' => 'box_social_account'],
                    'ultimo_accesso' => ['form' => true, 'view' => true, 'referToBox' => 'box_account_data'],
                    'ultimo_logout' => ['form' => true, 'view' => true, 'referToBox' => 'box_account_data'],
                    'username' => ['form' => true, 'view' => false, 'referToBox' => 'box_dati_accesso'],
                    'user_profile_age_group_id' => ['form' => true, 'view' => true, 'referToBox' => 'box_informazioni_base'],
                    'user_profile_area_id' => ['form' => true, 'view' => false, 'referToBox' => 'box_role_and_area'],
                    'userProfileImage' => ['form' => true, 'view' => true, 'referToBox' => 'box_foto'],
                    'user_profile_role_id' => ['form' => true, 'view' => false, 'referToBox' => 'box_role_and_area'],
                ]
            ]
    ],
    'amministra-utenti' => [
        'class' => 'mdm\admin\Module',
        'layout' => "@vendor/lispa/amos-core/views/layouts/admin",
        //'left-menu', // it can be '@path/to/your/layout'.
        'controllerMap' => [
            'assignment' => [
                'class' => 'mdm\admin\controllers\AssignmentController',
                'userClassName' => 'common\models\User',
                'idField' => 'id'
            ],
            /*
              'other' => [
              'class' => 'path\to\OtherController', // add another controller
              ],
             */
        ],
        'menus' => [
            'assignment' => [
                'label' => 'Gestisci Assegnazioni' // TODO translate
            ],
        ]
    ],
    'chat' => [
        'class' => 'lispa\amos\chat\AmosChat',
    ],
    'comments' => [
       'class' => 'lispa\amos\comments\AmosComments',
       'modelsEnabled' => [
	   'lispa\amos\discussioni\models\DiscussioniTopic',
           'lispa\amos\documenti\models\Documenti',
           'lispa\amos\events\models\Event',
           'lispa\amos\news\models\News',
       ],
	],
    'community' => [
        'class' => 'lispa\amos\community\AmosCommunity',
    ],
    'comuni' => [
        'class' => 'lispa\amos\comuni\AmosComuni',
    ],
    'cwh' => [
        'class' => 'lispa\amos\cwh\AmosCwh',
    ],
    'dashboard' => [
        'class' => 'lispa\amos\dashboard\AmosDashboard',
    ],
    'discussioni' => [
        'class' => 'lispa\amos\discussioni\AmosDiscussioni',
    ],
    'documenti' => [
        'class' => 'lispa\amos\documenti\AmosDocumenti',
    ],
    'events' => [
        'class' => 'lispa\amos\events\AmosEvents',
    ],
    'faq' => [
        'class' => 'lispa\amos\faq\AmosFaq',
    ],
    'favorites' => [
        'class' => 'lispa\amos\favorites\AmosFavorites',
        'modelsEnabled' => [
 	     'lispa\amos\discussioni\models\DiscussioniTopic',
	     'lispa\amos\documenti\models\Documenti',
             'lispa\amos\news\models\News',
        ]
    ],
    'inforeq' => [
        'class' => 'lispa\amos\inforeq\AmosInforeq',
    ],
    'myactivities' => [
         'class' => 'lispa\amos\myactivities\AmosMyActivities',
    ],
    'news' => [
        'class' => 'lispa\amos\news\AmosNews',
    ],
    
    'notify' => [
        'class' => 'lispa\amos\notificationmanager\AmosNotify',
    ],
    'organizzazioni' => [
        'class' => 'lispa\amos\organizzazioni\AmosOrganizzazioni',
    ],
    'privileges' => [
	'class' => 'lispa\amos\privileges\AmosPrivileges',
    ],
//    'progetti' => [
//        'class' => 'lispa\amos\progetti\AmosProgetti',
//    ],
    'project_management' => [
        'class' => 'lispa\amos\projectmanagement\Module',
    ],
    'proposte_collaborazione' => [
        'class' => 'lispa\amos\proposte_collaborazione\AmosProposteCollaborazione',
    ],
    'proposte_collaborazione_een' => [
        'class' => 'lispa\amos\proposte_collaborazione_een\AmosProposteCollaborazioneEen',
    ],
    'slideshow' => [
        'class' => 'lispa\amos\slideshow\AmosSlideshow',
    ],
    'sondaggi' => [
        'class' => 'lispa\amos\sondaggi\AmosSondaggi',
    ],
    'tag' => [
        'class' => 'lispa\amos\tag\AmosTag',
    ],
    'upload' => [
        'class' => 'lispa\amos\upload\AmosUpload',
    ],
    'utility' => [
        'class' => 'lispa\amos\utility\Module'
    ],
    'porting' => [
        'class' => 'lispa\amos\porting\AmosPorting',
    ],
    'report' => [
        'class' => 'lispa\amos\report\AmosReport',
        'modelsEnabled' => [
 	    'lispa\amos\discussioni\models\DiscussioniTopic',
	    'lispa\amos\documenti\models\Documenti',
	    'lispa\amos\events\models\Event',
            'lispa\amos\news\models\News',
        ]
    ],
    'workflow' => [
       'class' => 'lispa\amos\workflow\AmosWorkflow',
   ],

];

if (isset($modules['tag'])) {
   
    if (isset($modules['community'])) {
        $modules['tag']['modelsEnabled'][] = 'lispa\amos\community\models\Community';
    }
    if (isset($modules['discussioni'])) {
        $modules['tag']['modelsEnabled'][] = 'lispa\amos\discussioni\models\DiscussioniTopic';
    }
    if (isset($modules['documenti'])) {
        $modules['tag']['modelsEnabled'][] = 'lispa\amos\documenti\models\Documenti';
    }
    if (isset($modules['events'])) {
        $modules['tag']['modelsEnabled'][] = 'lispa\amos\events\models\Event';
    }
    if (isset($modules['news'])) {
        $modules['tag']['modelsEnabled'][] = 'lispa\amos\news\models\News';
    }
}

return $modules;
