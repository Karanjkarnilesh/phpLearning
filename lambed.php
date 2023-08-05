<?php 
//lambed function is used to first stor data into variable and then pass as arguments for the usage in other function or method

$arr=array(2,5,10);

$filter=array_filter($arr,function ($x){return $x>2;});

var_dump($filter);

// function ($y){return $y=4;}
?>