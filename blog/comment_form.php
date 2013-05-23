<section id="commentform">
	<h3>Leave a Comment:</h3>

	<?php 
	//error/success reporting
	if(isset($message) ):
		echo '<div class="message">'.$message.'</div';
	endif;
	 ?>

	<form method="post" action="#commentform">
		<label for="name">*Your Name:</label>
		<input type="text" name="name" id="name" required="required" placeholder="required" />
		
		<label for="email">*Your E-mail: (is not distributed)</label>
		<input type="email" name="email" id="email" required="required" placeholder="required" />
	
		<label for="url">Your Website:</label>
		<input type="url" name="url" id="url" />
	
		<label for="comment">*Leave a Comment:</label>
		<textarea name="comment" id="comment" required="required" placeholder="required"></textarea>

		<input type="submit" value="Post It" />
		<input type="hidden" name="did_comment" value="1" />
	</form>

</section>