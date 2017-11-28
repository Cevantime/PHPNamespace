<?php 

require_once 'vendor/autoload.php';

$db = \PDO\PDOSingleton::getPDO();

$userDao = new \DAO\UserDAO($db);

var_dump($userDao->findMany(array('username = ?' => 'jeannemoreau')));