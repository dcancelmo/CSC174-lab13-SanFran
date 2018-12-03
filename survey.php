<!doctype html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Cupcake Survey!</title>
	</head>

	<body>
	<?php include 'inc/header.php' ?>
	<main>
		<h2>The Important cupcake survey!</h2>
			<form method="post" action="survey-thanks.php">
				<label class="fixed" for="username">Your Name: </label>
				<input type="text" name="username" id="username">
				<label class="fixed" for="cupcake">Favorite Cupcake: </label>
				<input type="text" name="cupcake" id="cupcake">
				<label class="fixed" for="frosting">Favorite frosting: </label>
				<input type="text" name="frosting" id="frosting">
				<label class="fixed" for="sprinkles">Do you like sprinkles? </label>
				<input type="radio" name="sprinkles" value="yes">Yes
				<input type="radio" name="sprinkles" value="no">No
				<input type="radio" name="sprinkles" value="sometimes">Sometimes


				<fieldset>
				<h3><label for="userrecipes">Submit your own cupcake recipe below!</label></h3>
				<textarea name="userrecipes" id="userrecipes" cols ="60" rows="30"></textarea>
				</fieldset>
				<input type="submit" value="Here's my survey response!">
			</form>
	</main>
	</body>
</html>