<?php
/**
 * Created by PhpStorm.
 * User: VisioN
 * Date: 22.05.2015
 * Time: 14:05
 */

namespace oreolek\messages\assets;


class MessageAssets extends BaseMessageAssets {

    public $js = [
        'js/vision_messages.js',
    ];

    public $depends = [
        'oreolek\messages\assets\PrivateMessPoolingAsset',
        'yii\web\JqueryAsset'
    ];

} 