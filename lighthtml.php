<?php

use Composite\LightElementNode;
use Composite\LightTextNode;
use Composite\State\CollapsedState;
use Composite\State\HiddenState;
use Composite\State\VisibleState;
use Composite\Template\JsonSerializer;
use Composite\Template\MarkDownSerializer;

$div = new LightElementNode('div');
$div->addClass('container');
$div->addChild(new LightTextNode('State test!'));

// expected - empty
$div->setState(new HiddenState());
echo $div->getOuterHTML();

// expected - <div class="container">State test!</div>
$div->setState(new VisibleState());
echo $div->getOuterHTML();

// expected - <div class="container"></div>
$div->setState(new CollapsedState());
echo $div->getOuterHTML();


$div = new LightElementNode('div');
$h1 = new LightElementNode('h1');
$h1->addChild(new LightTextNode('Hello World'));
$div->addChild($h1);

$JsonSerializer = new JsonSerializer();
echo $JsonSerializer->serialize($div);

$MarkDownSerializer = new MarkDownSerializer();
echo $MarkDownSerializer->serialize($div);