<?php

namespace Jiromm\Battle;

class Power
{
    protected $power;

    public function __construct(int $power)
    {
        $this->power = $power;
    }

    public function get(): int
    {
        return $this->power;
    }
}
