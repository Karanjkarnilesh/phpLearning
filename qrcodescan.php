<?php
include('phpqrcode/qrlib.php');
$codeContent=rand(100000,99999999);
$dir='/nilesh/'.$codeContent.'.png';
QRcode::png('pragati',false,QR_ECLEVEL_L,7,8);

?>