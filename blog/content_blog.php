
		<?php 
		//set up a query to get the latest two post that are published
		$query = 'SELECT posts.*, categories.*, users.username, users.user_id
					FROM posts, categories, users
					WHERE posts.is_public = 1  
					AND posts.category_id = categories.category_id
					AND posts.user_id = users.user_id
					ORDER BY posts.date DESC
					LIMIT 10';
		//run it and check to make sure the result contains posts
		if ($result = $db->query($query)):

		?>

		<h2>My Blog:</h2>

		<?php 
		//loop through the list of results 
		while( $row = $result->fetch_assoc() ):
		?>

		<article class="post">
			<h3><a href="index.php?page=single&amp;post_id=<?php echo $row['post_id']; ?>"><?php echo $row['title']; ?></a></h3>
			<div class="postmeta">Posted on <?php echo convert_date($row['date']); ?> 
				| in the category <?php echo $row['name']; ?>
				| By <?php echo $row['username']; ?>
			</div>
			<p><?php echo $row['body']; ?></p>
		</article>

		<?php 
		endwhile;
		?>

			<?php else: ?>
				<h2>No Posts to Show</h2>
			<?php endif; ?>