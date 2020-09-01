<?php
namespace DesignPatterns\Structural\Decorator;

class Component extends AbstractComponent
{
    public function render()
    {
        return '组件原有逻辑';
    }
}