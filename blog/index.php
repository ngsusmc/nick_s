<?php require('db_connect.php'); 
include_once('functions.php');?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thy Blog</title>

<link rel="stylesheet" type="text/css" href="css/format.css" />
<link href='http://fonts.googleapis.com/css?family=Shojumaru|Titillium+Web:300|Germania+One' rel='stylesheet' type='text/css'>
<link rel="alternate" type="application/rss+xml" href="http://localhost/nick_s/blog/rss.php" />
</head>
<body>
<div id="container">
	<header>
		<h1>Thy Blog</h1>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php?page=blog">Blog</a></li>
				<li><a href="index.php?page=links">Links</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<?php
		//logic to load the correct page contents.
		//URI will look like domain.com/index.php?page= something (blog, home, ...)
		switch( $_GET['page'] ){
			case 'blog':
				include('content_blog.php' );
			break;
			case 'links':
				include('content_links.php' );
			break;
			case 'single':
				include('content_single.php' );
			break;
			default:
				include('content_home.php'); 
		}
			?>
		 
	</main>

	<aside>
		<?php include('sidebar.php'); ?>


	</aside>

	<footer>
		<p>&copy; 2013 Platt College</p>
	</footer>
</div>
</body>
</html>