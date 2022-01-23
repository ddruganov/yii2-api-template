<?php

use yii\log\FileTarget;

return [
    'vendorPath' => Yii::getAlias('@vendor'),
    'components' => [
        'log' => [
            [
                'class' => FileTarget::class,
                'categories' => ['application'],
                'logVars' => [],
                'logFile' => '@logs/main.log',
                'enableRotation' => false,
                'prefix' => fn () => ''
            ]
        ]
    ],
];
