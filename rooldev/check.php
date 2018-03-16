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
	if($_SESSION['logged'] === 1){
		echo "zdar";
	}else{
		echo "tahni";
	}
	
	?>
</body>
</html>