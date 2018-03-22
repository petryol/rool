<?php
function rs_vypsatDb($co="",$jak=""){
	if (!isset($co) || !isset($jak)) {
		return 'SELECT * 
			FROM  `user`'; 
	}
	if ($jak==="up") {
		$jak = "ASC";
	}else{
		$jak = "DESC";
	}
	return 'SELECT * 
				FROM  `user` 
				ORDER BY  `user`.'.$co.' '.$jak;
}
function rs_sortDb($what = ""){
	if ($what === "down") {
		return 'SELECT * 
				FROM  `user` 
				ORDER BY  `user`.`rok` ASC';
	}
	if ($what === "up") {
		return 'SELECT * 
				FROM  `user` 
				ORDER BY  `user`.`rok` DESC ';
	}			
}
function rs_dotaz($sql){
	global $db;
	$sqlPriprava = $db->prepare($sql);
	$sqlPriprava->execute();
	$data = $sqlPriprava->FetchAll();
	return $data;
}
function rs_insertDb($sql){
	global $db;
	/*$sqlPriprava = $db->prepare($sql);
	$sqlPriprava->execute();*/
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->exec($sql);
}
function rs_logIn(){
	global $db;
	
	rs_varLogCheck('user', 'post');
	rs_varLogCheck('password', 'post');
	$user = $_POST['user'];
	$password = $_POST['password'];
	
	global $db;
	$dbPriprava = $db->prepare("SELECT *  FROM `user` WHERE `nick` = :user");
	$dataArr = array(':user' => $user);
	$dbPriprava->execute($dataArr);
	$data = $dbPriprava->Fetch();
	if($data['nick'] !== $user){
		$_SESSION['vys'] = "nejde to";
		$_SESSION['logged'] = 0;
		header("Location: index.php");
		header("Connection: close");
		exit();
	}

	if($data['password'] !== $password){
		$_SESSION['vys'] = "nejde to";
		$_SESSION['logged'] = 0;
		header("Location: index.php");
		header("Connection: close");
		exit();
	}

	$_SESSION['logged'] = 1;
	$_SESSION['user'] = $user;
	
	header("Location: check.php");
	header("Connection: close");
	exit();
}