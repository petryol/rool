<?php include "../../autoLoad.php"; ?>
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
	
		echo 'Vítej!';
	
	?>
</body>
</html>