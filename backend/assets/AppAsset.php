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

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Class AppAsset
 * Main backend application asset bundle.
 * @package backend\assets
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [         
      'css/less/style_custom.less',
        
    ];
    public $js = [
        //'js/jquery.validate.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',     
        'lispa\amos\core\views\assets\AmosCoreAsset',
    ];
}