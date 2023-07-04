<?php
function Palindrome($string)
{
  if(strrev($string)==$string)

  {
     return 1;
     }
     else{
         return 0;
     }
}
$car= "mom";
if(palindrome ($car)){
    echo "palindrome<br>";
}
else{
    echo "not a palindrome";
}
$words= array("madam","hello","wow",121,1233); 
foreach($words as $w){
     if(strrev($w)==$w){   
		echo $w." is a Palindrome.<br>";   
	}  
	else {   
		echo $w." is not a Palindrome.<br>";   
	} 
}
?>