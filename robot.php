<?php

class robot{

  //property
  public $suara;
  public $berat;

  //konstruktor
  public function __construct($suara, $berat){
    $this->suara=$suara;
    $this->berat=$berat;
  }

  //Metode Set dan Get
  public function set_suara($suara){
    $this->suara=$suara;
    return $this;
  }

  public function get_suara(){
    return $this->suara;
  }
  public function set_berat($berat){
    $this->berat=$berat;
  }

  public function get_berat(){
    return $this->berat;
  }
  // //metode
  // public function bersuara (){
  //   echo 'suara Robotnya .... '.$this->suara;
  // }
  //
  // public function berat_robot(){
  //   return $this->berat;
  // }

}



 ?>
