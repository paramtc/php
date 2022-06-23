<?php
echo"param<br>";
$email = "paramjeet008130.com";
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === true) 
{
	echo("$email is a valid email address");
} else 
{
	echo("$email is not a valid email address");
}
?>