<?php

//array functions

//deecleration array 
$name = array();

//index array
$key=[1,2,3,4,5];
$name = array('nilesh', 'nandkishor', 'pratik' , 'pragati', 'manoranjana');
$surname = array(
    'nIlesh' => 'karanjkar',
    'nandkishor' => 'karanj',
    'Pratik' => 'gaikwade',
    'pRAgati' => 'ingle',
    'MAnoranjana' => 'savane',
);
$a = [
    array(
        'name' => 'nilesh',
        'surname' => 'Karanjkar',
        'age' => 26
    ),
    array(
        'name' => 'nandkishor',
        'surname' => 'Karan',
        'age' => 24
    ),
    array(
        'name' => 'pratik',
        'surname' => 'Gaikwade',
        'age' => 26
    ),
    array(
        'name' => 'pragati',
        'surname' => 'ingle',
        'age' => 22
    ),
    array(
        'name' => 'MAnoranjana',
        'surname' => 'savane',
        'age' => 40
    )
    ];




// var_dump(array_change_key_case($name));

/*hanges all keys in an array to lowercase or uppercase*/
// var_dump(array_change_key_case($surname));

/* Splits an array into chunks of arrays  arrgumrent(array,split number) */
//var_dump(array_chunk($surname,2));

/* get the specific value  from multiple array*/
// var_dump(array_column($a,'surname'));

/*combain array as key and value*/
// var_dump(array_combine($key,$name));

/* cound all value in an array */
// var_dump(array_count_values($surname));

/* Flips/Exchanges all keys with their associated values in an array */
// var_dump(array_flip($surname));

/* key exist in array*/
// var_dump(array_key_exists('nilesh',array_change_key_case($surname)));

/* return all keys*/
// var_dump(array_keys($surname));

/*Returns one or more random keys from an array*/
var_dump(array_rand($name));