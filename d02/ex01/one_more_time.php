#!/usr/bin/php
<?PHP
	array_shift($argv);
	if (empty($argv))
		return ;
	date_default_timezone_set("Europe/Paris");
	function error(){
		echo "Wrong Format\n";
		exit(-1);
	}
	$words = preg_split('/\s+/', $argv[0]);
	if (count($words) != 5)
		error();
	$daynames = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche"];
	$test = 0;
	foreach ($daynames as $day)
		if ($day == $words[0])
			$test = 1;
	if (!$test)
		error();
	if (!is_numeric($words[1]))
		error();
	if ((int)$words[1] < 0)
		error();
	$day = $words[1];
	if (strlen($day) > 2)
		error();
	$months = ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre",
	"Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre",
	"janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre",
	"janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"];
	$test = 0;
	$month = 1;
	foreach ($months as $current)
	{
		if ($current == $words[2])
		{
			$test = 1;
			break ;
		}
		$month++;
	}
	if (!$test)
		error();
	if ((int)$month > 36)
		$month -= 36;
	else if ((int)$month > 24)
		$month -= 24;
	else if ((int)$month > 12)
		$month -= 12;
	if (!is_numeric($words[3]))
		error();
	if ((int)$words[3] < 0)
		error();
	$year = $words[3];
	if (!checkdate($month, $day, $year))
		error();
	$test = preg_match("/^(?:2[0-4]|[01][1-9]|10):([0-5][0-9]):([0-5][0-9])$/", $words[4]);
	if (empty($test))
		error();
	$hh = explode(":", $words[4]);
	if (count($hh) != 3)
		error();
	if (!is_numeric($hh[0]) || !is_numeric($hh[1]) || !is_numeric($hh[2]))
		error();
	$utime = mktime((int)$hh[0], (int)$hh[1], (int)$hh[2], $month, $day, $year);
	echo "$utime\n";
?>
