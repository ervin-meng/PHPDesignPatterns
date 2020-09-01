<?php
namespace DesignPatterns\Behavioral\Mediator;

class ColleagueA extends  AbstractColleague
{
    public function methodA()
    {

    }

    public function methodB()
    {
        $this->mediator->methodB();
    }
}