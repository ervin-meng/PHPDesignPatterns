<?php
namespace PHPDesignPatterns\Behavioral\Command;

class Invoker
{
    public function runCommand(AbstractCommand $command)
    {
        $command->execute();
    }
}