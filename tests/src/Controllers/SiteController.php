<?php

namespace TerabyteSoft\Assets\BootBox\Tests\Controllers;

use yii\web\Controller;
use yii\web\ErrorAction;
use yii\web\filters\AccessControl;
use yii\web\filters\VerbFilter;

/**
 * SiteController
 *
 * Layout web application user test
 **/
class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                '__class' => ErrorAction::class,
                'view' => '@TerabyteSoft/Assets/BootBox/Tests/Views/Site/Error.php',
            ],
        ];
    }

    /**
     * actionIndex
     *
	 * @return string actions config
	 **/
    public function actionIndex(): string
    {
        return $this->render('@TerabyteSoft/Assets/BootBox/Tests/Views/Site/Index.php');
	}
}
