<?php
namespace PHPDesignPatterns\Structural\Decorator;

abstract class AbstractDecorator extends AbstractComponent
{
    protected $component;

    abstract public function render();

    public function __construct(AbstractComponent $component)
    {
        $this->component = $component;
    }
}