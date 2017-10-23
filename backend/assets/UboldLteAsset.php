<?php

namespace backend\assets;

use yii\web\AssetBundle;
use yii\web\View;


/**

 * Class AppAsset

 * Main backend application asset bundle.

 * @package backend\assets

 */

class UboldLteAsset extends AssetBundle
{
    public $basePath = '@webroot';

    public $baseUrl = '@web';

    public $cssOptions = ['condition' => 'lte IE9'];

    public $css = [
        'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js',
        'https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js'
    ];
}