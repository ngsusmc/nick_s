<?php 
//the correct username/password combo
$correct_username = 'nickgene';
$correct_password = 'password';

//if the form was submitted, try to log them in
if($_POST['did_login'] == 1 ){
	//extract the values the user typed in
	//this is a shortcut variable set up 
	$username = $_POST['username'];
	$password = $_POST['password'];

	//comparing username and password with what they typed in, if matched log them in
	if($username == $correct_username AND $password == $correct_password){
		$logged_in = 1;
	}else{
		$error = 1;
	}

}

 ?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Sessions</title>

</head>

<body>

<?php 
//if not logged in show the form
if (!$logged_in) {
 ?>

	<h1>Login</h1>
	<?php
	//if an error wa triggered, show this message
	 if($error) {
	 	echo 'Username and password do not match. Fuck off.';
	} 
	?>
	<form method="post" action="login.php">
		<label for="username">Username:</label>
		<input type="text" name="username" id="username">

		<label for="password">Password</label>
		<input type="password" name="password" id="password">

		<input type="submit" value="Log In">
		<input type="hidden" name="did_login" value="1">

	</form>
<?php
}//end of not logged in 
else {
	echo 'You are logged in';
}?>

</body>
</html>