<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/params.php')
    
      
);
require(__DIR__ . '/messages.php');

return [
    'id' => 'app-backend',
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
    ],
    'params' => $params,
];

