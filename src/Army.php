<?php

namespace Jiromm\Battle;

use Jiromm\Battle\Tactics\TacticsInterface;
use Jiromm\Battle\Unit\Unit;

class Army
{
    /**
     * @var array|Unit[]
     */
    protected $units = [];
    protected $name;
    protected $tactics;

    public function __construct(string $name, TacticsInterface $tactics)
    {
        $this->name = $name;
        $this->tactics = $tactics;
    }

    public function add(Unit $unit)
    {
        $this->units[] = $unit;
    }

    public function strike(Army $army): bool
    {
        return $this->tactics->strike($this, $army);
    }

    public function getUnits(): array
    {
        return $this->units;
    }

    public function getName(): string
    {
        return $this->name;
    }
    
    public function getTotalHealth(): int
    {
        $totalHealth = 0;

        foreach ($this->units as $unit) {
            $totalHealth += $unit->getHealth();
        }

        return $totalHealth;
    }

}
