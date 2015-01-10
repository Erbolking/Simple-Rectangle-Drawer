Simple Rectangle Drawer
=======================

Demonstration of polymorphism and the fundamentals of object-oriented programming

#### Examples
```php
//example 1 
$color = new Color(127, 0, 0);
$rect = new Rectangle($color, 100, 100);
$rect->render();

//example 2 (Bordered Rectangle)
$color2 = new Color(100, 100, 100);
$borderColor = new Color(125, 150, 175);
$borderedRect = new BorderedRectangle($color2, 100, 100, $borderColor);
$borderedRect->render();

//example 3 (positioned Rectangle)
$color3 = new Color(200, 200, 200);
$positionedRect = new PositionedRectangle($color3, 100, 100, 8, 120);
$positionedRect->render();

//example 4 (render all components)
$renderer = new Renderer(array($rect, $borderedRect, $positionedRect));
$renderer->render();
```
