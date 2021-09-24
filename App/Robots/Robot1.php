<?php

namespace App\Robots;

class Robot1 extends AbstractRobot
{
    public function __construct()
    {
        $this->_weight = 10.5;
        $this->_speed = 1.6;
        $this->_height = 21;
    }
}