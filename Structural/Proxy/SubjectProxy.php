<?php
namespace DesignPatterns\Structural\Proxy;

class SubjectProxy extends AbstractSubject
{
    public function resolveRequest()
    {
        /** @var  $subject AbstractSubject*/
        $subject = $this->selectSubject();
        $subject->resolveRequest();
    }

    public function selectSubject()
    {

    }
}