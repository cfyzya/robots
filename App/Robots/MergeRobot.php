<?php

namespace App\Robots;

class MergeRobot extends AbstractRobot
{
    public function __construct()
    {
        $this->_weight = 0;
        $this->_speed = 0;
        $this->_height = 0;
    }

    public function mergerRobots(array $robots)
    {
        foreach ($robots as $robot) {
            $this->_weight += $robot->getWeight();
            $this->_height += $robot->getHeight();
            $this->_speed = $this->_speed == 0 || $robot->getSpeed() < $this->_speed ? $robot->getSpeed() : $this->_speed;
        }
    }
}