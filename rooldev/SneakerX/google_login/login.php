<?php
	require_once "config.php";

	if (isset($_SESSION["access_token"])) {
		header("location: index.php");
		exit();
	}

	$loginURL = $gClient->createAuthUrl();
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
			<div class="col-md-6 col-offset-3" align="center">

				<img src="../PicsDodelat/Logo.png" style="width: 300px;"><br><br>

				<form>
					<input type="email" name="email" placeholder="Email..." class="form-control"><br>
					<input type="password" name="email" placeholder="Password..." class="form-control"><br>
					<input type="submit" name="submit" value="Log In" class="btn btn-primary">
					<input type="button" onclick="window.location = '<?php echo $loginURL ?>'" name="google-submit" value="Log In With Google" class="btn btn-danger">
				</form>
				
			</div>
		</div>
	</div>
</body>
</html>