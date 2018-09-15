<?php

trait abcd{
	public function test()
	{
		echo "this is trait"
;	}
} 
class abc  
{
	use abcd;

}
$obj = new abc;
echo $obj->test();
?>
