<?php

namespace backend\assets;



use yii\web\AssetBundle;
use yii\web\View;


/**

 * Class AppAsset

 * Main backend application asset bundle.

 * @package backend\assets

 */

class UboldFooterAsset extends AssetBundle

{

    public $basePath = '@webroot';

    public $baseUrl = '@web';

    public $jsOptions = ['position' => View::POS_END];

    public $css = [];

    public $js = [
        'assets/js/jquery.min.js',
        'assets/js/bootstrap.min.js',
        'assets/js/detect.js',
        'assets/js/fastclick.js',
        'assets/js/jquery.slimscroll.js',
        'assets/js/jquery.blockUI.js',
        'assets/js/waves.js',
        'assets/js/wow.min.js',
        'assets/js/jquery.nicescroll.js',
        'assets/js/jquery.scrollTo.min.js',
        'assets/plugins/notifyjs/js/notify.js',
        'assets/plugins/notifications/notify-metro.js',
        'assets/js/jquery.core.js',
        'assets/js/jquery.app.js',
    ];

    public $depends = [

    ];

}