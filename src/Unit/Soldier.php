<?php

namespace Jiromm\Battle\Unit;

class Soldier extends Unit
{
    public function __construct()
    {
        $this->health = 2;
        $this->attack = 3;
    }
}
