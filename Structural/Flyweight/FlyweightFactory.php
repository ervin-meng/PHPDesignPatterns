<?php
namespace PHPDesignPatterns\Structural\Flyweight;

class FlyweightFactory
{
    protected $flyweights = [];

    public function getFlyweight($externalState)
    {
        if (!isset($this->flyweights[$externalState])) {
            $this->flyweights[$externalState] = new Flyweight($externalState);
        }

        return $this->flyweights[$externalState];
    }
}