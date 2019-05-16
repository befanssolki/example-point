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
        'css/style.css',
        'https://use.fontawesome.com/releases/v5.7.2/css/all.css',
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
      'yii\web\YiiAsset',
      'grozzzny\depends\bootstrap4\Bootstrap4Asset',
      'grozzzny\depends\bootstrap4\Bootstrap4PluginAsset',
    ];
}

class Bootstrap4Asset extends AssetBundle
{
    public $sourcePath = '@vendor/twbs/bootstrap/dist';
    public $css = [
        'css/bootstrap.css',
    ];

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        Yii::$app->view->on(View::EVENT_AFTER_RENDER, function (){
            unset(Yii::$app->view->assetBundles['yii\bootstrap\BootstrapAsset']);
        });
        Yii::$app->view->on(View::EVENT_BEGIN_BODY, function (){
            unset(Yii::$app->view->assetBundles['yii\bootstrap\BootstrapAsset']);
        });
    }
}
