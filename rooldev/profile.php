<?php include "autoLoad.php" ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile</title>
	</head>

	<body>
		<img src="<?php echo $_SESSION['userData']['picture']['url'] ?>">
		<table>
			<tr>
				<td><?php echo $_SESSION['userData']['id'] ?></td>
			</tr>
			<tr>
				<td><?php echo $_SESSION['userData']['first_name'] ?></td>
			</tr>
			<tr>
				<td><?php echo $_SESSION['userData']['last_name'] ?></td>
			</tr>
			<tr>
				<td><?php echo $_SESSION['userData']['email'] ?></td>
			</tr>
		</table>
	</body>
</html>