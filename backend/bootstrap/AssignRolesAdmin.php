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

namespace backend\bootstrap;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Yii;
use yii\base\Application;

/**
 * Class AssignRolesAdmin: <br />
 * Assign administration roles to user ADMIN <br />
 * ELIGIBLE FOR DEPRECATION (DEPRECATED)
 * @package backend\bootstrap
 */
class AssignRolesAdmin extends \yii\base\Component {

    private $_startTime;

    /**
     * Application-specific roles initialization
     * @uses onApplicationAction
     */
    public function init() {
        parent::init(); 
        \Yii::$app->on(Application::EVENT_BEFORE_ACTION, [$this, 'onApplicationAction']);
    }

    /**
     * Application-specific roles initialization
     */
    public function onApplicationAction($event) {
        $actionId = $event->action->uniqueId;
        $authManager = Yii::$app->authManager;
        $roles = $authManager->getRoles();
        $children = $authManager->getChildren('ADMIN');
        $adminRole = $authManager->getRole('ADMIN');
        foreach ($roles as $key => $value) {
            if ($key != 'ADMIN' && !isset($children[$key]) && !in_array($key, ['AMMINISTRATORE_CWH'])) { // TODO translate
                $ruolo = $authManager->getRole($key);
                $authManager->addChild($adminRole, $value);
            }
        }
    }

}
