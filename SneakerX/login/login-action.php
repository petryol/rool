<?php

	session_start();

	include "db.php";
	include "pdo-library.php";
	include "../js/loginBox.js";

	$username = $_POST["username"];
	$password = $_POST["password"];

	

	$sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
	$prepare = $db->prepare($sql);
	$prepare->execute();
	$data = $prepare->FetchAll();

	if (!empty($data) && isset($data)) {
		foreach ($data as $key => $value) {
			foreach ($value as $key2 => $value2) {
				if (!is_numeric($key2)) {
					$_SESSION["user"][$key2] = $value2;
				}
			}
		}
		$_SESSION["login"] = true;
		$_SESSION["return"] = "Succesfully logged in!";
		header("location: ../login_page.php");
	} else {
		$_SESSION["login"] = false;
		$_SESSION["return"] = "Wrong username or password!";
		header("location: ../login_page.php");
	}

	echo pdo_table($_SESSION);
  	// echo pdo_table($data);

?>