<?php
class loadClass{
    public function percentage($months,$originalNumber){
        $percentageChange = -$months;

//Get 2.25% of 100.
$numberToAdd = ($originalNumber / 100) * $percentageChange;

//Finish it up with some simple addition
$newNumber = $originalNumber + $numberToAdd;

//Result is 102.25
echo "$".number_format($newNumber * 0.0197236);
    }
}
?>