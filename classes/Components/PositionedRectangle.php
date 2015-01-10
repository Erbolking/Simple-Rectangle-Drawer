<?php

namespace Erbolking\Components;

use Erbolking\Color;

class PositionedRectangle extends Rectangle
{
    /**
     * @var int $top
     */
    protected $top;

    /**
     * @var int $left;
     */
    protected $left;

    /**
     * @param Color $color
     * @param $width
     * @param $height
     * @param $top
     * @param $left
     */
    public function __construct(Color $color, $width, $height, $top, $left) {
        parent::__construct($color, $width, $height);
        $this->top = $top;
        $this->left = $left;
    }

    /**
     * render Positioned Rectangle
     */
    public function render() {
        $this->pushStyle('position', 'absolute');
        $this->pushStyle('top', $this->top, 'px');
        $this->pushStyle('left', $this->left, 'px');
        parent::render();
    }
}