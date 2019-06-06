<?php

namespace TerabyteSoft\Tests\Codeception\BootBox;

use TerabyteSoft\Assets\BootBox\BootBoxAsset;
use TerabyteSoft\Assets\BootBox\YiiBootBoxAsset;
use TerabyteSoft\Tests\Codeception\BootBox\UnitTester;
use yii\helpers\Yii;
use yii\view\Theme;
use yii\web\AssetBundle;
use yii\web\View;
use Yiisoft\Yii\Bootstrap4\BootstrapAsset;
use Yiisoft\Yii\Bootstrap4\BootstrapPluginAsset;
use Yiisoft\Yii\JQuery\JqueryAsset;
use Yiisoft\Yii\JQuery\YiiAsset;

/**
 * Undocumented class
 */
class BootBoxCest
{
    protected $app;
    protected $bundle;
    protected $view;

    /**
     * Undocumented function
     *
     * @param UnitTester $I
     * @return void
     */
    public function _before(UnitTester $I)
    {
        $app = Yii::getApp();
        $theme = new Theme($pathMap = [
            '@app/views/layouts' => '@TerabyteSoft/Assets/BootBox/Tests/Views/Layouts',
            '@app/views/site'    => '@TerabyteSoft/Assets/BootBox/Tests/Views/Site',
        ]);
        $this->view = new View($app, $theme);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function bootBoxSimpleDependency()
    {
        \PHPUnit_Framework_Assert::assertEmpty($this->view->assetBundles);
        \TerabyteSoft\Assets\BootBox\BootBoxAsset::register($this->view);
        \PHPUnit_Framework_Assert::assertCount(6, $this->view->assetBundles);
        \PHPUnit_Framework_Assert::assertArrayHasKey(BootBoxAsset::class, $this->view->assetBundles);
        \PHPUnit_Framework_Assert::assertArrayHasKey(YiiBootBoxAsset::class, $this->view->assetBundles);
        \PHPUnit_Framework_Assert::assertArrayHasKey(BootstrapAsset::class, $this->view->assetBundles);
        \PHPUnit_Framework_Assert::assertArrayHasKey(BootstrapPluginAsset::class, $this->view->assetBundles);
        \PHPUnit_Framework_Assert::assertArrayHasKey(JqueryAsset::class, $this->view->assetBundles);
        \PHPUnit_Framework_Assert::assertArrayHasKey(YiiAsset::class, $this->view->assetBundles);
        \PHPUnit_Framework_Assert::assertInstanceOf(AssetBundle::class, $this->view->assetBundles[BootBoxAsset::class]);
        \PHPUnit_Framework_Assert::assertInstanceOf(AssetBundle::class, $this->view->assetBundles[YiiBootBoxAsset::class]);
        \PHPUnit_Framework_Assert::assertInstanceOf(AssetBundle::class, $this->view->assetBundles[BootstrapAsset::class]);
        \PHPUnit_Framework_Assert::assertInstanceOf(AssetBundle::class, $this->view->assetBundles[BootstrapPluginAsset::class]);
        \PHPUnit_Framework_Assert::assertInstanceOf(AssetBundle::class, $this->view->assetBundles[JqueryAsset::class]);
        \PHPUnit_Framework_Assert::assertInstanceOf(AssetBundle::class, $this->view->assetBundles[YiiAsset::class]);
    }

    /**
     * Undocumented function
     *
     * @param UnitTester $I
     * @return void
     */
    public function bootBoxSourcesPublish(UnitTester $I)
    {
        $bundle = BootBoxAsset::register($this->view);
        \PHPUnit_Framework_Assert::assertTrue(is_dir($bundle->basePath));
        $this->sourcesPublishVerifyFiles('js', $bundle);
    }

    /**
     * Undocumented function
     *
     * @param UnitTester $I
     * @return void
     */
    public function bootBoxRegister(UnitTester $I)
    {
        \PHPUnit_Framework_Assert::assertEmpty($this->view->assetBundles);

        BootBoxAsset::register($this->view);

        \PHPUnit_Framework_Assert::assertCount(6, $this->view->assetBundles);
        \PHPUnit_Framework_Assert::assertArrayHasKey(BootBoxAsset::class, $this->view->assetBundles);
        \PHPUnit_Framework_Assert::assertArrayHasKey(YiiBootBoxAsset::class, $this->view->assetBundles);
        \PHPUnit_Framework_Assert::assertArrayHasKey(BootstrapAsset::class, $this->view->assetBundles);
        \PHPUnit_Framework_Assert::assertArrayHasKey(BootstrapPluginAsset::class, $this->view->assetBundles);
        \PHPUnit_Framework_Assert::assertArrayHasKey(JqueryAsset::class, $this->view->assetBundles);
        \PHPUnit_Framework_Assert::assertArrayHasKey(YiiAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile('@TerabyteSoft/Assets/BootBox/Tests/Views/Layouts/Main.php');

        \PHPUnit_Framework_Assert::assertRegexp(
            '/bootstrap.css/',
            $result,
        );
        \PHPUnit_Framework_Assert::assertRegexp(
            '/jquery.js/',
            $result,
        );
        \PHPUnit_Framework_Assert::assertRegexp(
            '/bootstrap.bundle.js/',
            $result,
        );
        \PHPUnit_Framework_Assert::assertRegexp(
            '/yii.js/',
            $result,
        );
        \PHPUnit_Framework_Assert::assertRegexp(
            '/YiiBootBox.js/',
            $result,
        );
        \PHPUnit_Framework_Assert::assertRegexp(
            '/bootbox.js/',
            $result,
        );
    }

    /**
     * Undocumented function
     *
     * @param [type] $type
     * @param [type] $bundle
     * @return void
     */
    private function sourcesPublishVerifyFiles($type, $bundle)
    {
        foreach ($bundle->$type as $filename) {
            $publishedFile = $bundle->basePath . DIRECTORY_SEPARATOR . $filename;
            $sourceFile = $bundle->sourcePath . DIRECTORY_SEPARATOR . $filename;
            \PHPUnit_Framework_Assert::assertFileExists($publishedFile);
            \PHPUnit_Framework_Assert::assertFileEquals($publishedFile, $sourceFile);
        }
        \PHPUnit_Framework_Assert::assertTrue(is_dir($bundle->basePath));
    }
}
