<?php
namespace PHPDesignPatterns\Behavioral\Mediator;

class ColleagueB extends  AbstractColleague
{
    public function methodA()
    {
        $this->mediator->methodA();
    }

    public function methodB()
    {

    }
}