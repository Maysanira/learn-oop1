<?php

require_once 'robot.php';

$robot1 = new robot('ngik ngik ngok',20);
$robot2 = new robot('tik tok tik tok',30);

$robot1->set_berat(30);
echo 'beratnya..' . $robot1->get_berat(),'<br>';
echo 'bunyinya..' . $robot2->get_suara();

?>