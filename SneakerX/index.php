<!DOCTYPE html>
<html>
	<head>
		<title>SneakerX</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="normalize.css">
	</head>
	<body>
		<div id="wrapAll">
			<div id="body">
				<div id="wrap">
					<div id="content">
						<div id="content_box">
							<div id="news" class="article">
								<div class="darkBG">
									<div class="insideBox">
										<div id="newsLeftArrow">
											<div class="newsArrow"></div>
										</div>
										<div class="newsArticles">
											<div class="newsArticle">
												<span class="headerNews">ULTRABOOST ALL TERRAIN SHOES</span>
												<a href="https://m.adidas.com/us/ultraboost-all-terrain-shoes/BB6131.html" target="_blank" class="newsProduct"></a>
												<span class="newsDropDate">27.2. 9:00 am</span>
												<span class="newsPrice">$240</span>
											</div>
											<div class="newsArticle">
												<span class="headerNews">YEEZY ZEBRA</span>
												<a href="https://m.adidas.com/us/ultraboost-all-terrain-shoes/BB6131.html" target="_blank" class="newsProduct"></a>
												<span class="newsDropDate">xx.x. x:xx xx</span>
												<span class="newsPrice">$xxx</span>
											</div>
										</div>
										<div id="newsRightArrow">
											<div class="newsArrow"></div>
										</div>
										<div class="newsBannerBar">
											<div class="newsBnrBar">
												<div class="newsBnrBarChck"></div>
											</div>
											<div class="newsBnrBar">
												<div class="newsBnrBarChck"></div>
											</div>
										</div>
									</div>
								</div>	
							</div>
							<div id="about">
								<div class="insideBox">
									<h1>Něco o SneakerX</h1>
									<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
								</div>
							</div>
							<div id="bestOfBG" class="article">
								<div class="darkBG">
									<div class="insideBox">
										<span class="specialHeader">Nadbídky přímo pro vás:</span>
										<div id="productCard" class="productCard">
											<div id="closeProductCard"></div>
										</div>
										<div id="test" class="productIco bestOfInsideBox">
											<img src="pics/offwhite.png" class="productIcoImg" title="product">
											<span class="productIcoSpan">2500,-</span>
										</div>
										<div class="productIco bestOfInsideBox">
										
										</div>
										<div class="productIco bestOfInsideBox">
										
										</div>
										<div class="productIco bestOfInsideBox">
										
										</div>
									</div>	
								</div>
							</div>
							<div id="interestOffers" class="article">
								<div class="insideBox">
									<span class="specialHeader">Zajímavé nabídky:</span>
									<div class="productIco bestOfInsideBox">
										<img src="pics/offwhite.png" class="productIcoImg" title="product">
										<span class="productIcoSpan">2500,-</span>
									</div>
									<div class="productIco bestOfInsideBox">

									</div>
									<div class="productIco bestOfInsideBox">

									</div>
									<div class="productIco bestOfInsideBox">

									</div>
								</div>	
							</div>
							<div id="allOffers" class="article">
								<div class="insideBoxlo									<span class="specialHeader">Nejnovější offers:</span>
								</div>
							</div>
						</div>
					</div>
				</div>		
			</div>
			<div id="header">
				<div id="headerInside">
					<a href="#" title="About">
						<img src="picsDodelat/Logo1.png" alt="Logo" class="logo">
					</a>	
					<ul>
						<li>
							<a href="#">Všechno</a>
							<div class="mainMenu"></div>
						</li>
						<li>
							<a href="#">WTB</a>
							<div class="mainMenu"></div>
						</li>
						<li>
							<a href="#">WTT</a>
							<div class="mainMenu"></div>
						</li>
						<li>
							<a href="#">WTS</a>
							<div class="mainMenu"></div>
						</li>
						<li>
							<a href="#">WTA</a>
							<div class="mainMenu"></div>
						</li>
						<li>
							<a href="#">Další</a>
							<div class="mainMenu"></div>
						</li>
					</ul>
					<div id="logIn"></div>
					<div id="search"></div>	
				</div>
			</div>
			<div id="footer">
				<span class="specialHeader">Created by rool.</span>
			</div>
			<div id="logInBox">
				<div class="insideBox">
					<span>Přihlásit</span>
					<span>Registrovat</span>
					<div id="loginBoxInside">
						<form method="post" action="login/login-action.php">
							<input name="username" type="text">
							<input name="password" type="password">
							<input type="submit">
						</form>
						<?php
							echo $_SESSION["return"];
						?>
					</div>
					<div id="closeLogIn"></div>
				</div>
			</div>
		</div>
		<div id="scrlBtn"></div>
		<script type="text/javascript" src="js/productIco.js"></script>
		<script type="text/javascript" src="js/header.js"></script>
		<script type="text/javascript" src="js/logInBox.js"></script>
		<script type="text/javascript" src="js/newsBanner.js"></script>
	</body>
</html>