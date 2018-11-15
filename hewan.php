<?php

require_once 'robot.php';
// Inheritance || Pewarisan
class robot_hewan extends robot{

  public function get_kekuatan(){
    echo 'Saya Hewan Laut bisa Berenang';
  }

  //overriding
  public function get_suara(){
    return 'suaranyaa ... '.$this->suara;
  }

  public function testing(){
    //Self and Parent
    return Self::get_suara();
  }

}

 ?>
