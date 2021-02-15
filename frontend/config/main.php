<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'admin' => [
            'class' => 'mdm\admin\Module',
            'layout' => 'left-menu',
            //'layout' => 'right-menu'
            //'layout' => 'top-menu'
            'controllerMap'=>[
                'assignment' =>[
                    'class' => 'mdm\admin\controllers\AssignmentController',
                    'userClassName' => 'common\models\User', 
                    'idField' => 'id',
                    'usernameField' => 'username',
                    'searchClass' => 'mdm\admin\models\searchs\User',
                    /*searchClass Nombre de clase totalmente calificado de su modelo para buscar el modelo de usuario. 
                    Debe proporcionar el modelo de búsqueda adecuado para habilitar el filtrado y la clasificación por columnas adicionales.*/
                ],
            ],
        ]
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            //'identityClass' => 'common\models\User',
            'identityClass' => 'mdm\admin\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
            'timeout' => 86400,
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
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */

        'authManager' => [
            'class' => 'yii\rbac\DbManager', //'yii\rbac\PhpManager',
        ],
    ],
    'params' => $params,

    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            //'/*',
            //'gii/*',
            'site/*',
            'admin/*',
            //'audit/*'
            // The actions listed here will be allowed to everyone including guests.
            // So, 'admin/*' should not appear here in the production, of course.
            // But in the earlier stages of your development, you may probably want to
            // add a lot of actions here until you finally completed setting up rbac,
            // otherwise you may not even take a first step.
        ]
    ],
];
