<!DOCTYPE html>
<html>
<head>
	<title>SneakerX|LogIn</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style_logIn.css">
	<link rel="stylesheet" type="text/css" href="normalize.css">
</head>
<body>
	<div id="wrapAll">
		<div class="darkBG">
			<div id="logInBox">
				<div id="logInBoxInside">
					<div id="logHead">
						<div class="logHead">
							<span class="logHeader">REGISTRACE</span>
						</div>	
						<div class="logHead">
							<span class="logHeader">PŘIHLÁSIT</span>
						</div>	
					</div>	
					<div class="logBox"></div>
					<div class="logBox">
						<form method="post">
							<input name="id" type="text" placeholder="USERNAME">
							<input name="email" type="email" placeholder="E-MAIL">
							<input name="forname" type="text" placeholder="FORENAME">
							<input name="surname" type="text" placeholder="SURNAME">
							<input name="password" type="password" placeholder="PASSWORD">
							<input name="passwordTry" type="password" placeholder="PASSWORD AGAIN">
							<input name="country" list="countries" placeholder="COUNTRY">
							<datalist id="countries">
								<option value="czech">
							</datalist>
							<input type="checkbox" name="acceptTerms"> <span>Souhlasím s pravidly této stránky. <a href="#">Přečíst...</a></span>
							<input value="Zaregistrovat se" type="submit">
						</form>
					</div>
				</div>
			</div>
			<div id="header">
				<div id="headerInside">
					<a href="/rool/SneakerX" id="headerLogo"></a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>