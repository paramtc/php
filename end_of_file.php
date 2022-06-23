<html>
<?php
echo"<ol>";
$file=fopen("file.txt","r");
while(!feof($file))
{
	$line=fgets($file);
	echo $line;
	echo"<br>";
}
echo"<li>";
echo"</ol>";
?>
</html>