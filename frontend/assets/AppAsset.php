<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/base.css',
        'css/site.css',
        'css/style.css',
        'css/bootstrap.min.css',
        'css/boxicons.min.css',
        // 'css/icofont.min.css',
        'css/remixicon.css',
        'css/owl.carousel.min.css',
        'css/aos.css',
        'css/stylelogin.css',
        'css/venobox.css',
        'css/font-awesome.min.css',
        'css/fonts.css',
        'css/main.css',
        'css/vendor.css',



    ];
    public $js = [
        'js/main2.js',
        'js/jquery-2.1.3.min.js',
        'js/jquery.min.js',
        'js/bootstrap.bundle.min.js',
        'js/modernizr.js',
        'js/pace.min.js',
        'js/plugins.js',
        'js/jquery.easing.min.js',
        'js/validate.js',
        'js/jquery.waypoints.min.js',
        'js/isotope.pkgd.min.js',
        'js/venobox.min.js',
        'js/owl.carousel.min.js',
        'js/aos.js',






        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
