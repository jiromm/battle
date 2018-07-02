<?php

namespace Jiromm\Battle;

class Result
{
    protected $winner;

    public function __construct(Army $army1, Army $army2)
    {
        if ($army1->getTotalHealth()) {
            $this->winner = $army1;
        } elseif ($army2->getTotalHealth()) {
            $this->winner = $army2;
        }
    }

    public function __toString()
    {
        if (is_null($this->winner)) {
            return sprintf('Draw');
        }

        return sprintf('Winner is Army %s', $this->winner->getName()) . PHP_EOL;
    }
}
