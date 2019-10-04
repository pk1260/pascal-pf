<?php
/**
 * Created by PhpStorm.
 * User: pascalkuiper
 * Date: 2019-10-04
 * Time: 10:16
 */


// Online Server
$config = [
    'DB_HOST' => 'localhost',
    'DB_NAME' => 'portfolio',
    'DB_USER' => 'root',
    'DB_PASSWORD' => '',
    'ROOT' => dirname(dirname(__DIR__)),
    'PRIVATE' => dirname(__DIR__),
    'WEBROOT' => dirname(dirname(__DIR__)) . '/public'
];

//// School Server
//$config = [
//    'DB_HOST' => '127.0.0.1',
//    'DB_NAME' => '',
//    'DB_USER' => '',
//    'DB_PASSWORD' => '',
//    'BASE_URL' => '/bewijzenmap/periode1.4/project-spacex/public',
//    'ROOT' => dirname(dirname(__DIR__)),
//    'PRIVATE' => dirname(__DIR__),
//    'WEBROOT' => dirname(dirname(__DIR__)) . '/public'
//];

return $config;

