<?php
			//db host, username, password, database name
$db = new mysqli( 'localhost', 'nick_s', 'password', 'blog_ngs' );

//if there is an error connecting, kill the page
if ( $db->connect_errno > 0 ) {
	die('Unable to connect to database YOU MUST DIE');
}




