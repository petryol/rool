<?php

	function speed_calculator($a = 0, $b = 0, $calculate = 0) {

		if ($calculate == "v") {
			return "<b>" . $a . "</b>km<b> / </b><b>" . $b . "h </b> = <b>" . $a/$b . "</b>km/h";
		} elseif ($calculate == "s") {
			return "<b>" . $a . "</b>km/h<b> * </b><b>" . $b . "</b>h = <b>" . $b*$a . "</b>km";
		} elseif ($calculate == "t") {
			return "<b>" . $b . "</b>km<b> / </b><b>" . $a . "</b>km/h = <b>" . $b/$a . "</b>h";
		} else {
			return "You need to define what I should calculate.";
		}
	}

	function table_generator($array) {
	
		if (is_array($array)) {

			foreach ($array as $key => $value) {
				if (is_array($value)) {
					$start = 0;
				}

				else {
					$start = 1;
					break;
				}
			}

			if ($start == 0) {

				$p = "<table border = '1'>";

				$nadpisy = array();

				foreach ($array as $key => $value) {
					foreach ($value as $key2 => $value2) {
						if (in_array($key2, $nadpisy)) {
								
						}
						else {
							$nadpisy[] = $key2;
						}
					}
				}

				$p .= "<tr>";
					foreach ($nadpisy as $key => $value) {
						$p .= "<td>" . "<b>" . strtoupper(str_replace("_", " ", "$value")) . "</b>" . "</td>";	
					}
				$p .= "</tr>";

				$f = 0;
				$done = 0;

				foreach ($array as $key => $value) {
					$p .= "<tr>";
					for ($i=0; $i < count($nadpisy); $i++) { 
							
						foreach ($value as $key2 => $value2) {
							if ($key2 == $nadpisy[$i]) {
								$p .= "<td>" . ucfirst($value2) . "</td>";
								$done = 1;
								break;
							}
						}
					if ($done == 0) {
						$p .= "<td>" . "</td>";
					}
					$done = 0;
					}
					$p .= "</tr>";	
				} 

				$p .= "</table>";

				return $p;
			}

			elseif ($start == 1) {

				$p = "<table border = '1'>";

				$nadpisy = array();

				foreach ($array as $key => $value) {
					if (in_array($key, $nadpisy)) {
								
					} else {
							$nadpisy[] = $key;
					}
				}

				$p .= "<tr>";
				foreach ($nadpisy as $key => $value) {
					$p .= "<td>" . "<b>" . strtoupper(str_replace("_", " ", "$value")) . "</b>" . "</td>";	
				}
				$p .= "</tr>";

				$p .= "<tr>";

				foreach ($array as $key => $value) {
					$p .= "<td>" . $value . "</td>";
				}

				$p .= "</tr>";

				$p .= "</table border = '1'";

				return $p;
			}

		}

		else {
			return "nebyl zadan array";
		}
	}

		

	function pdo_table($array) {
		echo "<table border = '1'>";
		echo "<tr>";
		foreach ($array as $key => $value) {
			foreach ($value as $key2 => $value2) {
				if (!is_numeric($key2)) {
					echo "<td>" . $key2 . "</td>";
				}
			}
			break;
		}
		echo "</tr>";

		foreach ($array as $key => $value) {
			echo "<tr>";
				foreach ($value as $key2 => $value2) {
					if (!is_numeric($key2)) {
						echo "<td>" . $value2 . "</td>";
					}
				}
			echo "</tr>";
		}
		echo "</table>";
	}



	function pdo($var = "", $sort = "", $how = "") {

		if (empty($sort) || !isset($sort) || empty($how) || !isset($how)) {
			
			global $db;

			$sql = "SELECT * FROM " . $var;
			$sql_priprava = $db->prepare($sql);
			$sql_priprava->execute();
			$data = $sql_priprava->FetchAll();
		} else {

			global $db;

			$sql = "SELECT * FROM " . $var . " ORDER BY " . $sort . " ". $how;
			$sql_priprava = $db->prepare($sql);
			$sql_priprava->execute();
			$data = $sql_priprava->FetchAll();
		}

		return $data;
	}

?>