<?php

$ip=$_SERVER['REMOTE_ADDR'];
$ip_info = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
if($ip_info && $ip_info->geoplugin_countryName !=NULL)
{
    echo "data Found";
}
else{
    echo "not Found";
}


?>