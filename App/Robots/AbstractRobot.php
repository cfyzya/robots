<?php

namespace App\Robots;

abstract class AbstractRobot
{
    protected float $_weight;
    protected float $_height;
    protected float $_speed;

    public function getWeight(): float
    {
        return $this->_weight;
    }

    public function getSpeed(): float
    {
        return $this->_speed;
    }

    public function getHeight(): float
    {
        return $this->_height;
    }
}