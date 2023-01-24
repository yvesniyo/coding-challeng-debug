<?php

/**
 * This script should print  "Here is the name: $name - $name2"
 * $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!
 */


$arr = [];
function combineNames($str1 = "", $str2 = "")
{
	$params = [$str1, $str2];
	foreach ($params as $param) {
		if ($param == "") {
			$param = randomHeroName();
		}
	}
	echo implode($params, " - ");
}

function randomGenerate($arr, $amount)
{
	for ($i = $amount; $i > 0; $i--) {
		array_push($arr, randomHeroName());
	}
	return $amount;
}

function randomHeroName()
{
	$hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black"];
	$hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil"]
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[rand(0, count($heroes))][rand(0, 10)];

    echo $randname;
}

echo "Here is the name: " . combineNames();
