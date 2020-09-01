<?php
namespace DesignPatterns\Behavioral\Mediator;

abstract class AbstractMediator
{
    public function __construct(ColleagueA $colleagueA, ColleagueB $colleagueB)
    {
        $this->colleagueA = $colleagueA;
        $this->colleagueB = $colleagueB;
    }
}