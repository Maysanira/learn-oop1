<?php
// class
class robot{


    // property
    public $suara;
    public $berat;

// metode set && metode get

public function set_suara($suara){//set untuk men setting
$this->suara = $suara;
}

public function get_suara(){//get untuk mengambil
    return $this->suara;
}



}
$robot1 = new robot;
$robot2 = new robot;

$robot1->set_suara('ngik ngik ngok');
$robot1->set_suara('ngik ngik ngok nguk');
echo 'bunyinya..' . $robot1->get_suara();

$robot2->set_suara('tik tok tik tok');
echo 'bunyinya..' . $robot2->get_suara();


?>