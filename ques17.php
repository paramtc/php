<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "param singh\n";
fwrite($myfile, $txt);
$txt = "ramzy randhawaz\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
