<?php
class Foo
{
	function foo()
	{
		if (isset($this)) 
			{
				echo '$this está definida (';
				echo get_class($this);
				echo ")\n";
			} 
		else 
			{
			echo "\$this no está definida.\n";
			}
	}
}