<?php

function fun()
{
    static $count=1;
    $count+=1;
echo $count;
fun();
}



?>