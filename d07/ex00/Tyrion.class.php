<?php
class Tyrion extends Lannister
{
	function __construct()
	{
		parent::__construct();
		echo "My name is Tyrion\n";
	}
	public function getSize()
	{
		return "Short";
	}
}
?>
