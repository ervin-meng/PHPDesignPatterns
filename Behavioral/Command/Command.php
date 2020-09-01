<?php
namespace PHPDesignPatterns\Behavioral\Command;

class Command extends  AbstractCommand
{
    public function execute()
    {
        $this->receiver->processCommand();
    }
}