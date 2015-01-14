<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/params.php')
    
      
);
/*use \yii\web\Request;
$baseUrl = str_replace('/admin', '', (new Request)->getBaseUrl());
echo $baseUrl; die();*/

require(__DIR__ . '/messages.php');

return [
    'id' => 'app-backend',
    //'homeUrl' => '/admin',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'user' => [
            'identityClass' => 'app\models\Admin',
            'enableAutoLogin' => true,
        ],
        'CommonFunctions' => [
            'class' => 'backend\components\CommonFunctions',
        ],
        'UtilityHtml' => [
            'class' => 'backend\components\UtilityHtml',
        ],
        
        'thumbnail' => [
        'class' => 'yii\thumbnail\EasyThumbnail',
        'cacheAlias' => 'assets/gallery_thumbnails',
        ],
        
     
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'request' => [
                    //'baseUrl' => '/admin',
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enablePrettyUrl' => true,
            'rules' => array(
                    '<controller:\w+>/<id:\d+>' => '<controller>/view',
                    '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                    '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ],

    ],
    'params' => $params,
];

