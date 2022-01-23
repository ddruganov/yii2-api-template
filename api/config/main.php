<?php

return [
    'id' => 'app-api',
    'basePath' => Yii::getAlias('@api'),
    'controllerNamespace' => 'api\controllers',
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => require 'routes.php'
        ],
    ],
    'params' => require 'params.php',
];
