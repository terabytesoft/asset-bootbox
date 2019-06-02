<?php

/**
 * @link https://github.com/terabytesoft
 * @copyright Copyright (c) 2018 TerabyteSoft S.A.
 * @license https://github.com/terabytesoft/asset-bootbox/blob/master/LICENSE.md
 *
 * @author: Wilmer Arámbula <wilmer.arambula@gmail.com>
 */

namespace TerabyteSoft\Asset\BootBox;

use yii\web\AssetBundle;

/**
 * Class YiiBootBoxAsset.
 *
 * Register simple js funtion yii bootbox
 **/
class YiiBootBoxAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/Js';

    public $js = [
        'YiiBootBox.js',
    ];

    public $publishOptions = [
        'only' => [
            'YiiBootBox.js',
        ],
    ];
}
