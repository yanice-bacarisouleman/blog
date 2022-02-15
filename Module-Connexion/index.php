<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="livreor.css">
	<title></title>
</head>
<body>

<header>
	<nav>
		<div>
			<h3></h3>
			<ul class="menu-main">
				<li><a href="index.php">HOME</a></li>
				<li><a href="#">PRODUCTS</a></li>
				<li><a href="#">CURRENT</a></li>
				<li><a href="#">MEMBER+</a></li>
			</ul>
		</div>
		<ul class="menu-member">
			<li><a href="#">SIGN UP</a></li>
			<li><a href="#">LOGIN</a></li>
		</ul>
	</nav>	
</header>

<!-- Sign up form !-->
<section class="index-login">
	<div class="wrapper">
		<div class="index-login-signup">
			<h4>SIGN UP</h4>
			<p>Don't have an account yet? Sign up here!</p>
			
			<form action="Include/signup.inc.php" method="post">
				
				<input type="text" name="uid" placeholder="Username">
				<input type="password" name="pwd" placeholder="Password" required>
				<input type="password" name="pwdrepeat" placeholder="Repeat Password" required>
				<input type="text" name="email" placeholder="E-mail" required>	
				
				<br>			
			<button type="submit" name="submit">SIGN UP</button>
			</form>
		</div>
		


<!--login form -->
		<div class="index-login-login">
			<h4>LOGIN</h4>
			<p>Don't have an accout yet? sign up here!</p>
			<form action="Include/login.inc.php" method="post">
				<input type="text" name="uid" placeholder="Username">
				<input type="password" name="pwd" placeholder="Password">
				<br>
				<button type="submit" name="submit">LOGIN</button>
			</form>
		</div>
	</div>
</section>





</body>
</html>