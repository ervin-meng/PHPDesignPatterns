<?php
namespace DesignPatterns\Structural\Decorator;

class Decorator extends AbstractDecorator
{
    public function render()
    {
        return $this->component->render().'|装饰器扩展逻辑';
    }
}