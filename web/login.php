<?php

session_start();

$database_host = '';
$database_user = '';
$database_password = '';
$database_name = '';

$username = $_POST['username'];
$password = $_POST['password'];

if (!($connection = mysqli_connect($database_host, $database_user, $database_password, $database_name))) {
	die(mysqli_connect_error());
}

$query = mysqli_prepare($connection, "SELECT * FROM users WHERE username=? LIMIT 1");
mysqli_stmt_bind_param($query, 's', $username);
mysqli_stmt_execute($query);

$result = mysqli_stmt_get_result($query);

$response = ['status' => false];

if ($result->num_rows == 1) {

	$userEntry = mysqli_fetch_assoc($result);

	if (password_verify($password, $userEntry['password'])) {
		$_SESSION['user_id'] = $userEntry['id'];
		$response = ['status' => true];
	} else {
		$response = ['status' => false];
	}
}

die(json_encode($response));
