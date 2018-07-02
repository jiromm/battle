<?php

namespace Jiromm\Battle\Tactics;

use Jiromm\Battle\Army;
use Jiromm\Battle\Unit\Unit;

class StrongestFirstTactics implements TacticsInterface
{
    public function strike(Army $army1, Army $army2): bool
    {
        /**
         * @var \SplHeap $heap1
         * @var \SplHeap $heap2
         * @var Unit $source
         * @var Unit $target
         */
        list($heap1, $heap2) = $this->arrangeArmies($army1, $army2);

        $source = $heap1->current();
        $target = $heap2->current();

        if (!$source->getHealth()) {
            return false;
        }

        if (!$target->getHealth()) {
            return false;
        }

        $target->defend($source->getAttack());

        return true;
    }

    public function arrangeArmies(Army $army1, Army $army2): array
    {
        $heap1 = new MaxHealthHeap();
        $heap2 = new MaxHealthHeap();

        foreach ($army1->getUnits() as $unit) {
            $heap1->insert($unit);
        }

        foreach ($army2->getUnits() as $unit) {
            $heap2->insert($unit);
        }

        $heap1->top();
        $heap2->top();

        return [$heap1, $heap2];
    }
}
