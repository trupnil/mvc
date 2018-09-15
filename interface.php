<?php
interface ketul
{
	public function ketul_method();
	public function trupnil_method();
}


class abc implements ketul
{
	public function ketul_method()
	{
		echo "this is ketul";
	}

	public function trupnil_method()
	{
		echo "this is trupnil";
	}

	public function test()
	{
		echo "this is class";
	}

} 
$obj = new abc;
echo $obj->test();
?>