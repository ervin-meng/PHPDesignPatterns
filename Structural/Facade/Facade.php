<?php
namespace PHPDesignPatterns\Structural\Facade;

class Facade
{
    public function run()
    {
        $systemA = new SystemA();
        $systemB = new SystemB();

        $systemA->methodA();
        $systemB->methodB();
    }
}