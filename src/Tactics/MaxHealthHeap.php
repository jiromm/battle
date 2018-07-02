<?php

namespace Jiromm\Battle\Tactics;

use Jiromm\Battle\Unit\Unit;

class MaxHealthHeap extends \SplMaxHeap
{
    /**
     * @param Unit $value1
     * @param Unit $value2
     * @return int
     */
    public function compare($value1, $value2)
    {
        return $value1->getHealth() - $value2->getHealth();
    }
}
