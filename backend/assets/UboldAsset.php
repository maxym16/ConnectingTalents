<?php

namespace backend\assets;

use yii\web\AssetBundle;
use yii\web\View;


/**

 * Class AppAsset

 * Main backend application asset bundle.

 * @package backend\assets

 */

class UboldAsset extends AssetBundle

{

    public $basePath = '@webroot';

    public $baseUrl = '@web';

    public $jsOptions = ['position' => View::POS_HEAD];

    public $css = [
        'assets/css/bootstrap.min.css',
        'assets/css/core.css',
        'assets/css/components.css',
        'assets/css/icons.css',
        'assets/css/pages.css',
        'assets/css/responsive.css'
    ];

    public $js = [
        'assets/js/modernizr.min.js'
    ];

    public $depends = [

    ];

}