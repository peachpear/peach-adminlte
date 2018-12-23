<?php
defined("ENV") || define("ENV", "test");
$baseConfig = include('base.php');

$commonConfig = array(
    'components' => [
        'demoDB' => [
            'dsn' => '',
            'username' => '',
            'password' => '',
        ],
        'kafkaProducer' => [
            "metadata" => [
                "brokerList" => "192.168.40.122:9200",
            ],
            "requireAck" => 0,
        ],
    ],
    'params' => [],
    "configService" => [
        "filePath" => "/config/test/",
        "fileExt" => "json",
    ]
);

return [$baseConfig, $commonConfig];
