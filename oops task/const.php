<?php
class student {
     function __construct(){
            echo "I'm a Desgine, ";
            $this->name = "siva ";
        }
        function __destruct(){
            echo "Im a Developer. " ;
            $this->name ="Gokul";
        }
    }
$obj = new student();
?>