<?php
namespace DesignPatterns\Behavioral\Mediator;

class Mediator extends AbstractMediator
{
    /**
     * @var $colleagueA ColleagueA
     */
    protected $colleagueA;
    /**
     * @var $colleagueB ColleagueB
     */
    protected $colleagueB;

    public function methodA()
    {
        $this->colleagueA->methodA();
    }

    public function methodB()
    {
        $this->colleagueB->methodB();
    }
}