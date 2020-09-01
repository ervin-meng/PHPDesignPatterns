<?php
namespace DesignPatterns\Behavioral\Memento;

class Originator
{
    public $state;

    public function createMemento()
    {
        $memento = new Memento();
        $memento->setState($this->state);

        return $memento;
    }

    public function loadMemento(Memento $memento)
    {
        $state = $memento->getState();

        $this->state = $state;
    }
}