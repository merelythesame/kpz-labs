<?php

use AbstractFactory\AppleFactory;
use AbstractFactory\ConcreteDevices\XiaomiLaptop;
use AbstractFactory\XiaomiFactory;
use FactoryMethod\ManagerCall;
use FactoryMethod\MobileApp;
use FactoryMethod\WebSite;
use Singleton\Authenticator;

require_once 'autoloader.php';

echo "<h1>Factory Method</h1><br>";

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

echo "<h1>Abstract Factory</h1><br>";

$appleFactory = new AppleFactory();
$xiaomiFactory = new XiaomiFactory();

$appleSmartphone = $appleFactory->createSmartphone();
echo $appleSmartphone->getInfo();

echo '<br>';

$miLaptop = $xiaomiFactory->createLaptop();
echo $miLaptop->getInfo();

echo "<h1>Singleton</h1><br>";

$auth1 = Authenticator::getInstance();
$auth2 = Authenticator::getInstance();

if ($auth1->authenticate("admin", "password")) {
    echo "Authentication successful!<br>";
} else {
    echo "Authentication failed.<br>";
}

if ($auth1 === $auth2) {
    echo "Same instance<br>";
} else {
    echo "Different instances<br>";
}
