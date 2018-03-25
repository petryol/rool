<?php
	session_start();

	if (!isset($_SESSION["access_token"])) {
		header("location: login.php");
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login With Google</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="margin-top: 100px;">
		<div class="row justify-content-center">
			<div class="col-md-6" align="center">
				<img src="<?php echo $_SESSION['picture'] ?>">
			</div>
			<div class="col-md-9" align="center">
				<table class="table table-hover table-bordered">
					<tbody><br>
						<tr>
							<td>ID</td>
							<td><?php echo $_SESSION["id"] ?></td>
						</tr>
						<tr>
							<td>First Name</td>
							<td><?php echo $_SESSION["givenName"] ?></td>
						</tr>
						<tr>
							<td>Last Name</td>
							<td><?php echo $_SESSION["familyName"] ?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?php echo $_SESSION["email"] ?></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td><?php echo $_SESSION["gender"] ?></td>
						</tr>
					</tbody>
				</table>
				<button><a href="logout.php">Logout</a></button><br>
			</div>
		</div>
	</div>
</body>
</html>