<?php

namespace app\widgets\memadSearch\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class MemadSearchAsset extends AssetBundle {

    public $publishOptions = [
        'forceCopy' => YII_DEBUG
    ];
    public $sourcePath = '@app/widgets/memadSearch/assets';
    public $css = [
        'css/memadSearch.css',
    ];
//    public $js = [
//        'js/memadSearch.js',
//    ];
//    public $depends = [
//        'yii\web\JqueryAsset',
//    ];

}
