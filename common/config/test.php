<?php
return [
    'id' => 'app-common-tests',
    'basePath' => dirname(__DIR__),
    'components' => [
        'user' => [
            'class' => 'yii\web\User',
            'identityClass' => 'common\models\User',
        ],
        'urlManager'=>[
            'showScriptName'=>false,
            'enablePrettyUrl'=>true,
        ],
        'request' => [
            'cookieValidationKey' => 'test',
        ],
    ],
];
