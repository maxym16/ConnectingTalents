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

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 * @package frontend\assets
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
//        'http://www.connectingtalents.org/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.8.1',
//        'http://www.connectingtalents.org/wp-content/plugins/cookie-bar/css/cookie-bar.css?ver=4.8.1',
//        'http://www.connectingtalents.org/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.2.6',
        
    ];
    public $js = [
//'http://www.connectingtalents.org/wp-includes/js/jquery/jquery.js?ver=1.12.4',
//'http://www.connectingtalents.org/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1',
//'http://www.connectingtalents.org/wp-content/plugins/cookie-bar/js/cookie-bar.js?ver=1503945476',
//'http://www.connectingtalents.org/wp-content/plugins/respondjs/js/respond.min.js?ver=1.4.2',
//'http://www.connectingtalents.org/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.2.6',
//'http://www.connectingtalents.org/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.2.6',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
