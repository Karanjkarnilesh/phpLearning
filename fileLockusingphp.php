<?php
$php_errormsg="Error to lock a file";
$write="loram /dknfkdfj sldmf/d/mkfldsmflsd,fndfnd gkj ero e errlglkjgl d";
$fh=fopen('text.txt','a') or die($php_errormsg);

if(flock($fh,LOCK_EX))
{
   
fwrite($fh,$write) or die($php_errormsg);
fflush($fh) or die($php_errormsg);
flock($fh,LOCK_UN);
}
fclose($fh) or die($php_errormsg);
?>