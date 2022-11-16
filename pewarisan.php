<?php

require_once 'robot.php';

//pewarisan inheritance

class robot_hewan extends robot{

    public function get_kekuatan(){
        echo 'saya hewan laut bisa berenang...';
    }
}

?>