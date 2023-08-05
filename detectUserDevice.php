<?php
$is_mobile=false;
$iphone=strpos($_SERVER['HTTP_USER_AGENT'],'iPhone');
$android=strpos($_SERVER['HTTP_USER_AGENT'],'Android');
$webos=strpos($_SERVER['HTTP_USER_AGENT'],'webOS');
$blkberry=strpos($_SERVER['HTTP_USER_AGENT'],'Blackberry');
$ipod=strpos($_SERVER['HTTP_USER_AGENT'],'iPod');

if($iphone || $android|| $webos || $blkberry || $ipod==true)
{
   $is_mobile=true;
}else{
    $is_mobile=false;
}
?>