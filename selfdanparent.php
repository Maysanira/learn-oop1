<?php


// self::  akan memanggil fungsi yg ada di kelasnya sendiri
// parent::  untuk memanggil nama fungsi 

public function testing(){
    // echo self::get_suara();
    // return self::get_suara();
  return parent::get_suara();
}




?>