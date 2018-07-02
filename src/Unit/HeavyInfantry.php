<?php

namespace Jiromm\Battle\Unit;

class HeavyInfantry extends Unit
{
    public function __construct()
    {
        $this->health = 5;
        $this->attack = 4;
    }
}
