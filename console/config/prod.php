<?php
defined('YII_DEBUG') or define("YII_DEBUG", false);

$initConfig = [
    "components"  =>  [
    ],
    "params"    =>  [
    ]
];
list($commonBaseConfig, $commonConfig) = include(__DIR__ . '/../../common/config/prod.php');
$baseConfig = include('base.php');

return [$commonBaseConfig, $commonConfig, $baseConfig, $initConfig];
