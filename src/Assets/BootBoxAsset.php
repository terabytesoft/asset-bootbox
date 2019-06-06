<?php

/**
 * @link https://github.com/terabytesoft
 * @copyright Copyright (c) 2018 TerabyteSoft S.A.
 * @license https://github.com/terabytesoft/asset-bootbox/blob/master/LICENSE.md
 *
 * @author: Wilmer Arámbula <wilmer.arambula@gmail.com>
 */

namespace TerabyteSoft\Assets\BootBox;

use yii\web\AssetBundle;

/**
 * Class BootBoxAsset.
 *
 * Register assset bundle widget bootbox
 */
class BootBoxAsset extends AssetBundle
{
    public $sourcePath = '@npm/bootbox/src';

    public $js = [
        'bootbox.js',
    ];

    public $publishOptions = [
        'only' => [
            'bootbox.js',
        ],
    ];

    public $depends = [
        \TerabyteSoft\Assets\BootBox\YiiBootBoxAsset::class,
    ];
}
