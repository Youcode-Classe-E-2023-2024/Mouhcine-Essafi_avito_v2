<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>
   <link rel="stylesheet" href="css/login.css">

</head>
<body>
<h2>Weekly Coding Challenge #1: Sign in/up Form</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="register_trait.php" method="POST">
			<h1>Create Account</h1>
			<span>or use your email for registration</span>
			<input class="input" name="fullname" type="text" placeholder="FullName" />
         <input class="input" name="phone" type="number" placeholder="PhoneNumber" />
			<input class="input" name="email" type="email" placeholder="Email" />
			<input class="input" name="password" type="password" placeholder="Password" />
         <select class="input" id="gender" name="role">
            <option value="Viewer">Viewer</option>
            <option value="Annoncer">Announcer</option>
         </select>
			<button name="submit" type="submit">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="login_trait.php" method="POST">
			<h1>Sign in</h1>
			<span>or use your account</span>
			<input name="email" class="input" type="email" placeholder="Email" />
			<input name="password" class="input" type="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button name="submit" type="submit">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<script src="js/login.js"></script>

</body>
</html>