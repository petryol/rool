<?php

	require_once "Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => '942631019230017',
		'app_secret' => '791458f02a4361a2889575b9874cc1fc',
		'default_graph_version' => 'v2.12'
	]);

	$helper = $FB->getRedirectLoginHelper();

?>