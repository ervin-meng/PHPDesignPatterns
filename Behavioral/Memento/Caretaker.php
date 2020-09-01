<?php
namespace PHPDesignPatterns\Behavioral\Memento;

class Caretaker
{
    protected $memento;

    public function setMemento(Memento $memento)
    {
        $this->memento = $memento;
    }

    public function getMemento()
    {
        return $this->memento;
    }
}