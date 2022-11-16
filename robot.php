<?php
// class
class robot{


    // property
    public $suara;
    public $berat;

// konstruktor
public function __contruct($suara,$berat){
    $this->suara = $suara;
    $this->berat = $berat;
}


// metode set && metode get

public function set_suara($suara){//set untuk men setting
$this->suara = $suara;
    }

public function get_suara(){//get untuk mengambil
    return $this->suara;
    }
public function get_berat(){//get untuk mengambil
    return $this->berat;
    }
}


?>