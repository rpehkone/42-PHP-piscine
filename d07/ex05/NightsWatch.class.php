<?php
class NightsWatch
{
	private $members;

	public function recruit($name)
	{
		$this->members[] = $name;
	}
	public function fight()
	{
		foreach ($this->members as $fighter)
		{
			if ($fighter instanceof IFighter)
				$fighter->fight();
		}
	}
}
?>
