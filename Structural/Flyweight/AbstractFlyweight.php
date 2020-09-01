<?php
namespace PHPDesignPatterns\Structural\Flyweight;

abstract class AbstractFlyweight
{
    public $internalState;
    public $externalState;

    abstract public function render();

    public function __construct($externalState)
    {
        $this->externalState = $externalState;
    }
}