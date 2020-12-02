<?php
class Tyrion extends Lannister
{
	public function sleepWith($name)
	{
		if ($name instanceof Sansa)
			echo "Let's do this.\n";
		else if ($name instanceof Lannister)
			echo "Not even if I'm drunk !\n";
	}
}
?>
