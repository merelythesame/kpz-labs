<?php

use Mediator\Aircraft;
use Mediator\CommandCenter;
use Mediator\Runway;
use Memento\TextEditor;

require_once 'autoloader.php';

echo "<h2>Chain of responsibility</h2>";
require_once 'CoR/display.php';

echo "<h2>Mediator</h2>";
$runway1 = new Runway(1);
$runway2 = new Runway(2);

$commandCenter = new CommandCenter([$runway1, $runway2], []);

$aircraft1 = new Aircraft("Boeing 737", $commandCenter);
$aircraft2 = new Aircraft("Airbus A320", $commandCenter);

$commandCenter = new CommandCenter([$runway1, $runway2], [$aircraft1, $aircraft2]);

$aircraft1->requestToLand();
$aircraft2->requestToLand();
$aircraft1->requestToTakeOff();
$aircraft2->requestToTakeOff();

echo "<h2>Memento</h2>";
$editor = new TextEditor();

$editor->write("Some ");
$editor->write("text");

echo "Output: {$editor->getContent()} <br>";

$editor->undo();
echo "Output: {$editor->getContent()} <br>";

$editor->undo();
echo "Output: {$editor->getContent()} <br>";





