<?php

use yii\di\Reference;

return [
    'app' => [
        'basePath' => dirname(__DIR__).'/tests/src',
        'controllerNamespace' => 'TerabyteSoft\Assets\BootBox\Tests\Controllers',
        'id' => 'asset.bootbox.tests',
        'name' => 'asset.bootbox.tests',
    ],
    'aliases' => array_merge($aliases, [
        '__class'   => yii\base\Aliases::class,
        '@root'     => YII_ROOT,
        '@vendor'   => '@root/vendor',
        '@public'   => '@root/tests/public',
        '@runtime'  => '@public/runtime',
        '@web'      => '/',
    ]),
    'assetManager' => [
        '__class'   => yii\web\AssetManager::class,
        'basePath'  => '@public/assets',
        'baseUrl'   => '@web/assets',
    ],
    'cache' => [
        '__class' => \Yiisoft\Cache\Cache::class,
        'handler' => [
            '__class'   => \Yiisoft\Cache\FileCache::class,
            'keyPrefix' => 'asset.bootbox.tests'
        ],
    ],
    'logger' => function () {
        return new \Yiisoft\Log\Logger([
            new Yiisoft\Log\FileTarget(
                '/tests/public/@runtime/logs/app.log'
            )
        ]);
    },
    'request' => [
        'enableCookieValidation' => true,
        // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
        'cookieValidationKey' => 'asset.bootbox.tests',
    ],
];
