<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Post Method Example </title>
</head>

<body>
	<form method="post" action="post.php">
		<label for="name">What is your name?</label>
		<input type="text" name="name" id="name">

		<label for="breakfast">What did you have eat for breakfast?</label>
		<input type="text" name="breakfast" id="breakfast">

		<input type="submit" value="Go!" />

		<input type="hidden" name="did_submit" value="1" />
	</form>

	<?php
	//only show the message if the form was submitted
	if( $_POST['did_submit'] == 1 ){
		/*echo 'Good Morning, ';
		echo $_POST['name']; 
		echo '. ';
		echo $_POST ['breakfast'];
		echo ' sounds delicious';*/
	//just a string display instead of 5 lines above
		echo 'Good Morning, '. $_POST['name']. '. '. $_POST ['breakfast']. ' sounds delicious';
	}
	?>
</body>
</html>