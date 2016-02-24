<?php
namespace oreolek\messages\assets;

class CloadAsset extends BaseMessageAssets {

    public $js = [
        'js/private_mess_cload.js'
    ];

    public $css = [
        'css/cload_message.css',
    ];

    public $depends = [
        'oreolek\messages\assets\PrivateMessPoolingAsset',
        'oreolek\messages\assets\TinyscrollbarAsset',
        'oreolek\messages\assets\SortElementsAsset'
    ];

}
