<?PHP
function ft_split($str) {
	$arr = preg_split('/\s+/', $str);
	sort($arr);
	return $arr;
}
?>
