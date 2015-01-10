<?php

use Erbolking\Components\Rectangle;
use Erbolking\Components\BorderedRectangle;
use Erbolking\Components\PositionedRectangle;
use Erbolking\Color;
use Erbolking\Renderer;

require 'classes/Components/ComponentAbstract.php';
require 'classes/Components/Rectangle.php';
require 'classes/Components/PositionedRectangle.php';
require 'classes/Components/BorderedRectangle.php';
require 'classes/Color.php';
require 'classes/Renderer.php';

// 1. just rectangle
$color = new Color(127, 0, 0);
$rect = new Rectangle($color, 100, 100);

// 2. bordered rectangle
$color2 = new Color(100, 100, 100);
$borderColor = new Color(125, 150, 175);
$borderedRect = new BorderedRectangle($color2, 100, 100, $borderColor);

// 3. positioned rectangle
$color3 = new Color(200, 200, 200);
$positionedRect = new PositionedRectangle($color3, 100, 100, 8, 120);

// 4. positioned rectangle 2
$color4 = new Color(255, 60, 60);
$positionedRect2 = new  PositionedRectangle($color4, 100, 100, 112, 120);

// render all components
$renderer = new Renderer(array($rect, $borderedRect, $positionedRect, $positionedRect2));
$renderer->render();