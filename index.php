<?php

include 'classloader.php';

$robotFactory = new \App\Factories\RobotFactory();

$robotFactory->addType(new \App\Robots\Robot1());
$robotFactory->addType(new \App\Robots\Robot2());

$robot1 = $robotFactory->createRobot1(5);
$robot2 = $robotFactory->createRobot2(2);

$mergeRobot = new \App\Robots\MergeRobot();

$mergeRobot->mergerRobots($robot1);
$mergeRobot->mergerRobots($robot2);

$robotFactory->addType($mergeRobot);

$resultRobot = $robotFactory->createMergeRobot();

echo $resultRobot->getWeight() . "\n";
echo $resultRobot->getSpeed() . "\n";
