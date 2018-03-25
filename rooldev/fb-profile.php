<?php include "autoLoad.php" ?>
<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<meta charset="utf-8">
		<title>Profile</title>
	</head>

	<body>	
		<div class="container" style="margin-top: 100px;">
		<div class="row justify-content-center">
			<div class="col-md-6" align="center">
				<img src="<?php echo $_SESSION['userDataF']['picture']['url'] ?>">
			</div>
			<div class="col-md-9" align="center">
				<table class="table table-hover table-bordered">
					<tbody><br>
						<tr>
							<td>ID</td>
							<td><?php echo $_SESSION['userDataF']['id'] ?></td>
						</tr>
						<tr>
							<td>First Name</td>
							<td><?php echo $_SESSION['userDataF']['first_name'] ?></td>
						</tr>
						<tr>
							<td>Last Name</td>
							<td><?php echo $_SESSION['userDataF']['last_name'] ?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?php echo $_SESSION['userDataF']['email'] ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	</body>
</html>