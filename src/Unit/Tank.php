<?php

namespace Jiromm\Battle\Unit;

class Tank extends Unit
{
    public function __construct()
    {
        $this->health = 20;
        $this->attack = 10;
    }
}
