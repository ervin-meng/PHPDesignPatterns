<?php
namespace PHPDesignPatterns\Behavioral\Memento;

class Memento
{
    public $state;

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }
}