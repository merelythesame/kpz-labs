<?php

use FactoryMethod\ManagerCall;
use FactoryMethod\MobileApp;
use FactoryMethod\WebSite;

require_once 'autoloader.php';


$website = new Website();
$mobileApp = new MobileApp();
$managerCall = new ManagerCall();

$sub1 = $website->CreateSubscription('Domestic', new DateTime());
echo '<br>';
echo $sub1->listInfo();
echo '<br><br>';


$sub2 = $mobileApp->CreateSubscription('Educational', new DateTime());
echo '<br>';
echo $sub2->listInfo();
echo '<br><br>';

$sub3 = $managerCall->CreateSubscription('Premium', new DateTime());
echo '<br>';
echo $sub3->listInfo();