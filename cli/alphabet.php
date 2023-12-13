<?php

/**
 * The $arr array should contain the english alphabet in the format  Array ([0] => a, [1] => b, [2] => c, ...)
 */

$arr = [];
for ($letter = 97; $letter <= 122; $letter++) {
	array_push($arr, chr($letter));
}

print_r($arr);
