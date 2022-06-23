<?php
echo"param<br>";
$arr=array("param"=>18,"deepanshu"=>17,"bro"=>3);
krsort($arr);
foreach($arr as $x=>$x_value)
{
	echo "key=".$x.",value=".$x_value;
	echo"<br>";
}
?>