<?php
$file=fopen("file.txt","r+");
echo ftruncate($file,10);
fclose($file);
?>