
		<?php 
		//set up a query to get the latest two post that are published
		$query = 'SELECT title, description, url
					FROM links
					LIMIT 10';
		//run it and check to make sure the result contains posts
		if ($result = $db->query($query)):

		?>

		<h2>Links:</h2>

		<?php 
		//loop through the list of results 
		while( $row = $result->fetch_assoc() ):
		?>

		<article class="post">
			<h3><a href="<?php echo $row['url']; ?>"><?php echo $row['title']; ?></a></h3>
			<div class="postmeta"><?php echo $row['description']; ?> 
			
			</div>
			<p><?php echo $row['body']; ?></p>
		</article>

		<?php 
		endwhile;
		?>

			<?php else: ?>
				<h2>No Posts to Show</h2>
			<?php endif; ?>