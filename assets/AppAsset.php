<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/font-awesome.min.css', 
        'css/owl.carousel.min.css',
        'css/slicknav.css',
        'css/slicknav.min.css',
        'css/style.css',
        'css/site.css',
        
    ];
    public $js = [
        'js/jquery.accordion.js',
        'js/jquery.cookie.js',
        'js/jquery.slicknav.js',
        'js/owl.carousel.min.js',
        'js/main.js',
        'js/carousel.js',
        'js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
    ];
}
