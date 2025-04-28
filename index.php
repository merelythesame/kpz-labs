<?php

require_once 'autoloader.php';
use Adapter\FileLoggerAdapter;
use Adapter\FileWrite;
use Adapter\Logger;
use Bridge\Circle;
use Bridge\Raster;
use Bridge\Square;
use Bridge\Triangle;
use Bridge\Vector;
use Composite\ClickListener;
use Composite\LightElementNode;
use Composite\LightTextNode;
use Composite\MetaDataFlyweightFactory;
use Composite\MouseOverListener;
use Decorator\Items\BootsOfSpeed;
use Decorator\Items\FireSword;
use Decorator\Items\HealingPotion;
use Decorator\Items\IronArmor;
use Decorator\Mage;
use Decorator\Paladin;
use Decorator\Warrior;
use Proxy\SmartTextCheckerProxy;
use Proxy\SmartTextReaderLocker;

echo "<h2>Adapter</h2>";

$logger = new Logger();
$logger->log("Це звичайне повідомлення");
$logger->error("Це помилка");
$logger->warn("Це попередження");

echo "\nТестуємо файловий логер...\n";

$fileLogger = new FileLoggerAdapter(new FileWrite("./Adapter/log.txt"));

$fileLogger->log("Це звичайне повідомлення у файлі");
$fileLogger->error("Це помилка у файлі");
$fileLogger->warn("Це попередження у файлі");

echo "\n<h2>Decorator\n</h2>";


$hero1 = new Warrior('Omniman', 2000, 1500, 900);
$hero2 = new Mage('Jason Adenuga', 800, 3000, 200);
$hero3 = new Paladin('Invisible', 1000, 2000, 1000);


$hero1 = new FireSword($hero1);
$hero1 = new IronArmor($hero1);

$hero2 = new FireSword($hero2);
$hero2 = new HealingPotion($hero2);

$hero3 = new FireSword($hero3);
$hero3 = new BootsOfSpeed($hero3);
$hero3 = new IronArmor($hero3);


echo $hero1->getDescription() . "<br><br>";
echo $hero2->getDescription() . "<br><br>";
echo $hero3->getDescription() . "<br><br>";


echo "<br><h2>Bridge</h2><br>";

$raster = new Raster();
$vector = new Vector();

$circle = new Circle(10, "red", $raster);
$square = new Square(5, "blue", $vector);
$triangle = new Triangle(6, 8, "green", $raster);

echo $circle->draw() . "<br><br>";
echo $square->draw() . "<br><br>";
echo $triangle->draw() . "<br><br>";

echo "<br><h2>Proxy</h2><br>";

$path = 'Proxy/example.txt';

$checker = new SmartTextCheckerProxy($path);

print_r($checker->readTo2DArray());

echo "<br>";

$allowAll = new SmartTextReaderLocker($path);

print_r($allowAll->readTo2DArray());

echo "<br>";

$allowOnlyTmp = new SmartTextReaderLocker($path, '/\.tmp$/');

print_r($allowOnlyTmp->readTo2DArray());

echo '<br><h2>Composite</h2><br>';

$ul = new LightElementNode('ul');
$ul->addClass('my-list');

$li1 = new LightElementNode('li');
$li1->addChild(new LightTextNode('First level product'));

$ul2 = new LightElementNode('ul');

$li2 = new LightElementNode('li');
$li2->addChild(new LightTextNode('Second level product'));


$ul->addChild($li1);
$ul->addChild($ul2);
$ul2->addChild($li2);

echo "OUTER HTML\n";
echo $ul->getOuterHTML();

echo "\n\n INNER HTML \n";
echo $ul->getInnerHTML();


function convertTextToLightHTML(string $text): LightElementNode {
    $lines = explode("\n", $text);
    $container = new LightElementNode('div');

    foreach ($lines as $index => $line) {
        if (trim($line) === '') continue;

        if ($index === 0) {
            $el = new LightElementNode('h1');
        }
        elseif (preg_match('/^\s/', $line)) {
            $el = new LightElementNode('blockquote');
        }
        elseif (strlen(trim($line)) < 20) {
            $el = new LightElementNode('h2');
        }
        else {
            $el = new LightElementNode('p');
        }

        $el->addChild(new LightTextNode($line));
        $container->addChild($el);
    }


    return $container;
}


//$bookText = file_get_contents('Composite/book.txt');
//
//$startMemory = memory_get_usage();
//
//$lightHTML = convertTextToLightHTML($bookText);
//$output =  $lightHTML->getOuterHTML();
//
//$endMemory = memory_get_usage();
//
//echo "\n\nВикористано памʼяті: " . round(($endMemory - $startMemory) / 1024) .  " KB";
//echo "\nУнікальних flyweight обʼєктів: " . MetaDataFlyweightFactory::getCount() . "\n";
//
//echo $output;


echo "<h1>Observer</h1><br>";

$div = new LightElementNode('p');
$div->addChild(new LightTextNode('Hello world!'));

$clickListener = new ClickListener();
$hoverListener = new MouseOverListener();

$div->addEventListener('click', $clickListener);
$div->addEventListener('mouseover', $hoverListener);

$div->dispatchEvent('click');
$div->dispatchEvent('mouseover');


