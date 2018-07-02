<?php

namespace Jiromm\Battle;

use Jiromm\Battle\Exceptions\ConsoleHandlerException;

class ConsoleHandler
{
    public static function getConfig(array $argv)
    {
        if (count($argv) < 3) {
            throw new ConsoleHandlerException('Console arguments are missing');
        }

        return array_slice($argv, 1, 2);
    }
}
