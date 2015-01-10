<?php

namespace Erbolking\Components;

use Erbolking\Color;

abstract class ComponentAbstract
{
    /**
     * @var Color $color
     */
    protected $color;

    /**
     * @var int $width
     */
    protected $width;

    /**
     * @var int $height
     */
    protected $height;

    /**
     * @var array $styles
     */
    protected $styles = array();

    /**
     * @return mixed
     */
    public abstract function render();

    /**
     * @param $styleName
     * @param $styleValue
     * @param string $measure
     */
    protected function pushStyle($styleName, $styleValue, $measure = '') {
        $this->styles[] = $styleName . ':' . $styleValue . $measure;
    }

    /**
     * @return string
     */
    protected function getJoinedStyles() {
        $inlineStyles = '';
        if ($this->styles) {
            $inlineStyles = join('; ', $this->styles);
        }
        return $inlineStyles;
    }
}