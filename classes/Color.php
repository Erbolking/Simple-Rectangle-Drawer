<?php

namespace Erbolking;

class Color
{
    /**
     * @var int $red
     */
    protected $red;

    /**
     * @var int $green
     */
    protected $green;

    /**
     * @var int $blue
     */
    protected $blue;

    /**
     * @param $red
     * @param $green
     * @param $blue
     */
    public function __construct($red, $green, $blue) {
        $this->red = (int) $red;
        $this->green = (int) $green;
        $this->blue = (int) $blue;
    }

    /**
     * @return string
     */
    public function getRgbSnippet() {
        return "rgb({$this->red}, {$this->green}, {$this->blue})";
    }
}