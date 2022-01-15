<?php include '_partials/header.php' ?>


<?php
		if ($info) {

			echo "<h1>{$info->first_name}{$info->last_name}</h1>";

			echo "<p>{$info->film_info}</p>";

		} else {

			echo "No valid results found!";
		}
?>
<br>
<p><a href="index.php">BACK</a></p>

<?php include '_partials/footer.php' ?>
