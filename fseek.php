<?php
$file=fopen("file.txt","r");
echo fgets($file);
echo ftell($file);
echo fseek($file,15); //cursor_reset
echo ftell($file); //cursor_position_output
?>