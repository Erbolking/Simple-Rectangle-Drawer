<?php

namespace Erbolking\Components;

use Erbolking\Color;

class BorderedRectangle extends Rectangle
{
    /**
     * @var Color $borderColor;
     */
    protected $borderColor;

    /**
     * @param Color $color
     * @param $width
     * @param $height
     * @param $borderColor
     */
    public function __construct(Color $color, $width, $height, Color $borderColor) {
        parent::__construct($color, $width, $height);
        $this->borderColor = $borderColor;
    }

    /**
     * render Bordered Rectangle
     */
    public function render() {
        $rgbSnippet = $this->borderColor->getRgbSnippet();
        $this->pushStyle('border', 'solid ' . $rgbSnippet);
        parent::render();
    }
}