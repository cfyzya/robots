<?php

namespace App\Factories;

use App\Robots\AbstractRobot;
use http\Exception\UnexpectedValueException;

class RobotFactory
{
    private array $_availableTypes = [];

    public function addType(AbstractRobot $robot)
    {
        $this->_availableTypes[get_class($robot)] = $robot;
    }

    public function __call($name, $arguments)
    {
        $createPos = strpos($name, 'create');
        if ($createPos !== false) {
            $typeNameSpace = 'App\Robots\\' . str_replace('create', '', $name);
            foreach ($this->_availableTypes as $namespace => $availableType){
                if ($typeNameSpace == $namespace) {
                    $count = array_shift($arguments) ?? 1;
                    if ($count && gettype($count) !== 'integer') {
                        throw new \UnexpectedValueException('Count should be integer');
                    }
                    $result = [];
                    for ($i=0; $i < $count; $i++){
                        $result[] = clone($availableType);
                    }
                    return count($result) == 1 ? $result[0]: $result;
                }
            }
            throw new \UnexpectedValueException('this robot type unavailable');
        }
        throw new \BadFunctionCallException();
    }

}