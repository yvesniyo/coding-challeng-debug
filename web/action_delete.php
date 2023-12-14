<?php

$database_host = '';
$database_user = '';
$database_password = '';
$database_name = '';

$question_id = isset($_POST['id']) ? (int) $_POST["id"] : null;
if (is_null($question_id) || !is_numeric($question_id)  || $question_id == 0) {

	die(json_encode(["status" => false, "message" => "Invalid Question ID"]));
}

if (!($connection = mysqli_connect($database_host, $database_user, $database_password, $database_name))) {
	die(mysqli_connect_error());
}

mysqli_query($connection, "DELETE FROM questions WHERE id='{$question_id}' LIMIT 1");

if (mysqli_affected_rows($connection) > 0) {
	$result = ['status' => true];
} else {
	$result = ['status' => false];
}

mysqli_close($connection);

die(json_encode($result));
