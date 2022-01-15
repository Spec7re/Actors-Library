<?php include '_partials/header.php'; ?>

<h1>Search Actors by Name</h1>

	<form id="actor-selection" action="index.php" method="POST">

		  <select id="letter" name="letter" >
		  	<?php
		  		$alphabet = str_split('abcdefghijklmnopqrstuvwxyz');
		  		foreach( $alphabet as $letter ) {
		  			echo "<option value='$letter'>$letter</option>";
				}
		  	?>
		  </select>

		  <button id="submit" type="submit">GO!</button><br>

	</form>

<p>Results here:</p>


		<ul class="actors_list">

			<?php
				if( $actors ) {
					foreach( $actors as $actor ) {
						echo "<li data-actor_id='{$actor->actor_id}'><a href='actor.php?actor_id={$actor->actor_id}'>{$actor->first_name} {$actor->last_name}</a></li>";
					}
				}
			?>

		</ul>

		<script id="actorListTemplate" type="text/x-handlebars-template">
		{{ #each this }}
			<li data-actor_id="{{actor_id}}">
				<a href="actor.php?actor_id={{actor_id}}">{{ fullName this }}</a>
			</li>
		{{ /each }}
		</script>

<?php include '_partials/footer.php' ?>
