<?php
namespace PHPDesignPatterns\Behavioral\Strategy;

abstract class AbstractStrategy
{
    protected $accountId;
    protected $pushKey;
    protected $pullKey;

    abstract public function pullSecret();
    abstract public function pushSecret();

    public function __construct($accountId, $pushKey, $pullKey)
    {
        $this->accountId = $accountId;
        $this->pushKey   = $pushKey;
        $this->pullKey   = $pullKey;
    }
}