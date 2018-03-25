<?php
	session_start();
	require_once "GoogleAPI/GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("667372365501-90q3ongj6hpcupavg052j56r79j65ccu.apps.googleusercontent.com");
	$gClient->setClientSecret("jhzRolFyGBq7x3qZvVAdpVCB");
	$gClient->setRedirectUri("https://www.rooldev.tk/SneakerX/google_login/g-callback.php");
	$gClient->setScopes(array("https://www.googleapis.com/auth/plus.login", "https://www.googleapis.com/auth/userinfo.email"));
?>