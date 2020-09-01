<?php
namespace PHPDesignPatterns\Behavioral\State;

class StateContext implements  AbstractState
{
    /**
     * @var AbstractState
     */
    protected $state;

    public function __construct(AbstractState $state)
    {
        $this->setState($state);
    }

    public function start()
    {
        $this->state->start();

        if (!$this->state instanceof StartedState) {
            $startedState = new StartedState();
            $this->setState($startedState);
        }
    }

    public function end()
    {
        $this->state->end();

        if (!$this->state instanceof EndedState) {
            $endedState = new EndedState();
            $this->setState($endedState);
        }
    }

    public function setState(AbstractState $state)
    {
        $this->state = $state;
    }

    public function getState()
    {

    }
}