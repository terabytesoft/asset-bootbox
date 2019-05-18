<?php

/**
 * @link https://github.com/terabytesoft
 * @copyright Copyright (c) 2018 TerabyteSoft S.A.
 * @license https://choosealicense.com/licenses/bsd-3-clause/
 *
 * @author: Wilmer Arámbula <wilmer.arambula@gmail.com>
 */

/**
 * Class BootboxAsset.
 *
 * Register assset bundle widget bootbox
 **/

namespace TerabyteSoft\Assets\BootBox;

use yii\web\AssetBundle;

class BootBoxAsset extends AssetBundle
{
	public $sourcePath = '@npm/bootbox/';

	public $js = [
		'src/bootbox.js',
	];

	public $publishOptions = [
		'only' => [
			'bootbox.js',
		],
	];
}
