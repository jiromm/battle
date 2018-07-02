<?php

namespace Jiromm\Battle;

class Battle
{
    protected $army1;
    protected $army2;
    protected $turn;

    public function __construct(Army $army1, Army $army2)
    {
        $this->army1 = $army1;
        $this->army2 = $army2;

        $this->turn = $army1;
    }

    public function fight(): Result
    {
        do {
            if ($this->isTurn($this->army1)) {
                $result = $this->army1->strike($this->army2);

                if (!$result) {
                    break;
                }

                $this->turn = $this->army2;
            } else {
                $result = $this->army2->strike($this->army1);

                if (!$result) {
                    break;
                }

                $this->turn = $this->army1;
            }
        } while (true);

        return new Result($this->army1, $this->army2);
    }

    private function isTurn(Army $army): bool
    {
        return $this->turn === $army;
    }
}
