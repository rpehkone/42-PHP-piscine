<?PHP
function ft_is_sort($arr){
	$copy = $arr;
	sort($copy);
	$i = 0;
	foreach($copy as $word)
	{
		if ($word !== $arr[$i])
			return false;
		$i++;
	}
	return true;
}
?>
