<?php

// static adalah cara memanggil fungsi/property tanpa membuat objek sebelumnya
require_once 'robot.php';
require_once 'hewan.php';
require_once 'orang.php';

// orang::bersuara();
echo orang::bersuara();

// $robot = new robot('ngik ngok',20);
// echo $robot->testing();


// $robot1 = new robot('ngik ngik ngok',20);
// $robot1->set_berat(30);
// echo 'beratnya..' . $robot1->get_berat(),'<br>';

// $robothewan = new robot_hewan('hoaxxxx',10);
// echo $robothewan->get_kekuatan();



?>

