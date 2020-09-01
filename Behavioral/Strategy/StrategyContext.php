<?php
namespace DesignPatterns\Behavioral\Strategy;

class StrategyContext
{
    protected $strategy;

    public function __construct(AbstractStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function pullSecret()
    {
        $this->strategy->pullSecret();
    }

    public function pushSecret()
    {
        $this->strategy->pushSecret();
    }
}