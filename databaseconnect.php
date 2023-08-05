<?php

$conn=mysqli_connect('localhost','root','','test1');

if($conn->connect_error)
{
    throw new Exception("not connect");
}else{
    echo "connect";
}
?>