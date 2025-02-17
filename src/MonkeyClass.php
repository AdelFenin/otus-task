<?php

namespace Adelfenin\OtusTask;

final class MonkeyClass
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function eat()
    {
        return "Monkey $this->id: Start eating banana";
    }

    /**
     * @return string
     */
    public function talk()
    {
        return "Monkey $this->id: Start be noisy";
    }
}