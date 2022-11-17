<?php

// method chaining adalah cara menyambungkan 1 metode ke metode yg lain 
// atau memanggil semua metode sekaligus

require_once 'robot.php';
require_once 'hewan.php';
require_once 'orang.php';

$robot = new robot('testing',10);
$robot->set_suara('okey dokey');
$robot->set_berat(15);

echo $robot->suara.' - ' . $robot->berat;



?>