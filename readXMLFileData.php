<?php
$students=simplexml_load_file('students.xml');
foreach($students as $student)
{
    echo $student->age;
    echo "<br>";
}




?>