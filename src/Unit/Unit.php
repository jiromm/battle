<?php

namespace Jiromm\Battle\Unit;

abstract class Unit
{
    protected $health = 0;
    protected $attack = 0;

    public function defend(int $power)
    {
        $this->health -= $power;

        if ($this->health <= 0) {
            $this->health = 0;
        }
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function getAttack(): int
    {
        return $this->attack;
    }

    public function getName()
    {
        return get_class($this);
    }
}
