<?php

namespace Jiromm\Battle;

require 'vendor/autoload.php';

try {
    list($armyConfig1, $armyConfig2) = ConsoleHandler::getConfig($argv);

    $army1 = ArmyBuilder::build($armyConfig1, [
        'name' => 'One',
    ]);

    $army2 = ArmyBuilder::build($armyConfig2, [
        'name' => 'Two',
    ]);

    $battle = new Battle($army1, $army2);
    $result = $battle->fight();

    echo (string)$result;
} catch (\Throwable $e) {
    echo 'Error! ' . $e->getMessage() . PHP_EOL;
}
