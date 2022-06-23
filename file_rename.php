<?php
$file="file.txt";
if(file_exists($file))
{
	echo readfile($file);
	rename("copy.txt","copy1.txt");
}
Else
{
	echo "file not exist";
}
?>