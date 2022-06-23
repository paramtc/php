<?php
class emp
{
	public $a,$b,$c;   //data member
	function info()
	{
	$this->c=$this->a+$this->b;
	return $this->c;
	}
	function sall()    //member fun
	{
	$this->c=$this->a*$this->b;
	return $this->c;
	}
}
$emp_info=new emp();
$emp_info->a="param";
$emp_info->b="singh";
$sal=new emp();
$sal->a=20000;
$sal->b=30000;
echo "emp_info 1<br>",$emp_info->a;
echo"<br>";
echo $sal->a;
echo"<br>";
echo "emp_info 2<br>" ,$emp_info->b;
echo"<br>";
echo $sal->b;
?>