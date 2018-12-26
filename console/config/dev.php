<?php
defined('YII_DEBUG') or define("YII_DEBUG", true);

$initConfig = [
    "components"  =>  [
    ],
    "params"    =>  [
    ]
];

list($commonBaseConfig, $commonConfig) = include(__DIR__ . '/../../common/config/dev.php');
$baseConfig = include('base.php');

return [$commonBaseConfig, $commonConfig, $baseConfig, $initConfig];