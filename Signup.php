<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
</head>
<body>

	<h1> Sign up NOW!!</h1>
	<br>
	<br>
	<form method="POST" action="signUpPHP.php">
		<div>
                    <input type="text" placeholder="First Name .." id="first_name" name="fname" required>
                    <input type="text" placeholder="Last Name .." id="last_name" name="lname" required>
                    <input type="email" placeholder="Email .." id="email" name="email" required>
                    <input type="text" placeholder="User Name .." id="user_name" name="uname" required>
                    <input type="password" placeholder="password .." id="pass_word" name="pass" required>
                    <input type="password" placeholder="Confirm password .." id="C_password" required>
                    <input type="submit" value="submit">
                    <input type="reset" value="Cancel">
                </div>
	</form>

</body>
</html>