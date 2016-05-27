<?php

// comment out the following two lines when deployed to production
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : "";
$hostParts = explode(".", $host);
$env = ($host && end($hostParts) == 'loc') ? 'dev' : 'dev';
//$env = 'dev';
//var_dump($env);
//exit();
defined('YII_DEBUG') or define('YII_DEBUG', $env == 'dev' ? true : false);
defined('YII_ENV') or define('YII_ENV', $env);

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();
