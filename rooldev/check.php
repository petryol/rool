<?php include "autoLoad.php" ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dokument bez názvu</title>
</head>

<body>
	<?php
	
	rs_varLogCheck('logged', 'session');
	rs_logCheck();
	
	header('Location: admins/' . $_SESSION['user']);

	?>
</body>
</html>