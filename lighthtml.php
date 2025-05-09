<?php

use Composite\LightElementNode;
use Composite\LightTextNode;
use Composite\State\CollapsedState;
use Composite\State\HiddenState;
use Composite\State\VisibleState;
use Composite\Template\JsonSerializer;
use Composite\Template\MarkDownSerializer;
use Composite\Visitor\TagDepthTrackerVisitor;


echo "<h2>State</h2>";

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

echo "<h2>Template</h2>";

$div = new LightElementNode('div');
$h1 = new LightElementNode('h1');
$h1->addChild(new LightTextNode('Hello World'));
$div->addChild($h1);

$JsonSerializer = new JsonSerializer();
echo $JsonSerializer->serialize($div);

$MarkDownSerializer = new MarkDownSerializer();
echo $MarkDownSerializer->serialize($div);


echo "<h2>Visitor</h2>";

$div = new LightElementNode('div');
$section = new LightElementNode('section');
$article = new LightElementNode('article');
$p = new LightElementNode('p');
$p->addChild(new LightTextNode('Hello'));

$article->addChild($p);
$section->addChild($article);
$div->addChild($section);

echo $div->getOuterHTML();

$visitor = new TagDepthTrackerVisitor();
$div->accept($visitor);

echo "Max tag depth: " . $visitor->getMaxDepth() . "<br>";
echo "Nodes per depth level:" . "<br>";
foreach ($visitor->getDepthCounts() as $depth => $count) {
    echo "Depth $depth: $count node(s)" . "<br>";
}