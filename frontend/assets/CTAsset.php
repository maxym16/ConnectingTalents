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
use yii\web\View;


/**

 * Main frontend application asset bundle.

 * @package frontend\assets

 */

class CTAsset extends AssetBundle

{

    public $basePath = '@webroot';

    public $baseUrl = '@web';

    public $jsOptions = ['position' => View::POS_END];


    public $css = [
//        'assets/css/header.css',
        'assets/css/content.css',
        'assets/css/slick.min.css',
        'assets/css/fancybox.min.css',
    ];

    public $js = [
        'assets/js/common.js',
        'assets/js/home-page.js',
        'assets/js/main.js',
    ];

    public $depends = [

    ];

}