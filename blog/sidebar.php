
	<?php 
	//set up query to get the titles of the latest 10 posts
	$query_latest = 'SELECT title, post_id
				FROM Posts
				WHERE is_public = 1
				ORDER BY date DESC
				LIMIT 10';
	//run it and check to make sure the rsult contains posts
		if($result_latest = $db->query($query_latest)):
	?>



	


	<h2>Latest Posts</h2>

	<ul>
		<?php 
		//from the list of results, go through each now, one at a time
		while( $row_latest = $result_latest->fetch_assoc() ): ?>
		<li><a href="index.php?page=single&amp;post_id=<?php echo $row_latest['post_id']; ?>">
			<?php echo $row_latest['title']; ?></a></li>
		<?php endwhile; ?>
	</ul>
<?php endif; ?>

<?php 
	//set up query to get the titles of the latest 10 posts
	$query_cat = 'SELECT name, category_id
				FROM Categories
				ORDER BY name';
	//run it and check to make sure the rsult contains posts
		if($result_cat = $db->query($query_cat)):
	?>

	<h2>Categories</h2>

	<ul>
		<?php 
		//from the list of results, go through each now, one at a time
		while( $row_cat = $result_cat->fetch_assoc() ): ?>
		<li><a href="#"><?php echo $row_cat['name']; ?></a></li>
		<?php endwhile; ?>
	</ul>
<?php endif; ?>

<?php 
	//set up query to get the titles of the latest 10 posts
	$query_link = 'SELECT title, link_id
				FROM links
				ORDER BY title';
	//run it and check to make sure the rsult contains posts
		if($result_link = $db->query($query_link)):
	?>

	<h2>Links I like</h2>

	<ul>
		<?php 
		//from the list of results, go through each now, one at a time
		while( $row_link = $result_link->fetch_assoc() ): ?>
		<li><a href="#"><?php echo $row_link['title']; ?></a></li>
		<?php endwhile; ?>
	</ul>
<hr>
	<h2 id="rss"><a href="rss.php">Subscribe to Feed</a></h2>
<?php endif; ?>
