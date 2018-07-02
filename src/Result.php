<?php

namespace Jiromm\Battle;

class Result
{
    protected $winner;

    public function __construct(Army $army1, Army $army2)
    {
//        echo sprintf('Total Health: %s - %s', $army1->getTotalHealth(), $army2->getTotalHealth()) . PHP_EOL;

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
