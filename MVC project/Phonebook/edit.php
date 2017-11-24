<?php
require_once 'common.php';
$contactRepository=new \App\Repo\ContactRepository($db);
$contactService=new \App\Service\ContactService($contactRepository);

$contactHttpHandler=new \App\Http\ContactsHttpHandler($template,$binder);
$contactHttpHandler->edit($contactService,$_GET);