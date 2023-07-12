<?php

class Calculator{
private $_ss,$_dar;
public function __construct( $ss, $dar ) {
$this->_ss=$ss;
$this->_dar=$dar;
    }
    public function add(){
        return $this->_ss+$this->_dar;
       }
    public function subtract() {
        return $this->_ss - $this->_dar;
        }
    public function multiply() {
        return $this->_ss* $this->_dar;
        }
    public function divide() {
        return $this->_ss/ $this->_dar;
        }
    }
    $calc = new Calculator(20, 10); 
    echo $calc-> add()."<br><br>"; 
    echo $calc-> multiply()."<br><br>"; 
    echo $calc-> subtract()."<br><br>"; 
    echo $calc-> divide()."<br><br>"; 
?>