<?php

// require_once 'robot.php';
// require_once 'hewan.php';
// require_once 'orang.php';

// $robot = new robot_hewan("Ngik Ngok",30);
// echo $robot->testing();
// echo $robot1->berat_robot();
// echo 'Suara Robotnya : '.$robot1->suara.' Beratnya : '.$robot1->berat;

//Static
// echo orang::$suara;

//autoload
spl_autoload_register(function($classname){
  include $classname.'.php';
});

$robot = new robot('testing', 10);
$robot->set_suara('Siyaap')->set_berat(100);
echo $robot->suara." - ".$robot->berat
?>
