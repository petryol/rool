<?php include "autoLoad.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>rooldev</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<span id="created_by" class="unselectable"><a id="link" href="">$created_by = <b>"rooldev"</b>;</a></span>
	<div id="wrap">	
		<form method="post" action="action.php">
			<input type="text" name="user">
			<input type="password" name="password">
			<input type="submit">
		</form>
		<b><a href="SneakerX/index.php">SneakerX</a></b>
		<?php 
	
			if(isset($_SESSION['vys']) || !empty($_SESSION['vys'])){
				echo $_SESSION['vys']; 
			}
			
		?>
	</div>
</body>
</html>