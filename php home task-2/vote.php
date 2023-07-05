<?php
function check_vote() 
{
    $name = "Siva";
    $age = 22;
    if ($age >= 18) {
        echo $name . " is eligible to vote";
    } else {
        echo $name . " is not eligible to vote. ";
    }
}
check_vote(); 
?>