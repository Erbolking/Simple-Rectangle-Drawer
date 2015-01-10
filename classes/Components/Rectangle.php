<?php

namespace Erbolking\Components;

use Erbolking\Color;

class Rectangle extends ComponentAbstract
{
    /**
     * @param Color $color
     * @param $width
     * @param $height
     */
    public function __construct(Color $color, $width, $height) {
        $this->color = $color;
        $this->width = (int) $width;
        $this->height = (int) $height;
    }

    /**
     * render Rectangle
     */
    public function render() {
        $rgbSnippet = $this->color->getRgbSnippet();

        $this->pushStyle('background-color', $rgbSnippet);
        $this->pushStyle('width', $this->width, 'px');
        $this->pushStyle('height', $this->width, 'px');

        $inlineStyles = $this->getJoinedStyles();
        echo '<div style="' . $inlineStyles . '"></div>';
    }
}