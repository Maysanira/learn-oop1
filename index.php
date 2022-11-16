<?php


// require_once 'robot.php';

$robot1 = new robot;
$robot2 = new robot;

$robot1->set_suara('ngik ngik ngok');
$robot1->set_suara('ngik ngik ngok nguk');
echo 'bunyinya..' . $robot1->get_suara();

$robot2->set_suara('tik tok tik tok');
echo 'bunyinya..' . $robot2->get_suara();


?>



