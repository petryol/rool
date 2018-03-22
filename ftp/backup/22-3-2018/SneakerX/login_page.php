<?php 
	session_start();
	include "login/pdo-library.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>SneakerX - login</title>
	</head>
	<body>
		<form method="post" action="login/login-action.php">
			<input name="username" type="text">
			<input name="password" type="password">
			<input type="submit">
		</form>
		<?php

			if (isset($_SESSION["return"]) && !empty($_SESSION["return"])) {

				echo $_SESSION["return"];

				if ($_SESSION["login"]) {
					echo "<table border='1'>";

					echo "<tr>";

					foreach ($_SESSION["user"] as $key => $value) {						
							echo "<td>" . $key . "</td>";
					}
					echo "</tr>";
					echo "<tr>";
					foreach ($_SESSION["user"] as $key => $value) {						
							echo "<td>" . $value . "</td>";					
					}
					echo "</tr>";
					echo "</table>";
				}
			}
			session_destroy();
			
		?>
	</body>
</html>