<?php
/**
 * Created by PhpStorm.
 * User: pascalkuiper
 * Date: 2019-10-04
 * Time: 10:16
 */


$config = [

    'DB_HOST' => 'localhost',
    'DB_NAME' => 'portfolio',
    'DB_USER' => 'root',
    'DB_PASSWORD' => '',
    'BASE_URL' => '/pascal-pf/public',
    'ROOT' => dirname(dirname(__DIR__)),
    'PRIVATE' => dirname(__DIR__),
    'WEBROOT' => dirname(dirname(__DIR__)) . '/public'
    ];
//////    SCHOOL SERVER
//    'DB_HOST' => '127.0.0.1',
//    'DB_NAME' => 'c1702spacex',
//    'DB_USER' => 'c1702pk1260',
//    'DB_PASSWORD' => '1234',
//    'BASE_URL' => '/bewijzenmap/periode1.4/project-spacex/public',
//    'ROOT' => dirname(dirname(__DIR__)),
//    'PRIVATE' => dirname(__DIR__),
//    'WEBROOT' => dirname(dirname(__DIR__)) . '/public'
//];
return $config;

