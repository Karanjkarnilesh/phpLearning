<?php
$limit=100;
$i=2;
$div=2;
for($i;$i<$limit;$i++)
{

    if($i>$limit)
    {
        break;
    }
    for ($j=2; $j<$i ; $j++) { 
        if($j>sqrt($i))
        {
            echo $i." "; 
            break;
        }
        if($i%$div==0)
        {
break;
        }

    }
}

?>