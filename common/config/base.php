<?php
defined("APP_NAME") || define("APP_NAME", "demo");
defined('VERSION') or define('VERSION', '*');

return array(
    'aliases' => [
        '@common' => realpath(__DIR__."/../"),
    ],
    'bootstrap' => ['log'],
	'components' => [
		'cache' => [
            'class' => 'yii\caching\FileCache',
		],
        'demoDB' => [
            'class' => '\yii\db\Connection',
            'charset' => 'utf8mb4',
            'enableQueryCache' => false,
        ],
		'curl'=> [
			'class' => 'common\components\LComponentCurl',
		],
        'kafkaProducer' => [
            "class" =>  'common\components\LKafkaProducerQueue'
        ],
        'log' => [
            'targets' => [
                'kafka' => [
                    'class' => 'common\lib\LKafkaTarget',
                ],
            ],
        ]
	]
);
