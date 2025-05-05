<?php

use Composite\LightElementNode;
use Composite\LightTextNode;
use Composite\State\CollapsedState;
use Composite\State\HiddenState;
use Composite\State\VisibleState;

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
