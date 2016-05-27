<?php

//for docker
$mongoConnect = $_ENV['MONGODB_PORT'];

$mongoParts = parse_url($mongoConnect);

return [
    'class' => '\yii\mongodb\Connection',
    'dsn' => 'mongodb://' . $mongoParts['host'] . ':' . $mongoParts['port'] . '/motion',
//    'username' => 'root',
//    'password' => '',
//    'charset' => 'utf8',
];
