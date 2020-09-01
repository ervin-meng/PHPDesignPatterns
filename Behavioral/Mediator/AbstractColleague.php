<?php
namespace PHPDesignPatterns\Behavioral\Mediator;

abstract class AbstractColleague
{
    /**
     * @var Mediator
     */
    protected $mediator;

    public function __construct(AbstractMediator $mediator)
    {
        $this->mediator = $mediator;
    }
}