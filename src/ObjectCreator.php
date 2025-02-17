<?php

namespace Adelfenin\OtusTask;

use Adelfenin\OtusTask\MonkeyClass;

class ObjectCreator
{
    /**
     * @var int
     */
    protected static $monkeyNumber = 1;

    /**
     * @return MonkeyClass
     */
    public static function make()
    {
        $monkeyClass = new MonkeyClass(self::$monkeyNumber);

        self::$monkeyNumber++;

        return $monkeyClass;
    }
}