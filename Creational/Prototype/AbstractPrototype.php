<?php
namespace PHPDesignPatterns\Creational\Prototype;

abstract class AbstractPrototype
{
    protected $status = 0;

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    abstract function __clone();
}