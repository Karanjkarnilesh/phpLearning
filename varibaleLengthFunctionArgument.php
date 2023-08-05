<?php


function multplearg(...$args)
{
    $sum=0;
   foreach($args as $arg){

    $sum +=$arg;
    }
    return $sum;
    
}
echo multplearg(1,2,3,4,5);

?>