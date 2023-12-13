<?php

/**
 * 1) This script should print  "Here is the name: $name - $name2"
 * $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!
 *
 * 2) The print_r should print 5 random names; Please modify only the functions themselves, not the way we invoke them.
 */


$arr = [];
function combineNames($str1 = "", $str2 = "")
{

	$params = [$str1, $str2];
	foreach ($params as $index => $param) {

		if ($param == "") {
			$params[$index] = randomHeroName();
		}
	}
	echo implode(" - ", $params);
}

function randomGenerate(&$arr, $amount)
{
	for ($i = $amount; $i > 0; $i--) {
		array_push($arr, randomHeroName());
	}
	return $amount;
}

function randomHeroName()
{
	$hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black"];
	$hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil"];
	shuffle($hero_firstnames);
	shuffle($hero_lastnames);
	return $hero_firstnames[0] . " " . $hero_lastnames[0];
}

echo "Here is the name: " . combineNames();

echo PHP_EOL . PHP_EOL;

$fiveHeroesHolder = [];
randomGenerate($fiveHeroesHolder, 5);
print_r($fiveHeroesHolder);
