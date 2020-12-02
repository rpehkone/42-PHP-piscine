#!/usr/bin/php
<?PHP
if ($argc != 2)
{
	print("Incorrect Parameters\n");
	return ;
}
array_shift($argv);
function error(){
	print("Syntax Error\n");
	exit(-1);
}
$str = trim($argv[0], " ");
$i = 0;
if ($str[$i] == '+' || $str[$i] == '-')
	$i++;
while ($i < strlen($str) && $str[$i] != '+' && $str[$i] != '-' && $str[$i] != '*' && $str[$i] != '/' && $str[$i] != '%')
	$i++;
if ($i < strlen($str))
	$op = $str[$i];
else
	error();
$str[$i] = ' ';
$nums = preg_split('/\s+/', $str);
if (count($nums) != 2)
	error();
$n1 = trim($nums[0], " ");
$n2 = trim($nums[1], " ");
if(!is_numeric($n1))
	error();
if(!is_numeric($n2))
	error();
if ($op == '+')
	$res = $n1 + $n2;
else if ($op == '-')
	$res = $n1 - $n2;
else if ($op == '*')
	$res = $n1 * $n2;
else if ($op == '/')
	$res = $n1 / $n2;
else if ($op == '%')
	$res = $n1 % $n2;
else
	error();
print("$res\n");
?>
