<?php
namespace PHPDesignPatterns\Behavioral\ChainOfResponsibility;

abstract class AbstractHandler
{
    protected $nextHandler;

    abstract public function process();

    final public function handleRequest()
    {
        $this->process();

        if ($this->nextHandler instanceof AbstractHandler) {
            $this->nextHandler->handleRequest();
        }
    }
}