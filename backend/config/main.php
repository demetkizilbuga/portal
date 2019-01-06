<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'defaultRoute' => 'site/home',
    'modules' => [
        'site' => [
            'class' => 'kouosl\site\Module'   // here is our v1 modules
        ], 
        'menu' => [
            'class' => 'kouosl\menu\Module',
            ],
       'user' => [
            'class' => 'kouosl\user\Module'   // here is our v1 modules
        ], 
        'sample' => [
            'class' => 'kouosl\sample\Module'   // here is our v1 modules
        ],
       'nobetlistesi' => [
        'class' => 'kouosl\nobetlistesi\Module'   // here is our v1 modules
    ]


    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
			'class' => 'kouosl\base\components\Request',
			'web'=> '/backend/web',
            'aliasUrl' => '/admin'
        ],
		 'urlManager' => [
        	'enablePrettyUrl' => true,
        	'showScriptName' => false,
        ],
        'user' => [
            'identityClass' => 'kouosl\user\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => ['site/auth/login'],
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
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
            'errorAction' => 'site/auth/error',
        ],
        'view' => [
            'class' => 'kouosl\base\components\View',
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@vendor/kouosl/portal-theme',
                    '@app/modules' => '@vendor/kouosl/portal-theme/views/',
                ],
                'baseUrl' => '@vendor/kouosl/portal-theme',
            ],

        ],
    ],
    'layout' => 'backend-main',
    'params' => $params,
];
