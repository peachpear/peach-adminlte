<?php
defined("ENV") || define("ENV", "dev");
$baseConfig = include('base.php');

$commonConfig = array(
    'components' => [
        'demoDB' => [
            'dsn' => 'mysql:host=192.168.56.108;dbname=peach-adminlte',
            'username' => 'root',
            'password' => '123456',
        ],
    ],
    'params' => [],
    "configService" => [
        "filePath" => "/config/dev/",
        "fileExt" => "json",
    ]
);

return [$baseConfig, $commonConfig];
