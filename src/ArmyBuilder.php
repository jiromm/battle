<?php

namespace Jiromm\Battle;

use Jiromm\Battle\Exceptions\ArmyBuilderException;
use Jiromm\Battle\Tactics\StrongestFirstTactics;
use Jiromm\Battle\Unit\HeavyInfantry;
use Jiromm\Battle\Unit\Soldier;
use Jiromm\Battle\Unit\Tank;

class ArmyBuilder
{
    public static function build(string $armyConfig, array $options)
    {
        if (!strlen($armyConfig)) {
            throw new ArmyBuilderException('Army config is wrong');
        }

        $name = uniqid('Army-');
        $tactics = new StrongestFirstTactics();

        if (isset($options['name'])) {
            $name = $options['name'];
        }

        if (isset($options['tactics'])) {
            $tactics = $options['tactics'];
        }

        $army = new Army($name, $tactics);

        for ($i = 0; $i < strlen($armyConfig); $i++) {
            switch ($armyConfig[$i]) {
                case 'S':
                    $unit = new Soldier();
                    break;
                case 'T':
                    $unit = new Tank();
                    break;
                case 'H':
                    $unit = new HeavyInfantry();
                    break;
                default:
                    throw new ArmyBuilderException('Wrong unit');

            }

            $army->add($unit);
        }

        return $army;
    }
}
