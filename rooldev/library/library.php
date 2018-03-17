<?php

function vypisTabulku($array, $whatArr = "všechno"){
	if (!is_array($array)) {
		return "Chyba. Není pole.";
	}
	return vygenerujTabulku($array, $whatArr);
}
function vygenerujTabulku($array, $whatArr = "všechno"){
	if ($_GET['jak']==="up") {
		$jak = "down";
	}else{
		$jak = "up";
	}
	$vysledek = '<table border="1">';
	$vysledek .= "<tr>";
	foreach ($array[0] as $ke => $vall) {
		if (!is_int($ke)) {
			$vysledek .= '<td>';
			$vysledek .= '<a href="?co='.$ke."&jak=".$jak.'">'.$ke;
			$vysledek .= '</td>';
		}	
	}
	$vysledek .= "</tr>";
	foreach ($array as $key => $value) { 
		$vysledek .= "<tr>";
		foreach ($array[$key] as $k => $val) {
			if (!is_int($k)) {
				$vysledek .= "<td>";
				$vysledek .= $val;
				$vysledek .= "</td>";		
			}			
		}
		$vysledek .= "</tr>";
	}
	$vysledek .= "</table>";
	return $vysledek;
}
function recursion($a, $b, $what){
	if ($a < $b) {
		$vysledek = $what;
		recursion($a + 1, $b, $what);
		return $vysledek;
	}
}
function rs_varCheck($method, $var){
	if ($method === "get") {
		if (!isset($_GET[$var])) {
			return $_GET[$var] = "";
		}
	}
}
function rs_varLogCheck($var, $method='post'){
	if($method === 'post'){
		if (!isset($_POST[$var]) || empty($_POST[$var])){
			$_SESSION['vys'] = "nechodí to";
			$_SESSION['logged'] = 0;
			header("Location: index.php");
			header("Connection: close");
			exit();
		}
	}
	if($method === 'session'){
		if (!isset($_SESSION[$var]) || empty($_SESSION[$var])){
			$_SESSION['vys'] = "nechodí to";
			$_SESSION['logged'] = 0;
			header("Location: index.php");
			header("Connection: close");
			exit();
		}
	}
	
}
function rs_logCheck(){
	if($_SESSION['logged'] !== 1){
		echo "tahni";
		header("Connection: close");
		exit();
	}
}