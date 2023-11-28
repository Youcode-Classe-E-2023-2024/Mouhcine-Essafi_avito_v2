<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Avito.ma</title>
    <!-- <link rel="stylesheet" href="css/login.css"> -->
</head>
<body>
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
</body>
</html>