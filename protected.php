<?php
class cal
{
	protected $a,$b,$c;
	function sum()
	{
	$this->c=$this->a+$this->b;
	return $this->c;
	}
	function mul()
	{
	$this->c=$this->a*$this->b;
	return $this->c;
	}
}
class b extends  cal
{
	protected function sum();
	protected function mul();
}
$c1=new cal();
$c1->a=10;
$c1->b=20;
echo "sum",$c1->sum();
echo $c1->mul();
$c2=new cal();
$c2->a=20;
$c2->b=30;
echo $c2->sum();
echo $c2->mul();
?>