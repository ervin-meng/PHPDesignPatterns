<?php
namespace DesignPatterns\Behavioral\Command;

abstract class AbstractCommand
{
    /**
     * @var Receiver
     */
    protected $receiver;

    abstract public function execute();
}