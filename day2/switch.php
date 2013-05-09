<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Switch Navigation Example </title>
</head>

<body>
	<header>
		<h1>My Switch Navigation Example</h1> 
		<nav>
			<ul>
				<li><a href="switch.php">Home</a></li>
				<li><a href="switch.php?page=about">About</a></li>
				<li><a href="switch.php?page=contact">Contact</a></li>
			</ul>
		</nav>
	</header

	<main>
		<?php 

		//include the apporopriate content based on the link clicked
	switch ($_GET['page'] ) {
		case 'about':
			include('content_about.php');
			break;
		case 'contact':
			include('content_contact.php');
			break;
		default:
			include('content_home.php');
	}
		?>
	</main>

	<footer>
		<p>&copy; It's time to smoke &copy;</p>
	</footer>
</body>
</html>