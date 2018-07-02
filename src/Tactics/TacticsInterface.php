<?php

namespace Jiromm\Battle\Tactics;

use Jiromm\Battle\Army;

interface TacticsInterface
{
    public function strike(Army $army1, Army $army2);
}
