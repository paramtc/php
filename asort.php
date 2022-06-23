<?php
echo"swati<br>";
$arr=array("param"=>18,"deepanshu"=>17,"bro"=>3);
asort($arr);
foreach($arr as $x=>$x_value)
{
	echo "key=".$x.",value=".$x_value;
	echo"<br>";
}
?>