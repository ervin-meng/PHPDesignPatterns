<?php
namespace DesignPatterns\Creational\Prototype;

class Prototype extends AbstractPrototype
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

    public function __clone()
    {

    }
}