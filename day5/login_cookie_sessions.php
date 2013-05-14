<?php
//open a new session or resume the existing session
session_start();
//the correct username/password combo
$correct_username = 'nickgene';
$correct_password = 'password';

//if the form was submitted, try to log them in
if($_POST['did_login'] == 1 ){
	//extract the values the user typed in and (sanitize)
	//this is a shortcut variable set up 
	$username = strip_tags(trim($_POST['username']));/*Trim is killing white space, strip_tags removes html and php language*/
	$password = strip_tags(trim($_POST['password']));

	//check to see if minimum lenths are met (validation)
	if ( strlen($username) >= 5 AND strlen($password) >=5 ) {
		
	

		//comparing username and password with what they typed in, if matched log them in
		if($username == $correct_username AND $password == $correct_password){
			//use cookies and sessions to remember the user
			$_SESSION['logged_in'] = 1;
			setcookie('logged_in', 1, time() + 60 * 10 * 24);
		}else{
			$error = 1;
		}
	}else{
		//username or pass too short
		$error = 1;
	}
}
//if the user is trying to log out, unset and destroy the session and cookies
if ($_GET['action'] == 'logout' ) {
	unset( $_SESSION['logged_in'] );
	session_destroy();
	setcookie('logged_in', '', time() - 60 * 60 * 24 * 365 );


}

//if the user visits the page and the cookie is still valid recreate the session variables
elseif( $_COOKIE['logged_in'] == 1 ){
	$_SESSION['logged_in'] = 1;
}

 ?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Sessions</title>
<link rel="stylesheet" type="text/css" href="reset.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

<?php 
//if not logged in show the form
if (!$_SESSION['logged_in'] ) {
 ?>

	<h1>Login</h1>
	<?php
	//if an error was triggered, show this message
	 if($error) {
	 	echo 'Username and password do not match. Fuck off.';
	} 
	?>
	<hr> </hr>
	<form method="post" action="login_cookie_sessions.php">
		<label class="text" for="username">Username</label>
		<input class="input" type="text" name="username" id="username">

		<label class="text" for="password">Password</label>
		<input class="input" type="password" name="password" id="password">

		<input class="button" type="submit" value="Log In">
		<input  type="hidden" name="did_login" value="1">

	</form>

<?php
}//end of not logged in 
else { ?>
	<p>You're Logged In</p>
	<p> <a href="login_cookie_sessions.php?action=logout">Logout</a></p>

<?php }?>


</body>
</html>