<?php
namespace DesignPatterns\Structural\Composite;

class Composite extends AbstractComponent
{
    protected $components = [];

    public function render()
    {
        foreach($this->components as $component) {
            $component->render();
        }
    }

    public function addComponent(AbstractComponent $component)
    {
        $this->components[get_class($component)] = $component;
    }
}