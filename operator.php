<html>
<?php
echo"hello param <br/>";
echo"OPERATORS <br/>";
echo"1.Arithmatic Operators <br/>";
echo"variables <br/>";
$a=20;
$b=10;
$c=30;
$sum=$a+$b;
$sub=$a-$b;
$multi=$a*$b;
$divi=$a/$b;
$mod=$a%$b;
echo"sum=".$sum."<br/>";
echo"sub=".$sub."<br/>";
echo"multi=".$multi."<br/>";
echo"divi=".$divi."<br/>";
echo"mod=".$mod."<br/>";
echo"2.Increment Operators <br/>";
echo"Pre- Increment=".++$a." <br/>";
echo"Post Increment=".$a++."<br/>";
echo"3.Decrement Operators <br/>";
echo"Pre- Decrement=".--$b." <br/>";
echo"Post Decrement=".$b--."<br/>";
echo"Relational Operator <br/>";
if($a>$b)
{
	echo"the variable a is greater than b <br/>";
}
else
{
	echo"the variable b is greater than a<br/>";
}
if($a<$b)
{
	echo"the variable a is greater than b <br/>";
}
else
{
	echo"the variable b is greater than a<br/>";
}
if($a>=$b)
{
	echo"the variable a is greater than b <br/>";
}
else
{
	echo"the variable b is greater than a<br/>";
}
if($a<=$b)
{
	echo"the variable a is greater than b <br/>";
}
else
{
	echo"the variable b is greater than a<br/>";
}
echo"Logical Operator <br/>";
if($a>$b && $b>$c)
{
	echo"a is greatest <br/>";
}
else
{
	echo"c is greatest <br/>";
}
if($a>$b || $b>$c)
{
	echo"a is greatest <br/>";
}
else
{
	echo"c is greatest <br/>";
}
echo"Comparision Operators<br/>";
if($a==20)
{
	echo"a is equal to 20 <br/>";
}
else
{
	echo"a is with another value<br/>";
}
?>
</html>