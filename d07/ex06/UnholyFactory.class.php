<?php
class UnholyFactory
{
	private $used = array();

	public function absorb($soldier)
	{
		echo "(Factory ";
		if ($soldier instanceof Fighter)
		{
			$used = 0;
			foreach ($this->used as $prev_soldier)
			{
				if ($prev_soldier->s_type == $soldier->s_type)
					$used = 1;
			}
			if ($used)
				echo "already absorbed a fighter of type ".$soldier->s_type;
			else
			{
				echo "absorbed a fighter of type ".$soldier->s_type;
				$this->used[] = $soldier;
			}
		}
		else
			echo "can't absorb this, it's not a fighter";
		echo ")\n";
	}
	public function fabricate($soldier)
	{
		echo "(Factory ";
		$used = 0;
		foreach ($this->used as $prev_soldier)
		{
			if ($prev_soldier->s_type == $soldier)
				$used = 1;
		}
		if ($used)
			echo "fabricates a fighter of type ".$soldier;
		else
			echo "hasn't absorbed any fighter of type ".$soldier;
		echo ")\n";
		foreach ($this->used as $prev_soldier)
		{
			if ($prev_soldier->s_type == $soldier)
				return $prev_soldier;
		}
	}
}
?>
