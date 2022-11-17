<?php
// class
class robot{

// public, metode n property bisa diakses dari mana saja
// protected, hanya bisa diakses oleh kelas yang mewarisi
// private, hanya bisa diakses oleh kelasnya sendiri

    // property
    private $suara;
    public $berat;

// konstruktor= apapun objeknya pasti dipanggil pertama kali
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
public function set_berat($berat){//set untuk men setting
    $this->berat = $berat;
    }
public function get_berat(){//get untuk mengambil
    return $this->berat;
    }
}


?>