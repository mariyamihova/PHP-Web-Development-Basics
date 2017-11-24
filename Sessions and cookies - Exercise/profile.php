<?php
require_once 'common.php';
$userRepository=new \App\Repository\UserRepository($db);
$userService=new \App\Service\UserService($userRepository);

$userHttpHandler=new \App\Http\HomeHttpHandler($template,$binder);
$userHttpHandler->profile($userService,$_POST);