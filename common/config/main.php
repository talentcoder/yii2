<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager'=>[
            'showScriptName'=>false,
            'enablePrettyUrl'=>true,
        ],
        'helper'=>[
            'class'=>'common\components\Helper',
            'property'=>'123',
        ],
    ],

    // 'modules'=>[
    //     'user'=>[
    //         'class'=>'dektrium\user\Module',
    //         'confirmWithin'=>21600,
    //         'cost'=>['admin']
    //     ],
    // ],
];
