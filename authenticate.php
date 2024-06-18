<?php
require_once './config/config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$username = filter_input(INPUT_POST, 'username');
	$passwd = filter_input(INPUT_POST, 'passwd');

	// Get DB instance
	$db = getDbInstance();
	$db->where("ten_dang_nhap", $username);

	$row = $db->get('tai_khoan');

	echo $row;

	if ($db->count >= 1) {
		$db_password = $row[0]['mat_khau'];
		$user_id = $row[0]['tai_khoan_id'];
		$role = $row[0]['vai_tro'];

		if ($passwd === $db_password) {
			$_SESSION['user_logged_in'] = TRUE;
			$_SESSION['user_role'] = $role;
			header('Location: index.php');
		} else {
			$_SESSION['login_failure'] = "Invalid username or password";
			header('Location: login.php');
		}
		exit;
	} else {
		$_SESSION['login_failure'] = "Invalid username or password";
		header('Location: login.php');
		exit;
	}
} else {
	die('Method Not Allowed');
}
?>