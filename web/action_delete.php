<?php

$database_host = '';
$database_user = '';
$database_password = '';
$database_name = '';

$question_id = $_POST['id'];

if (!($connection = mysqli_connect($database_host, $database_user, $database_password, $database_name))) {
	die(mysqli_connect_error());
}

mysqli_query($connection, "DELETE FROM questions WHERE id='{$question_id}' LIMIT 1");

if (mysqli_affected_rows($connection) > 0) {
	$result = ['status' => true];
} else {
	$result = ['status' => false];
}

die(json_encode($result));