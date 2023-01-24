<?php

/**
 * The $arr array should contain the english alphabet in the format  Array ([0] => a, [1] => b, [2] => c, ...)
 */

$arr = [];
for ($letter = 'a'; $letter <= 'z'; $letter++) {
	array_push($arr, $letter);
}

print_r($arr);
