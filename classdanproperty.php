<?php
// class
class robot{


    // property
    public $suara = 'ngik ngik';
    public $berat = 30;
}

$robot1 = new robot;

//var_dump($robot1); //untuk melihat isi dari $robot1
echo 'suara robotnya ...'. $robot1->suara.'beratnya'.$robot1->berat;



?>