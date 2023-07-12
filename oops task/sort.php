<?php

class sortClass{
  private $arrayPassed = [];
  public function __construct(array $arrayPassed){
    $this->arrayPassed = $arrayPassed;
  }

  public function sort() {
    sort($this->arrayPassed);
    return $this->arrayPassed;
  }
}

$newarray = array(11,-2,4,35,0,8,-9);

$sortClass =  new sortClass($newarray);

print_r($sortClass->sort());

?>