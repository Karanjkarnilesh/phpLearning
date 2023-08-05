<?php
//remove last char
// $word="Hello world!";
// echo $word."<br>";

// echo substr($word,0,-1);

// reverce string
$string = 'Welcome to ETUTORIALSPOINT';
$strlength=strlen($string);

for($i=$strlength-1;$i>=0;$i--){

echo $string[$i];
}

?>