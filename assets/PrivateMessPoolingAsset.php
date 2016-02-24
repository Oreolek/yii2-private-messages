<?php
/**
 * Created by PhpStorm.
 * User: VisioN
 * Date: 06.06.2015
 * Time: 17:19
 */

namespace oreolek\messages\assets;


class PrivateMessPoolingAsset extends BaseMessageAssets {

    public $js = [
        'js/private_mess_pooling.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];

} 