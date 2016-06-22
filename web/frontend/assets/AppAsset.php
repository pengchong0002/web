<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    public $cssOptions = ['position' => \yii\web\View::POS_HEAD];
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'css/slider.css',
    ];
    public $js = [
        'js/jquery-1.8.3.min.js',
        'js/jquery.easing.1.3.js',
        'js/camera.min.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];

    public static function addscript($view,$jsfile)
    {
        $view->registerJsfile($jsfile,[AppAsset::className(),'depends'=>'frontend\assets\AppAsset','position' => \yii\web\View::POS_HEAD]);  //js在header里
    }


    public static function addcss($view,$css)
    {
        $view->registerCssfile($css,[AppAsset::className(),'depends'=>'frontend\assets\AppAsset','position' => \yii\web\View::POS_HEAD]);
    }
}
