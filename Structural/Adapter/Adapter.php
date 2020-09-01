<?php
namespace DesignPatterns\Structural\Adapter;

class Adapter extends Target
{
    public function sayInChinese(Adaptee $adaptee)
    {
        $adaptee->sayInEnglish();
    }
}