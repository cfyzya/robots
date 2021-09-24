<?php

namespace App\Robots;

class Robot2 extends AbstractRobot
{
    public function __construct()
    {
        $this->_weight = 16.7;
        $this->_speed = 2.6;
        $this->_height = 11;
    }
}