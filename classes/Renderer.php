<?php

namespace Erbolking;

use Erbolking\Components\ComponentAbstract;

class Renderer
{
    /**
     * @var array $components
     */
    protected $components;

    /**
     * @param array $components
     * @desc array of Component
     */
    public function __construct(array $components) {
        $this->components = $components;
    }

    /**
     * @desc render Components
     */
    public function render() {
        foreach ($this->components as $component) {
            if ($component instanceof ComponentAbstract) {
                $component->render();
            }
        }
    }
}