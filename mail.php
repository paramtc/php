<?php
$to="xyz@gmail.com";
$from="abc@gmail.com";
$subject="hello";
$header="from:$from";
if(mail($to,$from,$subject,$header))
{
	echo"mail sent";
}
else
{
	echo"mail not sent";
}
?>