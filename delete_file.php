<?php
$file="file.txt";
if(file_exists($file))
{
	echo readfile($file);
	unlink("copy1.txt");
}
else
{
	echo "file not exist";
}
?>