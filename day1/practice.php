<?php
//create status var - possible values are 'success' or 'error'
$status = 'success';
$message = 'Hello World';

//Logic to control the message text base on the status
if( $status == 'success'){
	$message = 'Your information was submitted successfully! YAY!';
}else{
	$message = 'Sorry. Something went wrong. Try again.';
}



?>

<!DOCTYPE html>
<html>

<head>
	<style>
		.error{
			background-color:#F00;
		}

		.success{
			background-color:#0F0;
		}
	</style>
</head>

<body>
<div class="<?php echo $status; ?>">
	<?php
	//this is a secret comment
	echo "$message"; ?>
</div>
	<h2>Just Kidding</h2>

<?php
// this is my own test
if (1===1) {
	echo '1 is 1';
}else 
{
	echo 'this is not going to happen';
}
?>
</br>
<?php 
//This is the IF THEN statement but shorter and used with a pre-determined variable from php.net
$day = date('N');

switch ($day)
{
	case 1:
	echo 'Monday';
	break;
	case 2:
	echo 'Tuesday';
	break;
	case 3:
	echo 'Wednesday';
	break;
	case 4:
	echo 'Thursday';
	break;
	case 5:
	echo 'Friday';
	break;
	case 6:
	echo 'Saturday';
	break;
	case 7:
	echo 'Sunday';
	break;

	default:
	echo 'The World Has Blown Up';
}
?>

</body>

</html>