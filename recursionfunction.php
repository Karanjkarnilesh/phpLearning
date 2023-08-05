<?php

function countnumber($number)
{
    if($number>0)
    {
        print("number is ".$number);
        print("<br>");
        countnumber($number-1);
    }
}
countnumber(10);

?>