<?php
$file="file.txt";
if(file_exists($file))
{
	echo readfile($file);
	copy($file,"copy.txt");
}
Else
{
	echo "file not exist";
}
?>